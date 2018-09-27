<?php
/**
 * Teacher
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Teacher'], function () {
        Route::resource('teachers', 'TeachersController');
        //For Datatable
        Route::post('teachers/get', 'TeachersTableController')->name('teachers.get');
    });
    
});