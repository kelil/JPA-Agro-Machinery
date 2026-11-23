<section id="contact-form" class="py-20 bg-slate-100 border-t border-slate-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white p-8 md:p-12 rounded-sm shadow-xl border border-slate-200">
            <div class="text-center mb-10">
                <span class="text-red-700 font-bold text-xs tracking-widest uppercase">
                    <span x-show="lang === 'en'">GET IN TOUCH</span>
                    <span x-show="lang === 'am'" x-cloak>ያግኙን</span>
                </span>
                <h2 class="text-3xl font-bold text-slate-900 mt-2">
                    <span x-show="lang === 'en'">Request a Quote or Partnership Inquiry</span>
                    <span x-show="lang === 'am'" x-cloak>የዋጋ ግምት ወይም የትብብር ጥያቄ ይላኩ</span>
                </h2>
                <p class="text-slate-600 text-sm mt-2">
                    <span x-show="lang === 'en'">Reach out for heavy machinery orders, LC trade terms, or OEM spare parts availability.</span>
                    <span x-show="lang === 'am'" x-cloak>ለማሽነሪ ትዕዛዞች፣ ለባንክ ኤልሲ (LC) አሠራር ወይም ለመለዋወጫዎች ያግኙን።</span>
                </p>
            </div>

            @if(session('success'))
                <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm rounded-sm">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('inquiry.store') }}" method="POST" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold uppercase text-slate-700 mb-2">Full Name / ስም</label>
                        <input type="text" name="full_name" required class="w-full border border-slate-300 px-4 py-3 rounded-sm text-sm focus:outline-none focus:border-red-700">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase text-slate-700 mb-2">Organization Type / የድርጅቱ ዓይነት</label>
                        <select name="organization_type" class="w-full border border-slate-300 px-4 py-3 rounded-sm text-sm focus:outline-none focus:border-red-700 bg-white">
                            <option value="Commercial Farm">Commercial Farm / ሰፊ እርሻ</option>
                            <option value="Agricultural Cooperative">Agricultural Cooperative / የግብርና ኅብረት ሥራ ማህበር</option>
                            <option value="Government / Bureau">Government Bureau / የመንግሥት መሥሪያ ቤት</option>
                            <option value="Private Investor">Private Investor / የግል ባለሀብት</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold uppercase text-slate-700 mb-2">Phone Number / ስልክ ቁጥር</label>
                        <input type="text" name="phone" required class="w-full border border-slate-300 px-4 py-3 rounded-sm text-sm focus:outline-none focus:border-red-700" placeholder="+251 ...">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase text-slate-700 mb-2">Email Address / ኢሜይል</label>
                        <input type="email" name="email" required class="w-full border border-slate-300 px-4 py-3 rounded-sm text-sm focus:outline-none focus:border-red-700">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase text-slate-700 mb-2">Inquiry Details / የጥያቄው ዝርዝር</label>
                    <textarea name="message" rows="4" required class="w-full border border-slate-300 px-4 py-3 rounded-sm text-sm focus:outline-none focus:border-red-700" placeholder="Specify machinery model, horsepower, or tender details..."></textarea>
                </div>

                <button type="submit" class="w-full bg-red-700 hover:bg-red-800 text-white font-bold py-4 rounded-sm transition text-sm tracking-wider uppercase shadow-md">
                    <span x-show="lang === 'en'">Submit Inquiry to JPA Management</span>
                    <span x-show="lang === 'am'" x-cloak>ጥያቄውን ይላኩ</span>
                </button>
            </form>
        </div>
    </div>
</section>
