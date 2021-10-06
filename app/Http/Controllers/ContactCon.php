<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;
use App\Http\Requests\contactReq;
use Illuminate\Support\Facades\Validator;
class ContactCon extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contacts = contact::all();
        return view("contacts.contacts",compact('contacts'));
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
    public function store(contactReq $request)
    {
        //def vars
        $input = $request ->all();
        $rules = $request->rules();
        $messages = $request->messages();
        $validator = Validator::make($input, $rules, $messages);

       // insert
 contact::create([
             'name' => $request->name,
             'phone' => $request->phone,
             'email' => $request->email,
             'subject' => $request->subject,
             'content' => $request->content,
         ]);
        session()->flash('Add', 'تم استلام رسالتك بنجاح شكرا لتواصلك معنا ');
        return redirect('contact');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
