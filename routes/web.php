<?php

//Wizard Participant Submit
Route::get('/', 'ParticipantController@create');
Route::post('/participants', 'ParticipantController@store')->name('participants.store');
Route::get('/home', 'HomeController@index')->name('home');

//Route auth bawaan artisan make auth
Auth::routes();

//Admin Dashboard
Route::middleware(['auth'])->prefix('admin')->group(function (){
    Route::get('/', 'DashboardController@show')->name('dashboard');// Matches The "/admin" URL
    Route::get('participants', 'ParticipantController@index')->name('participants.index');
    Route::get('participants/div/{division}', 'ParticipantController@indexDivision')->name('participants.division');
    Route::get('participants/{id}', 'ParticipantController@show')->name('participants.show');
});

// bagian dashboard khusus super admin
Route::middleware(['superadmin'])->prefix('admin')->group(function (){
    Route::resource('users', 'UserController');
});

// Route::resource('participants', 'ParticipantController');

 // Route temporary, buat coba2 tampilan
Route::get('/temp', 'HomeController@temp')->name('temp');
