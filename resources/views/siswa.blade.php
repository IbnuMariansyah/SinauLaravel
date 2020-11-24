@extends('master.master')
@section('title', 'Laravel')

@section('content')
<div class="container">
	<div class="card mt-5">
		<div class="card-header text-center">
			<h4>Form Tambah Data Siswa</h4>
		</div>
		<div class="card=body">
			<br>
			<a href="{{ url('siswa/siswatambah')}}" class="btn btn-primary tmbh">Input Siswa Baru</a>
			<br>
			<br>
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr class="text-center">
						<th>Nama</th>
						<th>Umur</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($siswa as $p)
					<tr>
						<td>{{ $p-> nama}}</td>
						<td class="text-center">{{ $p-> umur}}</td>
						<td class="text-center">
							<a href="{{route('siswa.edit', $p->id)}}" class="btn btn-warning">Edit</a>
							|
							{!! Form::open(['method' => 'DELETE', 'route' => ['siswa.hapus',$p->id],'style'=>'display:inline']) !!}
							<button class="btn btn-danger" type="submit">Hapus</button>
							{!! Form::close() !!}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection