@extends('master.master')
@section('title', 'Laravel')

@section('content')
<div class="container">
	<div class="card mt-5">
		<div class="card-header text-center">
			<h4>Data Siswa</h4>
		</div>
		<div class="card-body">
		@if(Session('success'))
			<div class="alert alert-success">
				{{ Session('success') }}
			</div>
		@endif
			
			<a href="{{ url('siswa/siswatambah')}}" class="btn btn-primary tmbh">Input Siswa Baru</a>
			<br>
			<br>
			<table class="table table-bordered table-hover">
				<thead>
					<tr class="text-center">
						<th>No</th>
						<th>Nama</th>
						<th>Umur</th>
						<th width="30%">Opsi</th>
					</tr>
				</thead>
				<tbody>
					@php $no = 1; @endphp
					@foreach($siswa as $p)
					
					<tr>
						<td width="20&" class="text-center">{{ $no++ }}</td>
						<td>{{ $p-> nama}}</td>
						<td class="text-center">{{ $p-> umur}}</td>
						<td class="text-center">
							<a href="{{route('siswa.edit', $p->id)}}" class="btn btn-warning">Edit</a>
							|
							{!! Form::open(['method' => 'DELETE', 'route' => ['siswa.hapus',$p->id],'style'=>'display:inline']) !!}
							<button class="btn btn-danger" type="submit" onclick="return confirm('Apakah kamu yakin?')">Hapus</button>
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