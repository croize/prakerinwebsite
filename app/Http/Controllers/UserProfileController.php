<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserProfileController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
      if (Auth::check()) {
        if (Auth::user()->id != $id) {
          return redirect('home');
        }else {
          $ca = User::find($id);
          return view('user.config.profile')->with('as',$ca);
        }
      }else{
        return redirect('');
      }

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
      $this->validate($request, [
      'name' => 'required|string',
      'kelamin' => 'required',
      'minat' => 'required',
      'image' => 'required',
      'alamat' => 'required',
      'nomor_hp' => 'required|numeric',
      'lembaga' => 'required',
      ]);

      $yu = User::find($id);
      $yu->name = $request->name;
      $yu->kelamin = $request->kelamin;
      $yu->minat = $request->minat;
      $yu->image = $request->image;
      $yu->alamat = $request->alamat;
      $yu->nomor_hp = $request->nomor_hp;
      $yu->lembaga = $request->lembaga;
      $yu->save();
      return redirect('home');

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
