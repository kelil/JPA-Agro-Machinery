<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $guarded = [];

    public static function current(): self
    {
        return static::query()->firstOrCreate([], [
            'hero_badge_en' => 'Agricultural Mechanization & Import',
            'hero_badge_am' => 'አስተማማኝ የግብርና ሜካናይዜሽን',
            'hero_title_en' => 'Dependable Agricultural Machinery Sourced for Commercial & Farm Scale',
            'hero_title_am' => 'ዘመናዊ የግብርና ማሽነሪዎችን በጥራት እና በፍጥነት እናቀርባለን',
            'hero_subtitle_en' => 'JPA Agro-Machinery Import PLC supplies field-ready machinery, equipment, and responsive commercial support for farms, cooperatives, and enterprises.',
            'hero_subtitle_am' => 'ጄፒኤ አግሮ-ማሽነሪ አስመጪ ኃ/የተ/የግ/ማ ለእርሻ ልማት፣ ለማህበራት እና ለድርጅቶች ተስማሚ የሆኑ ማሽኖችን እና የድጋፍ አገልግሎት ያቀርባል።',

            'cap1_title_en' => 'Machinery Sourcing',
            'cap1_title_am' => 'የማሽነሪ አቅርቦት',
            'cap1_desc_en' => 'Curated agricultural equipment aligned with practical field and commercial operations.',
            'cap1_desc_am' => 'ለተለያዩ የእርሻ ስራዎች የሚውሉ ማሽኖችን በተመጣጣኝ እና በግልጽ ዝርዝር እናቀርባለን።',

            'cap2_title_en' => 'Institutional & Farm Inquiries',
            'cap2_title_am' => 'ድርጅታዊ እና የግል ጥያቄዎች',
            'cap2_desc_en' => 'Direct quotation and specification requests routed straight to our team.',
            'cap2_desc_am' => 'የግል እርሻዎች፣ ማህበራት እና ድርጅቶች በቀጥታ የዋጋ እና የመረጃ ጥያቄ ማቅረብ ይችላሉ።',

            'cap3_title_en' => 'Dual-Language Clarity',
            'cap3_title_am' => 'በአማርኛ እና በእንግሊዝኛ',
            'cap3_desc_en' => 'Switch seamlessly between English and Amharic across categories and listings.',
            'cap3_desc_am' => 'ሁሉንም ማሽኖች በአማርኛ ወይም በእንግሊዝኛ በቀላሉ ይፈልጉ እና ያወዳድሩ።',

            'company_name_en' => 'JPA Agro-Machinery Import PLC',
            'company_name_am' => 'ጄፒኤ አግሮ-ማሽነሪ አስመጪ ኃ/የተ/የግ/ማ',
            'office_location_en' => 'Addis Ababa, Ethiopia',
            'office_location_am' => 'አዲስ አበባ፣ ኢትዮጵያ',
            'business_hours_en' => 'Mon – Sat: 8:00 AM – 5:30 PM (EAT)',
            'business_hours_am' => 'ሰኞ - ቅዳሜ፡ 2:00 - 11:30',
        ]);
    }
}
