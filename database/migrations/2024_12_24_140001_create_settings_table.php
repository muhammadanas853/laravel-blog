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
        $table->string('site_title')->nullable();
        $table->string('contact_email')->nullable();
        $table->string('footer_text')->nullable();
        $table->string('phone_number')->nullable();
        $table->string('address')->nullable();
        $table->string('facebook_link')->nullable();
        $table->string('twitter_link')->nullable();
        $table->string('instagram_link')->nullable();
        $table->string('pinterest_link')->nullable();
        $table->string('youtube_link')->nullable();
        $table->string('light_logo')->nullable();
        $table->string('dark_logo')->nullable();
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
