<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class AdminEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = Event::all();
        return view('admin.event.index')->with('c', $a);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
           'title' => 'required',
           'desc_pembuka' => 'required',
           'penyelenggara' => 'required',
           'time' => 'required',
           'date' => 'required',
           'peserta' => 'required',
           'point' => 'required',
           'desc' => 'required',
       ]);

       $a = new Event;
       $a->title = $request->title;
       $a->desc_pembuka = $request->desc_pembuka;
       $a->penyelenggara = $request->penyelenggara;
       $a->time = $request->time;
       $a->date = $request->date;
       $a->peserta = $request->peserta;
       $a->point = $request->point;
       $a->desc = $request->desc;
       $a->save();
       return redirect('aevent');

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
        $cu = Event::find($id);
        return view('admin.event.update')->with('up', $cu);
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
