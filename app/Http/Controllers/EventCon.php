<?php

namespace App\Http\Controllers;
use App\Http\Requests\eventReq;
use App\event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class EventCon extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $events = event::all();
        return view("events.events",compact('events'));
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
    public function store(eventReq $request)
    {

    //def vars
    $input = $request ->all();
    $rules = $request->rules();
    $messages = $request->messages();
    $validator = Validator::make($input, $rules, $messages);
//insert
        event::create([
            'name' => $request->name,
            'date' => $request->date,
            'event_duration' => $request->event_duration,
            'decs' => $request->decs,
            'image' => $request->image,
            'price' => $request->price,

        ]);
        session()->flash('Add', 'تم اضافة الحدث بنجاح ');
        return redirect('/events');
    }

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
