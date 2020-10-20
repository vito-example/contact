<?php


use Illuminate\Http\Request;
use Vito\Contact\Http\Controllers\ContactController;

Route::get('contact',[ContactController::class,'index'])->name('contact');

Route::post('contact', [ContactController::class,'send']);