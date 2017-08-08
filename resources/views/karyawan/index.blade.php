@extends('layouts.app')
@section('content')
<div class="container">

<div class="row">
	<center><h1>Data Karyawan</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Karyawan
	<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">Kembali</a>
	</div></div></div></div>

	<div class="panel-body">
		<form action="{{route('karyawan.store')}}" method="post">{{csrf_field()}}
			<div class="form-group">
				<label class="control-lable">Nama Karyawan</label>
				<input type="text" name="a" class="form-control" required="">
			</div>
		
			<div class="form-group">
				<label class="control-lable">Jenis Kelamin</label>
				<input type="text" name="b" class="form-control" required="">
			</div>


			<div class="form-group">
				<label class="control-lable">Alamat</label>
				<textarea class="form-control" rows="10" name="c" required=""></textarea>
			</div>

			<div class="form-group">
				<label class="control-lable">Email</label>
				<input type="number" name="d" class="form-control" required="">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-success">Simpan</button>
				<button type="reset" class="btn btn-danger">Reset</button>
			</div>
		</form>
			
	</div>
	</div>
</div>
@endsection