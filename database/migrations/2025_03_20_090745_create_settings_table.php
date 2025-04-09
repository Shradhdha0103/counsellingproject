<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('sub_title')->nullable();
            $table->text('readmore_content')->nullable();
            $table->text('banner_img')->nullable();
            $table->text('banner_video_link')->nullable();
            $table->text('banner_content1')->nullable();
            $table->text('banner_content2')->nullable();
            $table->text('banner_content3')->nullable();
            $table->string('work_title')->nullable();
            $table->string('getin_touch_title')->nullable();
            $table->string('first_session_title')->nullable();
            $table->string('beginyour_path_title')->nullable();
            $table->text('getin_touch_content')->nullable();
            $table->text('first_session_content')->nullable();
            $table->text('beginyour_path_content')->nullable();
            $table->string('therapy_title')->nullable();
            $table->string('therapy_heading')->nullable();
            $table->text('therapy_content')->nullable();
            $table->string('contact_title')->nullable();
            $table->text('contact_banner_img')->nullable();
            $table->text('blog_banner_image')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('footer_content')->nullable();
            $table->text('logo')->nullable();
            $table->text('footer_logo')->nullable();
            $table->text('contact_background_img')->nullable();
            $table->text('insta_link')->nullable();
            $table->text('linkedin_link')->nullable();
            $table->text('website_link')->nullable();
            $table->text('contact_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};