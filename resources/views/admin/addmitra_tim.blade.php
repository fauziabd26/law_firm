@extends('admin.template')

@section('content')

<div id="colorlib-main"> 
  <div class="container" style="margin-top:20px">   
  </br>
  </br>
  </br>
	<h2>Mitra & Team</h2>
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
	<form action="/mitra_tim/proses"  method="POST" class="table table-striped table-hover table-sm table-bordered"  enctype="multipart/form-data">
		@csrf
	<div class="form-group row">
	 	<lable for="kurator_pengurus" class="col-sm-2 col-form-label">Kurator/Pengurus</lable>
	 	<input type="text" name="kurator_pengurus" id="kurator_pengurus" required="required" class="form-group"><br> 	 
	</div>
	<div class="form-group row">
	 	<lable for="partdom_dkijkt" class="col-sm-2 col-form-label">Partners Domisili Dki</lable>
	 	<input type="text" name="partdom_dkijkt" id="partdom_dkijkt" required="required" class="form-group"><br> 	 
	</div>
	<div class="form-group row">
	 	<lable for="partdom_samar_kal" class="col-sm-2 col-form-label">Partners Domisili Samarinda/Kal</lable>
	 	<input type="text" name="partdom_samar_kal" id="partdom_samar_kal" required="required" class="form-group"><br> 	 
	</div>
	<div class="form-group row">
	 	<lable for="partdom_batam_kepriau" class="col-sm-2 col-form-label">Partners Domisili Batam/KepRiau</lable>
	 	<input type="text" name="partdom_batam_kepriau" id="partdom_batam_kepriau" required="required" class="form-group"><br> 	 
	</div>
	<div class="form-group row">
	 	<lable for="tim_partdom_makas" class="col-sm-2 col-form-label">Team Partners Makasar</lable>
	 	<input type="text" name="tim_partdom_makas" id="tim_partdom_makas" required="required" class="form-group"><br> 	 
	</div>
	<div class="form-group row">
	 	<lable for="paralegal" class="col-sm-2 col-form-label">Paralegal</lable>
	 	<input type="text" name="paralegal" id="paralegal" required="required" class="form-group"><br> 	 
	</div>
<input type="submit"  value="Add" class="btn btn-primary">
</form>
</br>
</br>
</br>
@stop