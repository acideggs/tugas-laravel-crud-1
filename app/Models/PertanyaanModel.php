<?php  

namespace App\Models;

use Illuminate\Support\Facades\DB;

class PertanyaanModel {

	public static function getAll(){

		$pertanyaans = DB::table('pertanyaan')->get();

		return $pertanyaans;

	}

	public static function save($data){

		$pertanyaan_baru = DB::table('pertanyaan')->insert($data);

		return $pertanyaan_baru;

	}

}