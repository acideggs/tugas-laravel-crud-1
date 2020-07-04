@extends('adminlte.master')

@section('title', 'Edit')

@section('content')

<form action="/pertanyaan/{{ $data[0]->id }}" method="POST">

	@csrf

	@method('PUT')

	<div class="form-group row">
		<label for="judul" class="col-sm-2 col-form-label">Judul</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" value="{{ $data[0]->judul }}" id="judul" name="judul">
		</div>
	</div>
	<div class="form-group row">
		<label for="isi" class="col-sm-2 col-form-label">Isi</label>
		<div class="col-sm-10">
			<textarea id="isi" class="form-control" name="isi">{{ $data[0]->isi }}</textarea>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-10">
			<button type="submit" class="btn btn-primary">Simpan</button>
		</div>
	</div>
</form>

@endsection