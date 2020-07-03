<?php  

namespace App\Models;

use Illuminate\Support\Facades\DB;

class JawabanModel {

	public static function getAll($id){

		$jawabans = DB::table('jawaban')->where('pertanyaan_id', '=', $id)->get();

		return $jawabans;

	}

	public static function save($data){

		$jawaban_baru = DB::table('jawaban')->insert($data);

		return $jawaban_baru;

	}

}