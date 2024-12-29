<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::firstOrCreate([], [
            'site_title' => '',
            'contact_email' => '',
            'footer_text' => '',
            'phone_number' => '',
            'address' => '',
            'facebook_link' => '',
            'instagram_link' => '',
            'twitter_link' => '',
            'pinterest_link' => '',
            'youtube_link' => ''
        ]);

        return view('settings', compact('settings'));
    }

    public function update(Request $request)
    {
        // Fetch the first record of settings
        $settings = Setting::first();

        // Update the settings attributes
        $settings->site_title = $request->input('site_title');
        $settings->contact_email = $request->input('contact_email');
        $settings->footer_text = $request->input('footer_text');
        $settings->phone_number = $request->input('phone_number');
        $settings->address = $request->input('address');
        $settings->facebook_link = $request->input('facebook_link');
        $settings->instagram_link = $request->input('instagram_link');
        $settings->twitter_link = $request->input('twitter_link');
        $settings->pinterest_link = $request->input('pinterest_link');
        $settings->youtube_link = $request->input('youtube_link');

        // Handle file uploads for logos
        if ($request->hasFile('light_logo')) {
            $lightLogo = $request->file('light_logo');
            $settings->light_logo = $lightLogo->store('logos', 'public');
        }

        if ($request->hasFile('dark_logo')) {
            $darkLogo = $request->file('dark_logo');
            $settings->dark_logo = $darkLogo->store('logos', 'public');
        }

        // Save the updated settings
        $settings->save();

        return back()->with('success', 'Settings updated successfully!');
    }
}
