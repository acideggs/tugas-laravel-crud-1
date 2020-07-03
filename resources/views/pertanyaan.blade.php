@extends('adminlte.master')

@section('title', 'Pertanyaan')

@section ('content')

<a href="/pertanyaan/create" class="btn btn-primary mb-4"><i class="fa fa-plus-circle" aria-hidden="true"></i>
Buat Pertanyaan</a>

@foreach($data as $key => $values)
<div class="card">
	<div class="card-header">
		<h3 class="card-title">{{ $values->judul }}</h3>
	</div>
	<div class="card-body">
		{{ $values->isi }}
	</div>
	<div class="card-footer">
		<a href="#" class="btn btn-primary"><i class="fa fa-comments" aria-hidden="true"></i>
		komentar</a>
		<a href="/jawaban/{{ $values->id }}" class="btn btn-success"><i class="fa fa-reply" aria-hidden="true"></i>
		jawaban</a>
		<a href="#" class="btn btn-danger"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
		<a href="#" class="btn btn-dark"><i class="fa fa-thumbs-down" aria-hidden="true"></i></i></a>
	</div>
</div>
@endforeach

@endsection