@extends('adminlte.master')

@section('title', 'Detail')

@section ('content')




<h4>{{ $data[0]->judul }} <a href="/pertanyaan/{{ $data[0]->id }}/edit" class="btn"><i class="fa fa-file" aria-hidden="true"></i> edit</a> </h4>
<p style="font-size: 12px;">
	tgl_dibuat : {{ $data[0]->tgl_dibuat }} | tgl_diperbarui : {{ $data[0]->tgl_diperbarui }}
</p>

<hr>

<p>{{ $data[0]->isi }}</p>

<hr>

<form action="/pertanyaan/{{ $data[0]->id }}" class="mb-4" method="POST">
	@csrf
	@method('DELETE')

	<a href="/jawaban/{{ $data[0]->id }}" class="btn btn-success">Bantu Jawab</a>

	<button class="btn btn-danger">Hapus</button>
</form>

@if($message == "")

@foreach($data as $key => $values)
<div class="card">
	<div class="card-body">
		{{ $values->jawaban }}
	</div>
	<div class="card-footer">
		<a href="#" class="btn btn-primary"><i class="fa fa-comments" aria-hidden="true"></i>
		komentar</a>
		<a href="#" class="btn btn-danger"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
		<a href="#" class="btn btn-dark"><i class="fa fa-thumbs-down" aria-hidden="true"></i></a>
	</div>
</div>
@endforeach

@endif

@endsection