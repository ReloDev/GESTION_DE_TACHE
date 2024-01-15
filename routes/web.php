<?php

use App\Http\Controllers\LpController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\ProgrammeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Dashyout');
});


//Programme
Route::get('/Programme/create',[ProgrammeController::class,'create'])->name('Programme.create');
Route::get('Programme/index',[ProgrammeController::class,'index'])->name('Programme.index');
Route::post('Programme/store',[ProgrammeController::class,'store'])->name('Programme.store');
Route::get('Lieu/show/{id}',[ProgrammeController::class,'show'])->name('Programme.show');
Route::get('Programme/edit/{id}',[ProgrammeController::class,'edit'])->name('Programme.edit');
Route::get('Programme/delete/{id}',[ProgrammeController::class,'destroy'])->name('Programme.destroy');
Route::post('Programme/update/{id}',[ProgrammeController::class,'update'])->name('Programme.update');
Route::get('Programme/encours',[ProgrammeController::class,'encours'])->name('Programme.encours');
Route::get('Programme/parcouru',[ProgrammeController::class,'parcouru'])->name('Programme.parcouru');
Route::post('Programme/opv/{id}',[ProgrammeController::class,'opv'])->name('Programme.opv');
Route::post('Programme/opx/{id}',[ProgrammeController::class,'opx'])->name('Programme.opx');
Route::post('Programme/npv/{id}',[ProgrammeController::class,'npv'])->name('Programme.npv');
Route::post('Programme/npx/{id}',[ProgrammeController::class,'npx'])->name('Programme.npx');
Route::get('Programme/etat',[ProgrammeController::class,'etat'])->name('Programme.etat');

//Langage de programmation
Route::get('/Lp/create',[LpController::class,'create'])->name('Lp.create');
Route::get('Lp/index',[LpController::class,'index'])->name('Lp.index');
Route::post('Lp/store',[LpController::class,'store'])->name('Lp.store');
Route::get('Lieu/show/{id}',[LpController::class,'show'])->name('Lp.show');
Route::get('Lp/edit/{id}',[LpController::class,'edit'])->name('Lp.edit');
Route::get('Lp/delete/{id}',[LpController::class,'destroy'])->name('Lp.destroy');
Route::post('Lp/update/{id}',[LpController::class,'update'])->name('Lp.update');

//Option
Route::get('/Option/create',[OptionController::class,'create'])->name('Option.create');
Route::get('Option/index',[OptionController::class,'index'])->name('Option.index');
Route::post('Option/store',[OptionController::class,'store'])->name('Option.store');
Route::get('Lieu/show/{id}',[OptionController::class,'show'])->name('Option.show');
Route::get('Option/edit/{id}',[OptionController::class,'edit'])->name('Option.edit');
Route::get('Option/delete/{id}',[OptionController::class,'destroy'])->name('Option.destroy');
Route::post('Option/update/{id}',[OptionController::class,'update'])->name('Option.update');