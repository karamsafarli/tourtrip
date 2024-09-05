<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;
use Redirect;

class EnquiryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'startDate' => 'required|date',
            'duration' => 'required|integer',
            'adults' => 'required|integer',
            'children' => 'nullable|integer',
            'pickupCity' => 'required|string|max:255',
            'dropCity' => 'required|string|max:255',
            'accommodationType' => 'array',
            'interestedIn' => 'required|string|max:255',
            'budget' => 'required|integer',
            'comments' => 'nullable|string',
            'fullName' => 'required|string|max:255',
            'email' => 'required|email',
            'whatsappNumber' => 'required|string|max:15',
            'city' => 'required|string|max:255',
        ]);

        Enquiry::create($validated);

        return Redirect::back();
    }
}

