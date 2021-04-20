<?php

namespace App\Http\Controllers;

use App\Events\ContactFormSubmittedByTheVisitorEvent;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'       => 'required|min:3|max:40',
            'email'      => 'required|email|max:40',
            'phone'      => 'max:15',
            'message'    => 'max:1024',
            'newsletter' => 'required|boolean'
        ]);

        $case_number = rand ( 10000000 , 19999999 );
        // Store in Database
        $contactUs = ContactUs::create([
            'name'       => $request->name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'message'    => $request->message,
            'newsletter' => $request->newsletter,
            'case_number'=> $case_number,
            'ip'         => $request->ip()
        ]);

        event(new ContactFormSubmittedByTheVisitorEvent($contactUs));
        //json response
        return response()->json(['message' => 'Thank you for your enquiry. One of our friendly account managers will be in touch with you shortly.'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactUs $contactUs)
    {
        //
    }
}
