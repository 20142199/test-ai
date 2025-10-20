<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display the form for creating a landing page
     */
    public function index()
    {
        return view('form');
    }
    
    /**
     * Process the form submission and generate landing page
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'header' => 'nullable|string|max:1000',
            'blockCount' => 'required|integer|min:1|max:20',
            'footer' => 'nullable|string|max:1000',
            'blocks' => 'nullable|array',
            'blocks.*' => 'nullable|string|max:2000'
        ]);
        
        // Process the form data here
        $data = [
            'logo' => $request->file('logo'),
            'header' => $request->input('header'),
            'blockCount' => $request->input('blockCount'),
            'blocks' => $request->input('blocks', []),
            'footer' => $request->input('footer')
        ];
        
        // Handle logo upload if provided
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time() . '_' . $logo->getClientOriginalName();
            $logo->move(public_path('uploads'), $logoName);
            $data['logo_path'] = 'uploads/' . $logoName;
        }
        
        // Here you can process the data to generate a landing page
        // For now, we'll just return a success message
        return redirect()->back()->with('success', 'Form submitted successfully! Landing page will be generated.');
    }
}
