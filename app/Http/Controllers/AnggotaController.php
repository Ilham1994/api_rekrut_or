<?php

namespace App\Http\Controllers;

use App\Anggota;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;

class AnggotaController extends Controller
{
    public  function updateAnggota(Request $request)
    {
    	$data = Anggota::where('id', $request->id)->first();
    	
  		if($data->favorit == 1){
        $data->favorit = 0; 
        $data->save();

        return response()->json([
          'status' =>  'success',
          'data' => $data->favorit
        ]);

      }else{
        $data->favorit = 1;
        $data->save();

        return response()->json([
          'status' => 'success',
          'data' => $data->favorit
        ]);

      }
    }
}
