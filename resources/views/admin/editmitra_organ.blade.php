<!DOCTYPE html>
<html>
<head>
	<title>Edit | Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
	 <div id="colorlib-main"> 
  <div class="container" style="margin-top:20px">   
	</br>
	</br>
	<h2>Edit Mitra Organisasi</h2>
	@if(count($errors) > 0)
	<div class="alert alert-danger">
		@foreach ($errors->all() as $error)
		{{ $error }} <br/>
		@endforeach
	</div>
	@endif	
	<form action="/mitra_organ/update/{{ $mitra_organ->id }}" method="post" enctype="multipart/form-data">
		@method('put')
		@csrf

	<div class="form-group row">
	 	<lable for="name" class="col-sm-2 col-form-label">Nama Organisasi</lable>
	 	<input type="text" required="required" name="name" value="{{ $mitra_organ->name }}"><br> 	
	</div>
	<div class="form-group row">
			<lable for="file" class="col-sm-2 col-form-label">Foto</lable>
			<div class="form-group">
				<input type="file" name="file" id="file" required="required" class="form-group"><br>
			</div>
		</div>
		<div class="row">
			<div class="col s6">
				<img width="150px" src="{{ url('/uploads/file/'.$mitra_organ->file) }}">
			</div>
		</div>
	</br>
	
	</br>
<input type="submit"  value="Simpan" class="btn btn-primary">
</form>
</br>
</br>
</br>