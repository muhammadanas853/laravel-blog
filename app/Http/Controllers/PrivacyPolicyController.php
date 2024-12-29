<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        // Fetch the first policy record or create a blank one if not found
        $policy = PrivacyPolicy::firstOrCreate([], ['description' => '']);

        // Pass $policy to the view
        return view('privacy-policy', compact('policy'));
    }

    public function update(Request $request)
    {
        // Fetch the first record
        $policy = PrivacyPolicy::first();

        // Update the description field
        $policy->description = $request->input('description');

        // Save the changes
        $policy->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Privacy Policy updated successfully!');
    }
}
