<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();

            // Hero section
            $table->string('hero_badge_en')->nullable();
            $table->string('hero_badge_am')->nullable();
            $table->string('hero_title_en')->nullable();
            $table->string('hero_title_am')->nullable();
            $table->text('hero_subtitle_en')->nullable();
            $table->text('hero_subtitle_am')->nullable();
            $table->string('hero_image')->nullable();

            // 3 Business Scope / Capability pillars
            $table->string('cap1_title_en')->nullable();
            $table->string('cap1_title_am')->nullable();
            $table->text('cap1_desc_en')->nullable();
            $table->text('cap1_desc_am')->nullable();

            $table->string('cap2_title_en')->nullable();
            $table->string('cap2_title_am')->nullable();
            $table->text('cap2_desc_en')->nullable();
            $table->text('cap2_desc_am')->nullable();

            $table->string('cap3_title_en')->nullable();
            $table->string('cap3_title_am')->nullable();
            $table->text('cap3_desc_en')->nullable();
            $table->text('cap3_desc_am')->nullable();

            // Contact & Footer
            $table->string('company_name_en')->nullable();
            $table->string('company_name_am')->nullable();
            $table->string('office_location_en')->nullable();
            $table->string('office_location_am')->nullable();
            $table->string('business_hours_en')->nullable();
            $table->string('business_hours_am')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_email')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
