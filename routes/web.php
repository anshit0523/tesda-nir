<?php

use App\Http\Controllers\ChatbotController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});

Route::view('/mission-vision', 'about.mission-vision')
    ->name('mission-vision');

    Route::view(
    '/contact/regional-headquarters',
    'contact.regional-headquarters'
)->name('contact.regional-headquarters');

Route::view(
    '/contact/negros-occidental',
    'contact.negros-occidental'
)->name('contact.negros-occidental');

Route::view(
    '/contact/negros-oriental',
    'contact.negros-oriental'
)->name('contact.negros-oriental');

Route::view(
    '/contact/siquijor',
    'contact.siquijor'
)->name('contact.siquijor');Route::view(
    '/contact/regional-headquarters',
    'contact.regional-headquarters'
)->name('contact.regional-headquarters');

Route::view(
    '/contact/negros-occidental',
    'contact.negros-occidental'
)->name('contact.negros-occidental');

Route::view(
    '/contact/negros-oriental',
    'contact.negros-oriental'
)->name('contact.negros-oriental');

Route::view(
    '/contact/siquijor',
    'contact.siquijor'
)->name('contact.siquijor');

Route::post('/chatbot', [ChatbotController::class, 'handle'])->name('chatbot.handle');

Route::view('/transparency/seal','transparency.transparency-seal'
)->name('transparency.seal');