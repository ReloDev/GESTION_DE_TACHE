<?php

namespace App\Http\Controllers;

use App\Models\Lp;
use Illuminate\Http\Request;

class LpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $lps=Lp::all();
       return view('Lp.index',[
        'lps'=>$lps
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Lp.create') ;
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
        $lp=new Lp();
        $lp->nom=$request->nom;
        $lp->save();
        $lps=Lp::all();
        return view('Lp.index',[
            'lps'=>$lps
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
        $lp=Lp::find($id);
        return view('Lp.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lp=Lp::find($id);
        return view('Lp.edit');
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
        $lp=Lp::where($id)->update($val);
        $lps=Lp::all();
        return view('Lp.index',[
            'lps'=>$lps
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
        $lp=Lp::find($id)->delete();
        $lps=Lp::all();
        return view('Lp.index',[
            'lps'=>$lps
        ]);
    }
}
