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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('auth_id')->index()->nullable();
            $table->string('slug')->unique();
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            // $table->unsignedInteger('category_id')->nullable()->default('');
            $table->text('desc')->nullable();
            $table->string('feature_img')->nullable();
            $table->text('SEO_title')->nullable();
            $table->text('meta_desc')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->text('blog_faq')->nullable();
            $table->unsignedInteger('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};