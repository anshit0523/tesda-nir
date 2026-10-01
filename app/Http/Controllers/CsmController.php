<?php

namespace App\Http\Controllers;

use App\Jobs\SaveCsmResponse;
use Illuminate\Http\Request;

class CsmController extends Controller
{
    public function create()
    {
        return view('component.cms');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_type' => [
                'required',
                'in:Citizen,Business,Government (Employee or another agency)',
            ],

            'date' => [
                'required',
                'date',
            ],

            'name' => [
                'nullable',
                'string',
                'max:255',
            ],

            'sex' => [
                'required',
                'in:Male,Female',
            ],

            'age' => [
                'nullable',
                'integer',
                'min:1',
                'max:120',
            ],

            'region' => [
                'required',
                'string',
                'max:255',
            ],

            'service_availed' => [
                'required',
                'in:Assessment and Certification,Program Registration,Training,Scholarship,Administrative,Others',
            ],

            'cc1' => [
                'required',
                'integer',
                'in:1,2,3,4',
            ],

            'cc2' => [
                'nullable',
                'integer',
                'in:1,2,3,4,5',
            ],

            'cc3' => [
                'nullable',
                'integer',
                'in:1,2,3,4',
            ],

            'sqd' => [
                'required',
                'array',
                'size:9',
            ],

            'sqd.*' => [
                'required',
                'in:Strongly Agree,Agree,Neither Agree nor Disagree,Disagree,Strongly Disagree,N/A',
            ],

            'suggestions' => [
                'nullable',
                'string',
                'max:5000',
            ],

            'email' => [
                'nullable',
                'email',
                'max:255',
            ],

            'employee_name' => [
                'nullable',
                'string',
                'max:255',
            ],
        ]);

        SaveCsmResponse::dispatch($validated);

        return redirect()
            ->back()
            ->with(
                'success',
                'Thank you! Your Client Satisfaction Measurement has been submitted successfully.'
            );
    }
}