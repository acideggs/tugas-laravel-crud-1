<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
   	public function index(){

   		$pertanyaans = PertanyaanModel::getAll();

   		return view('pertanyaan', ['data' => $pertanyaans]);

   	}

   	public function create(){

   		return view('buat_pertanyaan');

   	}

   	public function store(Request $request){

   		$data = [

   			'judul'			=>	$request->judul,
   			'isi'			   =>	$request->isi,
   			'tgl_dibuat'	=>	now(),
   			'likes'			=>	0,
   			'dislikes'		=>	0

   		];

   		if ($pertanyaans = PertanyaanModel::save($data)) {
   			
   			return redirect('/pertanyaan');

   		} else {

   			return redirect('/pertanyaan/create');

   		}

   	}

      public function show($id){

         $pertanyaans = PertanyaanModel::findByIdWithAnswer($id);

         $message = "";

         if (!isset($pertanyaans[0])) {

            $pertanyaans = PertanyaanModel::findById($id);
            
            $message = "Tidak ada Jawaban";

         }

         return view('pertanyaan_detail', ['data' => $pertanyaans, 'message' => $message, 'id' => $id]);

      }

      public function edit($id){

         $pertanyaan = PertanyaanModel::findById($id);

         return view('edit_pertanyaan', ['data' => $pertanyaan]);

      }

      public function update($id, Request $request){

         $data = 
                  [
                     'judul'  => $request->judul,
                     'isi'    => $request->isi

                  ];

         $pertanyaan = PertanyaanModel::update($id, $data);

         return redirect('/pertanyaan/show/' . $id);

      }

      public function delete($id){

         $pertanyaan = PertanyaanModel::delete($id);

         return redirect('/pertanyaan');

      }

}
