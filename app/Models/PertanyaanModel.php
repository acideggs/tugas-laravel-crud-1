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

	public static function findByIdWithAnswer($id){

		$pertanyaans = DB::select("
									select pertanyaan.id, pertanyaan.judul, pertanyaan.isi, pertanyaan.tgl_dibuat, pertanyaan.tgl_diperbarui, jawaban.isi as jawaban
									from pertanyaan 
									inner join jawaban 
									on jawaban.pertanyaan_id = $id 
									and pertanyaan.id = $id
								");

		return $pertanyaans;

	}

	public static function findById($id){

		$pertanyaan = DB::table('pertanyaan')->where('id','=',$id)->get();

		return $pertanyaan;

	}

	public static function update($id, $data){

		$pertanyaan = DB::table('pertanyaan')->where('id', $id)->update($data);

		return $pertanyaan;

	}

	public static function delete($id){

		$jawaban = DB::table('jawaban')->where('id', $id)->delete();

		$pertanyaan = DB::table('pertanyaan')->where('id', $id)->delete();

		return $pertanyaan;

	}

}