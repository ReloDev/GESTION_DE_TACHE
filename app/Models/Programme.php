<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'id_option',
        'id_lp',
        'pv',
        'px',
        'note'
    ];
    public function lps(){
        return $this->belongsTo(Lp::class,'id_lp','id');
    }
    public function options(){
        return $this->belongsTo(Option::class,'id_option','id');
    }
   
}
