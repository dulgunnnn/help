<?php

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

Route::get('/', 'HomeController@index');
Route::get('/content/{id}/{contenID?}', 'HomeController@content');
Route::get('/c/{id}', 'HomeController@category');
Route::get('/cat/{id}', 'HomeController@scategory');
Route::get('/pdf/{id}', 'HomeController@pdf');
Route::get('/pdfs/{id}', 'HomeController@pdfs');
Route::get('/pdfmsfont/{id}', 'HomeController@pdfmsfont');

Route::get('/{id1}/book/{id2}/{menuID}', function( $id1, $id2, $menuID ){
    return redirect('/content/'.$menuID);
});

Route::get('/announce/{id}', function($id){

	$main = \App\Main::where('type', 'main')
		->where('mime_type', $id)
		->where('status', 1)
		->orderBy('id', 'desc')
		->first();

	//dd($main);
	if( $main ){
		return view('announce',  ['main' => $main ] );
	}else{

		$data = new stdClass;

		$data->title = 'Хоосон мэдээлэл';
		$data->body = '<div class="alert alert-info">Мэдээлэл байхгүй байна</div>';
		return view('announce',  ['main' => $data ] );
	}

});


Route::get('/search', 'HomeController@search');
