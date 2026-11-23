<header x-data="{ mobileOpen: false, activeDropdown: null }" class="sticky top-0 z-50 bg-white border-b border-slate-200 shadow-sm">
    <!-- Top Corporate & Bilingual Bar -->
    <div class="bg-slate-950 text-slate-300 text-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-9 flex items-center justify-between">
            <div class="hidden md:flex items-center space-x-3 truncate">
                <span class="text-emerald-400 font-semibold">●</span>
                <span x-show="lang === 'en'">JPA Agro-Machinery Import PLC — Addis Ababa, Ethiopia</span>
                <span x-show="lang === 'am'" x-cloak>ጄፒኤ አግሮ-ማሽነሪ አስመጪ ኃ/የተ/የግ/ማ — አዲስ አበባ፣ ኢትዮጵያ</span>
            </div>

            <div class="flex items-center space-x-5 ml-auto">
                <a href="#governance" class="hover:text-white transition">
                    <span x-show="lang === 'en'">Corporate Profile</span>
                    <span x-show="lang === 'am'" x-cloak>የድርጅቱ መገለጫ</span>
                </a>
                <a href="#partners" class="hover:text-white transition">
                    <span x-show="lang === 'en'">OEM & Trade Partners</span>
                    <span x-show="lang === 'am'" x-cloak>ዓለም አቀፍ አጋሮች</span>
                </a>
                <span class="text-slate-700">|</span>

                <!-- Language Switcher -->
                <div class="flex items-center bg-slate-900 border border-slate-700 rounded-sm overflow-hidden">
                    <button @click="lang = 'en'" :class="lang === 'en' ? 'bg-red-700 text-white font-bold' : 'text-slate-400 hover:text-white'" class="px-2.5 py-0.5 transition cursor-pointer">
                        EN
                    </button>
                    <button @click="lang = 'am'" :class="lang === 'am' ? 'bg-red-700 text-white font-bold' : 'text-slate-400 hover:text-white'" class="px-2.5 py-0.5 transition cursor-pointer">
                        አማ
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- JPA Corporate Emblem & Wordmark -->
            <a href="/" class="flex items-center space-x-3.5">
                <div class="w-11 h-11 bg-red-700 flex items-center justify-center rounded-sm shadow-sm">
                    <span class="text-white font-extrabold text-xl tracking-tight">JPA</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-extrabold text-xl tracking-tight text-slate-900 leading-none">
                        JPA <span class="font-semibold text-slate-700">AGRO-MACHINERY</span>
                    </span>
                    <span class="text-[11px] font-semibold text-slate-500 mt-1 tracking-wide">
                        <span x-show="lang === 'en'">IMPORT PLC</span>
                        <span x-show="lang === 'am'" x-cloak>ጄፒኤ አግሮ-ማሽነሪ አስመጪ ኃ/የተ/የግ/ማ</span>
                    </span>
                </div>
            </a>

            <!-- Desktop Menu -->
            <nav class="hidden lg:flex items-center space-x-8">
                <a href="#about" class="text-sm font-semibold text-slate-700 hover:text-red-700 transition">
                    <span x-show="lang === 'en'">Who We Are</span>
                    <span x-show="lang === 'am'" x-cloak>ስለ እኛ</span>
                </a>

                <!-- Machinery Portfolio Dropdown -->
                <div class="relative" @mouseenter="activeDropdown = 'machinery'" @mouseleave="activeDropdown = null">
                    <button class="flex items-center space-x-1 text-sm font-semibold text-slate-700 hover:text-red-700 py-7 transition cursor-pointer">
                        <span x-show="lang === 'en'">Machinery & Solutions</span>
                        <span x-show="lang === 'am'" x-cloak>ማሽነሪዎች እና መፍትሄዎች</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="activeDropdown === 'machinery'" x-transition x-cloak class="absolute left-0 w-72 bg-white border border-slate-200 shadow-xl rounded-sm py-2 z-50">
                        <a href="#tractors" class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-slate-50 hover:text-red-700 font-medium">
                            <span x-show="lang === 'en'">Heavy-Duty Tractors & Implements</span>
                            <span x-show="lang === 'am'" x-cloak>ትራክተሮች እና የእርሻ መገልገያዎች</span>
                        </a>
                        <a href="#harvesters" class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-slate-50 hover:text-red-700 font-medium">
                            <span x-show="lang === 'en'">Combine Harvesters & Threshers</span>
                            <span x-show="lang === 'am'" x-cloak>ኮምባይነሮች እና መውቂያ ማሽኖች</span>
                        </a>
                        <a href="#irrigation" class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-slate-50 hover:text-red-700 font-medium">
                            <span x-show="lang === 'en'">Modern Irrigation & Water Pumps</span>
                            <span x-show="lang === 'am'" x-cloak>ዘመናዊ የመስኖ እና የውሃ ፓምፖች</span>
                        </a>
                        <a href="#parts" class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-slate-50 hover:text-red-700 font-medium border-t border-slate-100">
                            <span x-show="lang === 'en'">OEM Spare Parts & After-Sales</span>
                            <span x-show="lang === 'am'" x-cloak>ኦሪጅናል መለዋወጫዎች እና ጥገና</span>
                        </a>
                    </div>
                </div>

                <a href="#governance" class="text-sm font-semibold text-slate-700 hover:text-red-700 transition">
                    <span x-show="lang === 'en'">Governance & Vision</span>
                    <span x-show="lang === 'am'" x-cloak>አመራር እና ራዕይ</span>
                </a>

                <a href="#contact" class="bg-red-700 hover:bg-red-800 text-white text-sm font-semibold px-5 py-2.5 rounded-sm transition shadow-sm">
                    <span x-show="lang === 'en'">Request Quote / Partner</span>
                    <span x-show="lang === 'am'" x-cloak>ዋጋ ይጠይቁ / አጋር ይሁኑ</span>
                </a>
            </nav>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden">
                <button @click="mobileOpen = !mobileOpen" class="text-slate-700 hover:text-slate-900 p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        <path x-show="mobileOpen" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer -->
    <div x-show="mobileOpen" x-transition x-cloak class="lg:hidden bg-white border-t border-slate-200 px-4 pt-3 pb-6 space-y-3">
        <a href="#about" @click="mobileOpen = false" class="block py-2 text-base font-semibold text-slate-800">Who We Are / ስለ እኛ</a>
        <a href="#machinery" @click="mobileOpen = false" class="block py-2 text-base font-semibold text-slate-800">Machinery / ማሽነሪዎች</a>
        <a href="#governance" @click="mobileOpen = false" class="block py-2 text-base font-semibold text-slate-800">Governance / አመራር</a>
        <a href="#contact" @click="mobileOpen = false" class="block mt-3 text-center bg-red-700 text-white font-semibold py-2.5 rounded-sm">Contact JPA</a>
    </div>
</header>
