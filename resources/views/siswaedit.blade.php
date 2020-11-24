@extends('master.master')
@section('title', 'Laravel')

@section('content')
<div class="container">
	<div class="card mt-5">
		<div class="card-header text-center">
			EDIT Data Siswa
		</div>
		<div class="card-body">
			<a href="{{url ('/siswa')}}" class="btn btn-primary">Kembali</a>
			<br>
			<br>
			{{ Form::model($siswa, array('route'=>array('siswa.update', $siswa->id), 'method' => 'put')) }}
				<div class="form-group">
					<label>Nama</label>
					{!! Form::text('nama', null, array('class'=>'form-control',  )) !!}
					<!-- <input type="text" name="nama" class="form-control" value="{{$siswa->nama}}"> -->

					@if($errors->has('nama'))
						<div class="text-danger">
							{{ $errors->first('nama')}}
						</div>
					@endif
				</div>

				<div class="form-group">
					<label>Umur</label>
					{!! Form::number('umur', null, array('class'=>'form-control',  )) !!}
					@if($errors->has('umur'))
						<div class="text-danger">
							{{ $errors->first('umur')}}
						</div>
					@endif
				</div>

				<div class="form-group">
					<input type="submit" value="Simpan" class="btn btn-success">
				</div>

			{{ Form::close() }}
			<!-- </form> -->
		</div>
	</div>
</div>
@endsection