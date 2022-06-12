<?php
// This route is for TAP

Route::group(['prefix' => 'tap','namespace'=>'App\Modules\TAP\Controllers','middleware'=>['web','roles'],'roles'=>['TAP']], function () {

    Route::get('/dashboard','TestController@index')->name('panel');
	Route::get('/transaction','TestController@transaction')->name('transaction');

});
