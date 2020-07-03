@extends('adminlte.master')

@section('title', 'Jawaban')

@section('content')

<form action="/jawaban/{{ $id }}" method="POST">

	@csrf

	<div class="form-group row">
		<label for="isi" class="col-sm-2 col-form-label">Jawaban</label>
		<div class="col-sm-10">
			<textarea id="isi" class="form-control" name="isi"></textarea>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-sm-10">
			<button type="submit" class="btn btn-primary">Posting Jawaban</button>
		</div>
	</div>
</form>

<hr>

@if($message != "")

<p>{{ $message }}</p>

@endif

@foreach($data as $key => $values)
<div class="card">
	<div class="card-body">
		{{ $values->isi }}
	</div>
	<div class="card-footer">
		<a href="#" class="btn btn-primary"><i class="fa fa-comments" aria-hidden="true"></i>
		komentar</a>
		<a href="#" class="btn btn-danger"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
		<a href="#" class="btn btn-dark"><i class="fa fa-thumbs-down" aria-hidden="true"></i></i></a>
	</div>
</div>
@endforeach



@endsection