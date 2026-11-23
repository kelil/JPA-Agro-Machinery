<?php

namespace Database\Seeders;

use App\Models\Machinery;
use Illuminate\Database\Seeder;

class MachinerySeeder extends Seeder
{
   public function run(): void
    {
        $items = [
            [
                'tag_en' => 'Tractors & Tillage',
                'tag_am' => 'ትራክተሮች እና ማረሻ',
                'title_en' => 'High-Horsepower 4WD Farm Tractor',
                'title_am' => 'ባለአራት ዊል ድራይቭ ከፍተኛ ጉልበት ትራክተር',
                'desc_en' => 'Heavy-duty agricultural tractor suited for deep plowing, harrowing, and commercial land preparation.',
                'desc_am' => 'ለጥልቅ እርሻ፣ ለመሬት ዝግጅት እና ለንግድ እርሻ ልማት ተስማሚ ጠንካራ ትራክተር።',
                'image' => url('images/machinery/tractor-4wd.jpg'),
            ],
            [
                'tag_en' => 'Harvesting Equipment',
                'tag_am' => 'የመከር መሰብሰቢያ',
                'title_en' => 'Grain Combine Harvester',
                'title_am' => 'ዘመናዊ የእህል መከር መሰብሰቢያ ማሽን',
                'desc_en' => 'Efficient harvesting machinery designed to reduce grain loss across wheat, barley, and cereal fields.',
                'desc_am' => 'ለስንዴ፣ ለገብስ እና ለተለያዩ ሰብሎች የመከር ብክነትን የሚቀንስ ቀልጣፋ ማሽን።',
                'image' => url('images/machinery/combine-harvester.jpg'),
            ],
            [
                'tag_en' => 'Irrigation & Parts',
                'tag_am' => 'መስኖ እና መለዋወጫ',
                'title_en' => 'Agricultural Water Pump & Irrigation Set',
                'title_am' => 'የግብርና ውሃ ፓምፕ እና የመስኖ መሳሪያ',
                'desc_en' => 'Reliable water-pumping and field irrigation equipment for seasonal and year-round crop production.',
                'desc_am' => 'ለወቅታዊ እና ለዓመቱ ሙሉ የሰብል ምርት የሚውል አስተማማኝ የውሃ ፓምፕ እና የመስኖ መሳሪያ።',
                'image' => url('images/machinery/irrigation-pump.jpg'),
            ],
        ];

        foreach ($items as $item) {
            Machinery::updateOrCreate(
                ['title_en' => $item['title_en']],
                $item
            );
        }
    }
}
