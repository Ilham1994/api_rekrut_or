<?php

use Illuminate\Http\Request;

use App\Anggota;
use App\Http\Resources\Anggota as AnggotaResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/anggota', function(){
	// return Anggota::all();

	return AnggotaResource::collection(Anggota::all());
});

Route::get('/anggota/favorit', function(){
	return AnggotaResource::collection(Anggota::all())
			->where('favorit', true);
});

Route::get('/anggota/{id}', 'AnggotaController@updateAnggota');