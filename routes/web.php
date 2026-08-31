<?php

use App\Http\Controllers\ChatbotController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');});

Route::view('/news', 'newsmain')->name('newsmain');

Route::get('/regional-director', function () {
    return view('welcome');
})->name('rd-message');


# About us Section Routes

Route::view('/regional-history', 'about.history')
    ->name('regional-history');

Route::view('/mission-vision', 'about.mission-vision')
    ->name('mission-vision');

 Route::view('/organizational-structure', 'about.organizational-structure')
    ->name('organizational-structure');   


 # Transparency Section Routes

Route::view('/transparency/seal','transparency.transparency-seal'
)->name('transparency.seal');

Route::view('/citizen-charter','transparency.citizen-charter'
)->name('transparency.citizen-charter');

Route::view('/awards-committe','transparency.awards-committe'
)->name('transparency.awards-committe');








# Programs & Services Section Routes

Route::view('/scholarships', 'scholarshipmain')->name('scholarshipmain');

Route::view('/training/course', 'schoolarship.course')
    ->name('training.course');
Route::view('/trainingcenter', 'schoolarship.trainingcenter')
    ->name('schoolarship.trainingcenter');
Route::view('/mrtop', 'schoolarship.mrtop')
        ->name('schoolarship.mrtop');
Route::view('/assessment', 'schoolarship.assessment-cert')
        ->name('schoolarship.assessment-cert');
 Route::view('/cacn', 'schoolarship.cacn')
        ->name('schoolarship.cacn');

Route::view('/tesda-online', 'schoolarship.tesda-online')
        ->name('schoolarship.tesda-online');


# Contact Section Routes

Route::view('/contact/regional-headquarters','contact.regional-headquarters'
)->name('contact.regional-headquarters');

Route::view('/contact/negros-occidental', 'contact.negros-occidental'
)->name('contact.negros-occidental');

Route::view('/contact/negros-oriental','contact.negros-oriental'
)->name('contact.negros-oriental');

Route::view('/contact/siquijor', 'contact.siquijor'
)->name('contact.siquijor');

// API/Controller Routes

Route::post('/chatbot', [ChatbotController::class, 'handle'])->name('chatbot.handle');