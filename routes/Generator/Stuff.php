<?php
/**
 * Stuff
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Stuff'], function () {
        Route::resource('stuffs', 'StuffsController');
        //For Datatable
        Route::post('stuffs/get', 'StuffsTableController')->name('stuffs.get');
    });
    
});