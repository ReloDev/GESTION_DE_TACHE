<?php

namespace App\Http\Controllers;

use App\Models\Lp;
use App\Models\Option;
use App\Models\Programme;
use Illuminate\Http\Request;
use Symfony\Component\Console\Helper\ProgressBar;

class ProgrammeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programmes=Programme::all();
        return view('Programme.index',[
            'programmes'=>$programmes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $options=Option::all();
        $lps=Lp::all();
        return view('Programme.create',[
            'options'=>$options,
            'lps'=>$lps
        ]);
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
            'nom'=>'required',
            'id_option'=>'required',
            'id_lp'=>'required',
            'pv'=> 'required',
            'px'=>'required',
            'note'=>'required'
        ]);
        $programme=new Programme();
        $programme->nom=$request->nom;
        $programme->id_option=$request->id_option;
        $programme->id_lp=$request->id_lp;
        $programme->pv=$request->pv;
        $programme->px=$request->px;
        $programme->note=$request->note;
        $programme->save();
        $programmes=Programme::all();
        return view('Programme.index',[
            'programmes'=>$programmes
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
        $programme=Programme::find($id);
        return view('Programme.show',[
            'programme'=>$programme
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
        $options=Option::all();
        $lps=Lp::all();
        $programme=Programme::find($id);
        return view('Programme.edit',[
            'programme'=>$programme,
            'options'=>$options,
            'lps'=>$lps
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
        $val= $request->validate([
            'nom'=>'required',
            'id_option'=>'required',
            'id_lp'=>'required',
            'pv'=> 'required',
            'px'=>'required'
        ]);
        $programme=Programme::whereId($id)->update($val);
        $programmes=Programme::all();
        return view('Programme.index',[
            'programmes'=>$programmes
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
        $programme=Programme::find($id)->delete();
        $programmes=Programme::all();
        return view('Programme.index',[
            'programmes'=>$programmes
        ]);
    }

    public function encours(){
        $programmes=Programme::all()->where('pv',1) ;
        return view('Programme.encours',[
            'programmes'=>$programmes
        ]);
    }

    public function parcouru(){
        $programmes=Programme::all()->where('px',1) ;
        return view('Programme.parcouru',[
            'programmes'=>$programmes
        ]);
    }
    
    public function etat(){
        $programmes=Programme::all();
        return view('Programme.etat',[
            'programmes'=>$programmes
        ]);
    }

    public function opv(Request $request, $id){
        Programme::whereId($id)->update(['pv'=>1]);
        $programmes=Programme::all();
        return view('Programme.index',[
            'programmes'=>$programmes
        ]);
    }
    
    
    public function opx(Request $request, $id){
        Programme::whereId($id)->update(['px'=>1]);
        $programmes=Programme::all();
        return view('Programme.index',[
            'programmes'=>$programmes
        ]);
    }

    public function npv(Request $request, $id){
        Programme::whereId($id)->update(['pv'=>0]);
        $programmes=Programme::all();
        return view('Programme.index',[
            'programmes'=>$programmes
        ]);
    }
    
    
    public function npx(Request $request, $id){
        Programme::whereId($id)->update(['px'=>0]);
        $programmes=Programme::all();
        return view('Programme.index',[
            'programmes'=>$programmes
        ]);
    }
}
