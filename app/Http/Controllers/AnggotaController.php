<?php

namespace App\Http\Controllers;

use App\Anggota;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;

class AnggotaController extends Controller
{
    public  function updateAnggota(Request $request, $id)
    {
    	$anggota = DB::table('anggota')->where('id', $request->input('id'))->get();
    		$anggota->favorit = $request->input('favorit');
    		$anggota->save();
	    	$response["anggota"] = $anggota;
	    	$response["success"] = 1;
	    return response()->json($response);
    }
}
