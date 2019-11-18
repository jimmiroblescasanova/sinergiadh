<?php

Route::post('mail', 'NewsletterController@store')->name('mail');

Route::name('home.')->group(function () {
    Route::get('/', function () {
        return view('home.landing');
    })->name('landing');
    Route::get('galeria', 'PhotosController@index')->name('photos.index');
    Route::get('talleres', 'WorkshopsController@index')->name('workshops.index');
    Route::get('talleres/{id}', 'WorkshopsController@show')->name('workshops.show');
    Route::get('nosotros', 'InstructorsController@index')->name('us.index');
    Route::get('contacto', 'ContactMessageController@index')->name('contact.index');
    Route::post('contacto', 'ContactMessageController@store')->name('contact.store');
    Route::get('registro/{id}', 'RegistrationController@show')->name('registration.show');
    Route::post('registro', 'RegistrationController@store')->name('registration.store');
});

Route::prefix('admin')->group(function () {
    Route::resource('instructores', 'PanelInstructorsController')
        ->parameters(['instructores' => 'id'])
        ->names('panel.instructors')
        ->middleware('auth');
    Route::resource('fotos', 'PanelPhotosController')
        ->parameters(['fotos' => 'id'])
        ->names('panel.photos')
        ->middleware('auth');
    Route::resource('talleres', 'PanelWorkshopsController')
        ->parameters(['talleres' => 'id'])
        ->names('panel.workshops')
        ->middleware('auth');
    Route::resource('eventos', 'PanelEventsController')
        ->parameters(['eventos' => 'id'])
        ->names('panel.events')
        ->middleware('auth');
});

Route::view('admin', 'panel.index')->name('panel')->middleware('auth');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
