<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

Route::get('/', function () {
    return view('tes');
});

Route::get('/generatepdf', function(){

    $pdf = Pdf::loadView('generate.pdf', ['data'=>1]);
    return $pdf->stream('okok.pdf');
})->name('generate.pdf');