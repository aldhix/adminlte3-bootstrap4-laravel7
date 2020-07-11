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
				'images'=>'required|image|dimensions:width=300,height=300',
			],[
        		'images.dimensions' => 'The image has invalid image dimensions.',
    		]);

		return 'Success';

	});

	Route::view('/upload','admin.upload')->name('admin.upload');

	Route::post('/upload', function(Illuminate\Http\Request $request) {

	   	$request->validate([
				'images.*'=>'required|image|dimensions:min_width=300,min_height=300',
			]);

	   	if( !empty($request->images) ) {

			foreach ($request->images as $i => $k) {
				echo $request->file('images.'.$i)->getClientOriginalName()."<br />";
			}
		} else {
			return redirect()
                ->back()
                ->withInput()
                ->withErrors(['images.*'=>"The image field is required."]);
		}

	});

	Route::view('/table','admin.table')->name('admin.table');
	
	Route::delete('/delete/{id}', function(){
		return 'Deleted';
	})->name('admin.delete');
	 
});