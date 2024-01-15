<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lp extends Model
{
    use HasFactory;
    protected  $fillable=[
        'nom'
    ];
    public function programmes(){
        return $this->hasMany(Programme::class);
    }
}
