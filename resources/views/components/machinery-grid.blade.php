@props(['items' => []])

<section id="machinery" class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
            <div>
                <span class="text-red-700 font-bold text-xs tracking-widest uppercase">
                    <span x-show="lang === 'en'">CORE PORTFOLIO</span>
                    <span x-show="lang === 'am'" x-cloak>ዋና ዋና ምርቶች</span>
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mt-2">
                    <span x-show="lang === 'en'">Heavy Equipment & Mechanization Systems</span>
                    <span x-show="lang === 'am'" x-cloak>የግብርና ማሽነሪዎች እና መገልገያዎች</span>
                </h2>
            </div>
            <p class="text-slate-600 max-w-md mt-4 md:mt-0 text-sm">
                <span x-show="lang === 'en'">Engineered for Ethiopia's diverse terrain and soil conditions, supported by guaranteed OEM parts availability.</span>
                <span x-show="lang === 'am'" x-cloak>ለኢትዮጵያ የተለያዩ የመሬት አቀማመጥ እና የአፈር ሁኔታ ተስማሚ ሆነው የተመረቱ።</span>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($items as $item)
                <div class="group bg-white border border-slate-200 rounded-sm overflow-hidden shadow-sm hover:shadow-xl transition duration-300 flex flex-col">
                    <div class="h-56 overflow-hidden bg-slate-200 relative">
                        <img src="{{ $item['image'] }}" alt="{{ $item['title_en'] }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute top-4 left-4 bg-slate-950/90 text-white text-xs font-bold px-3 py-1 uppercase tracking-wider">
                            <span x-show="lang === 'en'">{{ $item['tag_en'] }}</span>
                            <span x-show="lang === 'am'" x-cloak>{{ $item['tag_am'] }}</span>
                        </div>
                    </div>
                    <div class="p-7 flex-grow flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 group-hover:text-red-700 transition mb-3">
                                <span x-show="lang === 'en'">{{ $item['title_en'] }}</span>
                                <span x-show="lang === 'am'" x-cloak>{{ $item['title_am'] }}</span>
                            </h3>
                            <p class="text-slate-600 text-sm leading-relaxed mb-6">
                                <span x-show="lang === 'en'">{{ $item['desc_en'] }}</span>
                                <span x-show="lang === 'am'" x-cloak>{{ $item['desc_am'] }}</span>
                            </p>
                        </div>
                        <a href="#contact" class="inline-flex items-center text-sm font-bold text-red-700 hover:text-red-800">
                            <span x-show="lang === 'en'">Request Technical Specs</span>
                            <span x-show="lang === 'am'" x-cloak>ዝርዝር መረጃ ይጠይቁ</span>
                            <svg class="w-4 h-4 ml-1.5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
