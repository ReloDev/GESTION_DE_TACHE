<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $options=Option::all();
        return view('Option.index',[
            'options'=>$options
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Option.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required'
        ]);
        $option=new Option();
        $option->nom=$request->nom;
        $option->save();
        $options=Option::all();
        return view('Option.index',[
            'options'=>$options
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $option=Option::find($id);
        return view('Option.show',[
            'option'=>$option
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $option=Option::find($id);
        return view('Option.edit',[
            'option'=>$option
        ]);
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
        $val=$request->validate([
            'nom'=>'required'
        ]);
        $option=option::where($id)->update($val);
        $options=option::all();
        return view('Option.index',[
            'options'=>$options
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $option=option::find($id)->delete();
        $options=option::all();
        return view('Option.index',[
            'options'=>$options
        ]);
    }
}
