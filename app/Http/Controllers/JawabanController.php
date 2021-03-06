<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    
	public function index($id){

   		$jawabans = JawabanModel::getAll($id);

   		$message = "";

   		if (!isset($jawabans[0])) {
   			
   			$message = "Tidak ada Jawaban";

   		}

   		return view('jawaban', ['data' => $jawabans, 'message' => $message, 'id' => $id]);

   	}

   	public function store(Request $request, $id){

         $data = [

            'isi'             => $request->isi,
            'tgl_dibuat'      => now(),
            'jawaban_terpilih'=> false,
            'likes'           => 0,
            'dislikes'        => 0,
            'pertanyaan_id'   => $id

         ];

         $pertanyaans = JawabanModel::save($data);
            
         return redirect('/pertanyaan/show/' . $id);


      }

}
