<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    
    Route::get('/', function () {
	    return view('admin.dashboard');
	})->name('admin.dashboard');

	Route::view('/about','admin.about')->name('admin.about');

	Route::view('/form','admin.form')->name('admin.form');

	Route::post('/form',function(Illuminate\Http\Request $request){
		$request->validate([
				'nama'=>'required',
				'email'=>'required',
				'password'=>'required',
				'alamat'=>'required',
				'jenis_kelamin'=>'required',
			]);
		return 'Saved';
	});

	Route::view('/table','admin.table')->name('admin.table');
	
	Route::delete('/delete/{id}', function(){
		return 'Deleted';
	})->name('admin.delete');
	 
});