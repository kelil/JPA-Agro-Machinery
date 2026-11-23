<x-layout>
    <x-hero />

    <!-- Enterprise Value Strip -->
    <section class="bg-red-700 text-white py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-2xl md:text-3xl font-extrabold">100% OEM</div>
                <div class="text-xs uppercase tracking-wider text-red-100 mt-1">Certified Global Manufacturers</div>
            </div>
            <div>
                <div class="text-2xl md:text-3xl font-extrabold">LC & Trade</div>
                <div class="text-xs uppercase tracking-wider text-red-100 mt-1">International Banking Compliance</div>
            </div>
            <div>
                <div class="text-2xl md:text-3xl font-extrabold">Nationwide</div>
                <div class="text-xs uppercase tracking-wider text-red-100 mt-1">Parts & Field Maintenance</div>
            </div>
            <div>
                <div class="text-2xl md:text-3xl font-extrabold">JPA Group</div>
                <div class="text-xs uppercase tracking-wider text-red-100 mt-1">Scalable Industrial Vision</div>
            </div>
        </div>
    </section>

    <!-- Pass database items to the machinery grid component -->
    <x-machinery-grid :items="$machinery" />

    <x-governance />
</x-layout>
