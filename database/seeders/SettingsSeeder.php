<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(['key' => 'site_title'], ['value' => 'My Website']);
        Setting::updateOrCreate(['key' => 'contact_email'], ['value' => 'contact@example.com']);
        Setting::updateOrCreate(['key' => 'timezone'], ['value' => 'UTC']);
        Setting::updateOrCreate(['key' => 'currency'], ['value' => 'USD']);
    }
}
