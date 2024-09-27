<?php

use App\Http\Controllers\AkademikController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function(){
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});
route::get('/home',function(){
    return redirect('/Akademik');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/Akademik',[AkademikController ::class,'index']);
    Route::get('/Akademik/Akademik',[AkademikController ::class,'Akademik'])->middleware('UserAkses:Akademik');
    Route::get('/Akademik/Dekan',[AkademikController ::class,'Dekan'])->middleware('UserAkses:Dekan');
    Route::get('/Akademik/Pembimbing Akademik',[AkademikController ::class,'KetuaProgramStudi'])->middleware('UserAkses:Ketua ProgramvStudi');
    Route::get('/Akademik/Ketua Program Studi',[AkademikController ::class,'PembimbingAkademik'])->middleware('UserAkses:Pembimbing Akademik');    
    Route::get('/Akademik/Mahasiswa',[AkademikController ::class,'Mahasiswa'])->middleware('UserAkses:Mahasiswa');  
    Route::get('/logout/',[SesiController::class,'logout']);
});
