@extends('adminlte.master')

@section('title', 'Buat')

@section('content')

<form action="/pertanyaan" method="POST">

	@csrf

	<div class="form-group row">
		<label for="judul" class="col-sm-2 col-form-label">Judul</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="judul" name="judul">
		</div>
	</div>
	<div class="form-group row">
		<label for="isi" class="col-sm-2 col-form-label">Isi</label>
		<div class="col-sm-10">
			<textarea id="isi" class="form-control" name="isi"></textarea>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-10">
			<button type="submit" class="btn btn-primary">Posting</button>
		</div>
	</div>
</form>

@endsection