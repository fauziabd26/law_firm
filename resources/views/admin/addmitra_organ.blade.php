@extends('admin.template')

@section('content')

<div id="colorlib-main"> 
  <div class="container" style="margin-top:20px">   
  </br>
  </br>
  </br>
	<h2>Mitra Organisasi</h2>
	<br/>
	<br/>
	<br>
	@if(count($errors) > 0)
	<div class="alert alert-danger">
	@foreach ($errors->all() as $error)
	{{ $error }} <br/>
	@endforeach
	</div>
	@endif
	<form action="/mitra_organ/proses"  method="POST" class="table table-striped table-hover table-sm table-bordered"  enctype="multipart/form-data">
		{{@csrf_field()}}
	<div class="form-group row">
	 	<lable for="name" class="col-sm-2 col-form-label">Nama Organisasi</lable>
	 	<input type="text" name="name" id="name" required="required" class="form-group"><br>
	</div>
	<div class="form-group row">
		<lable for="file" class="col-sm-2 col-form-label">Foto</lable>
		<div class="form-group">	
		<input type="file" name="file" id="file" required="required" class="form-group"><br>
		</div>
	</div>



<input type="submit"  value="Add" class="btn btn-primary">
</form>
</br>
</br>
</br>
@stop