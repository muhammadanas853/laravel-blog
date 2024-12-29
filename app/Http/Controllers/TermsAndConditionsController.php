<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TermsAndCondition;

class TermsAndConditionsController extends Controller
{
    public function index()
    {
        // Fetch the first Terms and Conditions record or create a new one if not found
        $terms = TermsAndCondition::firstOrCreate([], ['description' => '']);

        // Pass the terms to the view
        return view('terms-and-conditions', compact('terms'));
    }

    public function update(Request $request)
    {
        // Fetch the first record of terms and conditions
        $terms = TermsAndCondition::first();

        // Update the description field
        $terms->description = $request->input('description');

        // Save the changes
        $terms->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Terms and Conditions updated successfully!');
    }
}
