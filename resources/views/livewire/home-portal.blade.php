@php($isAm = $locale === 'am')

<div class="min-h-screen bg-stone-50 text-stone-900">
    {{-- Top Navigation Bar --}}
    <header class="sticky top-0 z-30 bg-white/95 backdrop-blur border-b border-stone-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between gap-4">
            <a href="#top" class="flex flex-col leading-tight">
                <span class="font-bold text-base sm:text-lg tracking-tight text-red-700">
                    {{ $settings->{"company_name_{$locale}"} ?: ($isAm ? 'ጄፒኤ አግሮ-ማሽነሪ አስመጪ ኃ/የተ/የግ/ማ' : 'JPA Agro-Machinery Import PLC') }}
                </span>
                <span class="text-[11px] text-stone-500">
                    {{ $isAm ? 'የግብርና ማሽነሪ እና መሳሪያዎች አቅራቢ' : 'Agricultural Machinery & Equipment' }}
                </span>
            </a>

            <nav class="hidden md:flex items-center gap-6 text-sm font-medium text-stone-700">
                <a href="#about" class="hover:text-red-600 transition">{{ $isAm ? 'ስለ እኛ' : 'About Us' }}</a>
                <a href="#scope" class="hover:text-red-600 transition">{{ $isAm ? 'የስራ ዘርፍ' : 'Business Scope' }}</a>
                <a href="#catalog" class="hover:text-red-600 transition">{{ $isAm ? 'ማሽኖች' : 'Machinery' }}</a>
                <a href="#inquiry" class="hover:text-red-600 transition">{{ $isAm ? 'ጥያቄ ያቅርቡ' : 'Contact & Quote' }}</a>
            </nav>

            <div class="flex items-center gap-1 bg-stone-100 p-1 rounded-lg border border-stone-200">
                <a href="{{ route('locale.switch', 'en') }}"
                   class="px-2.5 py-1 text-xs font-semibold rounded-md transition {{ !$isAm ? 'bg-red-600 text-white' : 'text-stone-700 hover:bg-stone-200' }}">
                    EN
                </a>
                <a href="{{ route('locale.switch', 'am') }}"
                   class="px-2.5 py-1 text-xs font-semibold rounded-md transition {{ $isAm ? 'bg-red-600 text-white' : 'text-stone-700 hover:bg-stone-200' }}">
                    አማርኛ
                </a>
            </div>
        </div>
    </header>

    {{-- Hero Banner with Dynamic Background Image & Settings --}}
    <section id="top" class="relative overflow-hidden bg-red-950 text-white">
        @php($heroImg = $this->resolveMediaUrl($settings->hero_image))
        @if($heroImg)
            <img src="{{ $heroImg }}"
                 alt="{{ $settings->{"hero_title_{$locale}"} ?: $settings->hero_title_en }}"
                 class="absolute inset-0 w-full h-full object-cover object-center opacity-80 contrast-105">
        @endif

{{-- Directional Crimson Gradient: Strong behind left text, lighter on right to reveal machinery --}}
        <div class="absolute inset-0 bg-gradient-to-r from-red-950/90 via-red-950/55 to-red-900/25"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28 grid lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-7 space-y-5 drop-shadow-[0_2px_10px_rgba(0,0,0,0.75)]">
                @php($heroBadge = $settings->{"hero_badge_{$locale}"} ?: $settings->hero_badge_en)
                @if($heroBadge)
                    <span class="inline-block px-3 py-1 rounded-full bg-red-500/20 border border-red-400/30 text-xs uppercase tracking-widest text-red-200 font-semibold">
                        {{ $heroBadge }}
                    </span>
                @endif

                <h1 class="text-3xl sm:text-5xl font-bold leading-tight">
                    {{ $settings->{"hero_title_{$locale}"} ?: ($settings->hero_title_en ?: ($isAm
                        ? 'ዘመናዊ የግብርና ማሽነሪዎችን በጥራት እና በፍጥነት እናቀርባለን'
                        : 'Dependable Agricultural Machinery Sourced for Commercial & Farm Scale')) }}
                </h1>

                <p class="text-red-100/90 text-base sm:text-lg max-w-2xl">
                    {{ $settings->{"hero_subtitle_{$locale}"} ?: ($settings->hero_subtitle_en ?: ($isAm
                        ? 'ጄፒኤ አግሮ-ማሽነሪ አስመጪ ኃ/የተ/የግ/ማ ለእርሻ ልማት፣ ለማህበራት እና ለድርጅቶች ተስማሚ የሆኑ ማሽኖችን እና የድጋፍ አገልግሎት ያቀርባል።'
                        : 'JPA Agro-Machinery Import PLC supplies field-ready machinery, equipment, and responsive commercial support for farms, cooperatives, and enterprises.')) }}
                </p>

                <div class="flex flex-wrap gap-3 pt-2">
                    <a href="#catalog" class="px-5 py-3 rounded-lg bg-red-600 hover:bg-red-500 font-semibold text-sm text-white shadow-sm transition">
                        {{ $isAm ? 'ማሽኖችን ይመልከቱ' : 'Explore Machinery' }}
                    </a>
                    <a href="#inquiry" class="px-5 py-3 rounded-lg bg-white/10 hover:bg-white/20 border border-white/25 font-semibold text-sm text-white backdrop-blur-sm transition">
                        {{ $isAm ? 'የዋጋ ጥያቄ ይላኩ' : 'Request Quotation' }}
                    </a>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="rounded-2xl bg-red-950/60 backdrop-blur-md border border-red-400/25 p-6 space-y-4">
                    <p class="text-xs uppercase tracking-wider text-red-200 font-semibold">
                        {{ $isAm ? 'የአገልግሎት ማዕከል' : 'Corporate Highlights' }}
                    </p>
                    <div class="grid grid-cols-2 gap-4 pt-1">
                        <div class="p-4 rounded-xl bg-black/30 border border-white/10">
                            <div class="text-2xl font-bold text-white">EN / አማ</div>
                            <div class="text-xs text-red-100/80 mt-1">
                                {{ $isAm ? 'ሙሉ ባለሁለት ቋንቋ መረጃ' : 'Bilingual Catalog & Support' }}
                            </div>
                        </div>
                        <div class="p-4 rounded-xl bg-black/30 border border-white/10">
                            <div class="text-2xl font-bold text-white">B2B &amp; Farm</div>
                            <div class="text-xs text-red-100/80 mt-1">
                                {{ $isAm ? 'ለድርጅቶች እና ለአርሶ አደሮች' : 'Commercial & Cooperative Orders' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Business Scope & Capabilities (Dynamic from SiteSetting) --}}
    <section id="about" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 space-y-10">
        <div class="max-w-3xl space-y-2">
            <h2 class="text-2xl sm:text-3xl font-bold text-stone-900">
                {{ $isAm ? 'የስራ ዘርፍ እና አቅም' : 'Business Scope & Capabilities' }}
            </h2>
            <p class="text-stone-600">
                {{ $isAm
                    ? 'ከውጭ ማስመጣት እስከ ደንበኛ ጥያቄ አስተዳደር ድረስ ግልጽ እና ቀልጣፋ አገልግሎት እንሰጣለን።'
                    : 'Structured around direct machinery sourcing, transparent specifications, and direct inquiry handling.' }}
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @for($i = 1; $i <= 3; $i++)
                @php($capTitle = $settings->{"cap{$i}_title_{$locale}"} ?: $settings->{"cap{$i}_title_en"})
                @php($capDesc = $settings->{"cap{$i}_desc_{$locale}"} ?: $settings->{"cap{$i}_desc_en"})

                <div class="bg-white rounded-xl border border-stone-200 border-t-4 border-t-red-600 p-6 shadow-sm space-y-2">
                    <h3 class="font-bold text-lg text-red-700">
                        {{ $capTitle }}
                    </h3>
                    <p class="text-sm text-stone-600">
                        {{ $capDesc }}
                    </p>
                </div>
            @endfor
        </div>
    </section>

    {{-- Filterable Machinery Catalog --}}
    <section id="scope" class="bg-white border-y border-stone-200 py-14">
        <div id="catalog" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold text-stone-900">
                        {{ $isAm ? 'የማሽኖች ዝርዝር' : 'Machinery & Equipment Catalog' }}
                    </h2>
                    <p class="text-sm text-stone-600 mt-1">
                        {{ $isAm ? 'በምድብ ወይም በስም ይፈልጉ' : 'Filter by category or search by title and description' }}
                    </p>
                </div>

                <div class="w-full md:w-80">
                    <flux:input wire:model.live.debounce.300ms="search"
                                :placeholder="$isAm ? 'ማሽን ይፈልጉ...' : 'Search machinery...'" />
                </div>
            </div>

            {{-- Category Pills --}}
            <div class="flex flex-wrap gap-2">
                <button type="button"
                        wire:click="$set('selectedTag', '')"
                        class="px-3.5 py-1.5 rounded-full text-xs font-semibold border transition {{ $selectedTag === '' ? 'bg-red-600 text-white border-red-600' : 'bg-stone-50 text-stone-700 border-stone-300 hover:border-red-300 hover:bg-red-50' }}">
                    {{ $isAm ? 'ሁሉም' : 'All Categories' }}
                </button>

                @foreach($categories as $category)
                    <button type="button"
                            wire:click="selectTag({{ \Illuminate\Support\Js::from($category) }})"
                            class="px-3.5 py-1.5 rounded-full text-xs font-semibold border transition {{ $selectedTag === $category ? 'bg-red-600 text-white border-red-600' : 'bg-stone-50 text-stone-700 border-stone-300 hover:border-red-300 hover:bg-red-50' }}">
                        {{ $category }}
                    </button>
                @endforeach
            </div>

            {{-- Machinery Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($machineries as $item)
                    @php($title = $item->{"title_{$locale}"} ?: $item->title_en)
                    @php($tag = $item->{"tag_{$locale}"} ?: $item->tag_en)
                    @php($desc = $item->{"desc_{$locale}"} ?: $item->desc_en)
                    @php($imgSrc = $this->resolveMediaUrl($item->image))

                    <div class="bg-white rounded-xl border border-stone-200 p-5 shadow-sm hover:shadow-md hover:border-red-200 transition flex flex-col justify-between gap-4">
                        <div class="space-y-3">
                            @if($imgSrc)
                                <img src="{{ $imgSrc }}" alt="{{ $title }}"
                                     class="w-full h-48 object-cover rounded-lg bg-stone-100">
                            @endif

                            @if($tag)
                                <span class="inline-block px-2.5 py-0.5 rounded-md text-xs font-semibold bg-red-50 text-red-700 border border-red-200">
                                    {{ $tag }}
                                </span>
                            @endif

                            <h3 class="text-lg font-bold text-stone-900">{{ $title }}</h3>
                            <p class="text-sm text-stone-600 line-clamp-3">{{ $desc }}</p>
                        </div>

                        <button type="button"
                                wire:click="requestQuote({{ \Illuminate\Support\Js::from($title) }})"
                                class="w-full py-2.5 px-4 rounded-lg bg-red-600 hover:bg-red-700 text-white text-sm font-semibold transition">
                            {{ $isAm ? 'የዋጋ ጥያቄ ያቅርቡ' : 'Request Quotation' }}
                        </button>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12 text-stone-500 border border-dashed border-stone-300 rounded-xl">
                        {{ $isAm ? 'ምንም ማሽኖች አልተገኙም።' : 'No machinery matched your filter.' }}
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- Inquiry & Corporate Contact Section --}}
    <section id="inquiry" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid lg:grid-cols-12 gap-8 items-start">
            {{-- Left Column: Dynamic Corporate Contact Info --}}
            <div class="lg:col-span-5 bg-red-50 border border-red-200 rounded-2xl p-8 space-y-6 shadow-sm"
                 style="background-color: #fef2f2; border-color: #fecaca; color: #1c1917;">
                <div class="space-y-2">
                    <span class="inline-block text-xs uppercase tracking-widest font-semibold text-red-700"
                          style="color: #b91c1c;">
                        {{ $isAm ? 'ያግኙን' : 'Direct Contact' }}
                    </span>
                    <h2 class="text-2xl font-bold text-stone-900" style="color: #1c1917;">
                        {{ $settings->{"company_name_{$locale}"} ?: ($settings->company_name_en ?: ($isAm ? 'ጄፒኤ አግሮ-ማሽነሪ አስመጪ ኃ/የተ/የግ/ማ' : 'JPA Agro-Machinery Import PLC')) }}
                    </h2>
                    <p class="text-sm leading-relaxed text-stone-700" style="color: #44403c;">
                        {{ $isAm
                            ? 'ለጅምላ ግዢ፣ ለእርሻ ማህበራት እና ለቴክኒክ ድጋፍ በቀጥታ ያግኙን።'
                            : 'Reach our commercial and technical team for equipment quotes, specifications, and spare parts.' }}
                    </p>
                </div>

                @php($officeLoc = $settings->{"office_location_{$locale}"} ?: $settings->office_location_en)
                @php($bizHours = $settings->{"business_hours_{$locale}"} ?: $settings->business_hours_en)

                <div class="space-y-4 text-sm border-t border-red-200 pt-6" style="border-color: #fecaca;">
                    @if($officeLoc)
                        <div>
                            <div class="text-xs uppercase tracking-wider font-semibold text-red-700" style="color: #b91c1c;">
                                {{ $isAm ? 'ዋና መስሪያ ቤት' : 'Head Office' }}
                            </div>
                            <div class="mt-1 font-medium text-stone-900" style="color: #1c1917;">
                                {{ $officeLoc }}
                            </div>
                        </div>
                    @endif

                    @if($bizHours)
                        <div>
                            <div class="text-xs uppercase tracking-wider font-semibold text-red-700" style="color: #b91c1c;">
                                {{ $isAm ? 'የስራ ሰዓት' : 'Business Hours' }}
                            </div>
                            <div class="mt-1 font-medium text-stone-900" style="color: #1c1917;">
                                {{ $bizHours }}
                            </div>
                        </div>
                    @endif

                    @if($settings->contact_phone)
                        <div>
                            <div class="text-xs uppercase tracking-wider font-semibold text-red-700" style="color: #b91c1c;">
                                {{ $isAm ? 'ስልክ' : 'Phone' }}
                            </div>
                            <div class="mt-1 font-medium text-stone-900" style="color: #1c1917;">
                                {{ $settings->contact_phone }}
                            </div>
                        </div>
                    @endif

                    @if($settings->contact_email)
                        <div>
                            <div class="text-xs uppercase tracking-wider font-semibold text-red-700" style="color: #b91c1c;">
                                {{ $isAm ? 'ኢሜይል' : 'Email' }}
                            </div>
                            <div class="mt-1 font-medium text-stone-900" style="color: #1c1917;">
                                {{ $settings->contact_email }}
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            {{-- Right Column: Quotation Form --}}
            <div class="lg:col-span-7 bg-white rounded-2xl border border-stone-200 p-8 shadow-sm space-y-6">
                <div>
                    <h3 class="text-xl font-bold text-stone-900">
                        {{ $isAm ? 'የመረጃ እና የዋጋ ጥያቄ ማስገቢያ' : 'Send an Inquiry or Quotation Request' }}
                    </h3>
                    <p class="text-sm text-stone-600 mt-1">
                        {{ $isAm
                            ? 'ዝርዝር መረጃዎን ያስገቡ፤ ቡድናችን በቅርቡ ያነጋግርዎታል።'
                            : 'Submit your details below and our team will follow up.' }}
                    </p>
                </div>

                @if($submitted)
                    <div class="p-4 rounded-lg bg-red-50 border border-red-200 text-red-900 text-sm font-medium">
                        {{ $isAm
                            ? 'ጥያቄዎ በተሳካ ሁኔታ ተልኳል። እናመሰግናለን!'
                            : 'Your inquiry has been submitted successfully. Thank you!' }}
                    </div>
                @endif

                <form wire:submit="submitInquiry" class="space-y-4">
                    <div class="grid sm:grid-cols-2 gap-4">
                        <flux:input wire:model="full_name"
                                    :label="$isAm ? 'ሙሉ ስም' : 'Full Name'"
                                    required />

                        <flux:input wire:model="organization_type"
                                    :label="$isAm ? 'የድርጅት አይነት (ለምሳሌ፡ እርሻ፣ ማህበር)' : 'Organization Type'"
                                    required />
                    </div>

                    <div class="grid sm:grid-cols-2 gap-4">
                        <flux:input wire:model="phone"
                                    :label="$isAm ? 'ስልክ ቁጥር' : 'Phone Number'"
                                    required />

                        <flux:input wire:model="email" type="email"
                                    :label="$isAm ? 'ኢሜይል' : 'Email'" />
                    </div>

                    <flux:textarea wire:model="message" rows="4"
                                   :label="$isAm ? 'መልዕክት / የሚፈልጉት ማሽን' : 'Message / Machinery Requirements'"
                                   required />

                    <button type="submit"
                            class="px-6 py-2.5 rounded-lg bg-red-600 hover:bg-red-700 text-white text-sm font-semibold transition">
                        {{ $isAm ? 'ጥያቄ ላክ' : 'Submit Inquiry' }}
                    </button>
                </form>
            </div>
        </div>
    </section>

    {{-- Dark Anchored Footer --}}
    <footer class="bg-stone-950 text-stone-400 py-10 border-t border-stone-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs">
            <span class="text-stone-300 font-medium">
                @php($footerCompany = $settings->{"company_name_{$locale}"} ?: ($settings->company_name_en ?: ($isAm ? 'ጄፒኤ አግሮ-ማሽነሪ አስመጪ ኃ/የተ/የግ/ማ' : 'JPA Agro-Machinery Import PLC')))
                {{ $isAm ? "© {$footerCompany}። መብቱ በህግ የተጠበቀ ነው።" : "© {$footerCompany}. All rights reserved." }}
            </span>
            <div class="flex items-center gap-6">
                <a href="#about" class="hover:text-white">{{ $isAm ? 'ስለ እኛ' : 'About Us' }}</a>
                <a href="#catalog" class="hover:text-white">{{ $isAm ? 'ማሽኖች' : 'Machinery' }}</a>
                <a href="#inquiry" class="hover:text-white">{{ $isAm ? 'ያግኙን' : 'Contact' }}</a>
            </div>
        </div>
    </footer>
</div>

@script
<script>
    $wire.on('scroll-to-inquiry', () => {
        document.getElementById('inquiry')?.scrollIntoView({ behavior: 'smooth' });
    });
</script>
@endscript
