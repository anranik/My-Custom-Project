<?php
/**
 * Guardian
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Guardian'], function () {
        Route::resource('guardians', 'GuardiansController');
        //For Datatable
        Route::post('guardians/get', 'GuardiansTableController')->name('guardians.get');
    });
    
});