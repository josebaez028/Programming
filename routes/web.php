<?php

Route::redirect('/', '/login');
Route::redirect('/home', '/admin');
Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Registros
    Route::delete('registros/destroy', 'RegistrosController@massDestroy')->name('registros.massDestroy');
    Route::post('registros/parse-csv-import', 'RegistrosController@parseCsvImport')->name('registros.parseCsvImport');
    Route::post('registros/process-csv-import', 'RegistrosController@processCsvImport')->name('registros.processCsvImport');
    Route::resource('registros', 'RegistrosController');

    // Contactos
    Route::delete('contactos/destroy', 'ContactosController@massDestroy')->name('contactos.massDestroy');
    Route::post('contactos/parse-csv-import', 'ContactosController@parseCsvImport')->name('contactos.parseCsvImport');
    Route::post('contactos/process-csv-import', 'ContactosController@processCsvImport')->name('contactos.processCsvImport');
    Route::resource('contactos', 'ContactosController');
});
