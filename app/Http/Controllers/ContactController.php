<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        return view('contacts.index', compact('contact'));
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $this->authorize("update",$contact);
        $request->validate([
            'asress' => ['required' => 'min:1', 'max:1000' ],
            'rue' => ['required' => 'min:1', 'max:255'] ,
            'emailadress' => ['required' => 'min:1', 'max:255'],
            'contactadress' => ['required' => 'min:1', 'max:255'],
            'number1' => ['required' => 'min:1', 'max:255'],
            'number2' => ['required' => 'min:1', 'max:255']
        ]);

        $contact->adress = $request->adress;
        $contact->rue = $request->rue;
        $contact->emailadress = $request->emailadress;
        $contact->contactadress = $request->contactadress;
        $contact->number1 = $request->number1;
        $contact->number2 = $request->number2;

        $contact->save();
        return redirect()->route('contacts.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $this->authorize("delete",$contact);
        $contact->delete();
        return redirect('contacts.index');
    }
}
