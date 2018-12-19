<?php

namespace App\Http\Controllers;

use App\Anggota;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;
use Carbon\Carbon;

class AnggotaController extends Controller
{

	public function storeAnggota(Request $request){

		  define('UPLOAD_DIR', public_path().'/img/');
	      $img = $request->photo;
	      $img = str_replace('data:image/jpeg;base64,', '', $img);
	      $img = str_replace(' ', '+', $img);
	      $data = base64_decode($img);
	      $file = uniqid() . '.jpg';
	      $success = file_put_contents(UPLOAD_DIR . $file, $data);

	      Anggota::create([	        
	        'nama' => $request->nama,
	        'tmpt_lahir' => $request->tmpt_lahir,
	        'tgl_lahir' => $request->tgl_lahir,
	        'alamat' => $request->alamat,
	        'nim' => $request->nim,
	        'motivasi' => $request->motivasi,
	        'foto' => $file,	
	        'favorit' => false,        
	        'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
	        'updated_at' => Carbon::now()->setTimezone('Asia/Jakarta')
	      ]);

	      return response()->json([
	        'status' => 'success',
	      ]);	
	}

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
		 HEAD
      	
      }else{
        $data->favorit = 1;
		1a9514f085b9bb33cce6b1c4509b08d21f514572
        $data->save();
        return response()->json([
          'status' => 'success',
          'data' => $data->favorit
        ]);
      }
    }
}
