<?php

namespace App\Livewire;

use App\Models\Inquiry;
use App\Models\Machinery;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;

class HomePortal extends Component
{
    public string $search = '';
    public string $selectedTag = '';

    public string $full_name = '';
    public string $organization_type = '';
    public string $phone = '';
    public string $email = '';
    public string $message = '';
    public bool $submitted = false;

    public function mount(): void
    {
        $locale = request()->cookie('app_locale', 'en');
        app()->setLocale(in_array($locale, ['en', 'am'], true) ? $locale : 'en');
    }

    public function selectTag(string $tag): void
    {
        $this->selectedTag = $this->selectedTag === $tag ? '' : $tag;
    }

    public function requestQuote(string $title): void
    {
        $quotePrefix = app()->getLocale() === 'am'
            ? 'የዋጋ ማመልከቻ ጥያቄ ለ፡ '
            : 'Quotation request for: ';

        $this->message = $quotePrefix . $title;
        $this->dispatch('scroll-to-inquiry');
    }

    public function submitInquiry(): void
    {
        $validated = $this->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'organization_type' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'email' => ['nullable', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        Inquiry::create($validated);

        $this->reset(['full_name', 'organization_type', 'phone', 'email', 'message']);
        $this->submitted = true;
    }

    public function resolveMediaUrl(?string $path): ?string
    {
        if (blank($path)) {
            return null;
        }

        if (Str::startsWith($path, ['http://', 'https://'])) {
            return preg_replace('#^https?://(127\.0\.0\.1|localhost):8000/#i', url('/') . '/', $path);
        }

        $cleaned = ltrim($path, '/');

        if (file_exists(public_path($cleaned))) {
            return asset($cleaned);
        }

        return Storage::disk('public')->url($cleaned);
    }

    public function render()
    {
        $cookieLocale = request()->cookie('app_locale');
        if (in_array($cookieLocale, ['en', 'am'], true)) {
            app()->setLocale($cookieLocale);
        }

        $locale = app()->getLocale() === 'am' ? 'am' : 'en';
        $tagColumn = "tag_{$locale}";
        $titleColumn = "title_{$locale}";
        $descColumn = "desc_{$locale}";

        $machineries = Machinery::query()
            ->when($this->search !== '', function ($query) use ($titleColumn, $descColumn) {
                $query->where(function ($q) use ($titleColumn, $descColumn) {
                    $q->where($titleColumn, 'like', '%' . $this->search . '%')
                        ->orWhere($descColumn, 'like', '%' . $this->search . '%');
                });
            })
            ->when($this->selectedTag !== '', function ($query) use ($tagColumn) {
                $query->where($tagColumn, $this->selectedTag);
            })
            ->latest()
            ->get();

        $categories = Machinery::query()
            ->whereNotNull($tagColumn)
            ->where($tagColumn, '!=', '')
            ->distinct()
            ->pluck($tagColumn);

        return view('livewire.home-portal', [
            'locale' => $locale,
            'settings' => SiteSetting::current(),
            'machineries' => $machineries,
            'categories' => $categories,
        ])->layout('components.app');
    }
}
