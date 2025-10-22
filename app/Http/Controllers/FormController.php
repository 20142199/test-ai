<?php

namespace App\Http\Controllers;

use App\Services\CursorService;
use Illuminate\Http\Request;

class FormController extends Controller
{
    protected CursorService $service;
    public function __construct()
    {
        $this->service = new CursorService();
    }
    /**
     * Display the form for creating a landing page
     */
    public function index()
    {
        return view('form');
    }

    /**
     * Process the form submission and generate a landing page
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'header' => 'nullable|string',
            'blockCount' => 'nullable|integer|min:1|max:20',
            'footer' => 'nullable|string',
            'blocks' => 'nullable|array',
            'blocks.*' => 'nullable|string'
        ]);

        // Process the form data using the service
        $result = $this->service->generateLanding($request->all());

        if ($result) {
            return redirect()->back()->with('success', 'Landing page generated successfully.');
        } else {
            return redirect()->back()->with('error', 'Error generating landing page.');
        }
    }
}
