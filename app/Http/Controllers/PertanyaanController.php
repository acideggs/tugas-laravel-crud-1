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
   			'isi'			=>	$request->isi,
   			'tgl_dibuat'	=>	date('Y-m-d H:i:s'),
   			'likes'			=>	0,
   			'dislikes'		=>	0

   		];

   		if ($pertanyaans = PertanyaanModel::save($data)) {
   			
   			return redirect('/pertanyaan');

   		} else {

   			return redirect('/pertanyaan/create');

   		}

   	}

}
