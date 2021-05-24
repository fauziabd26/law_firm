<div id="colorlib-main"> 
  <div class="container" style="margin-top:20px">   
	</br>
	</br>
	<h2>Edit Mitra & Team</h2>
	@if(count($errors) > 0)
	<div class="alert alert-danger">
		@foreach ($errors->all() as $error)
		{{ $error }} <br/>
		@endforeach
	</div>
	@endif	
	<form action="/mitra_tim/update/{{ $mitra_tim->id }}" method="post" enctype="multipart/form-data">
		@method('put')
		@csrf

	<div class="form-group row">
	 	<lable for="kurator_pengurus" class="col-sm-2 col-form-label">Kurator/Pengurus</lable>
	 	<input type="text" required="required" name="kurator_pengurus" value="{{ $mitra_tim->kurator_pengurus }}"><br> 	
	</div>
	<div class="form-group row">
	 	<lable for="partdom_dkijkt" class="col-sm-2 col-form-label">Partners Domisili Dki</lable>
	 	<input type="text" required="required" name="partdom_dkijkt" value="{{ $mitra_tim->partdom_dkijkt }}"><br> 	
	</div>
	<div class="form-group row">
	 	<lable for="partdom_samar_kal" class="col-sm-2 col-form-label">Partners Domisili Samarinda/Kal</lable>
	 	<input type="text" required="required" name="partdom_samar_kal" value="{{ $mitra_tim->partdom_samar_kal }}"><br> 	
	</div>
	<div class="form-group row">
	 	<lable for="partdom_batam_kepriau" class="col-sm-2 col-form-label">Partners Domisili Batam/KepRiau</lable>
	 	<input type="text" required="required" name="partdom_batam_kepriau" value="{{ $mitra_tim->partdom_batam_kepriau }}"><br> 	
	</div>
	<div class="form-group row">
	 	<lable for="tim_partdom_makas" class="col-sm-2 col-form-label">Team Partners Makasar</lable>
	 	<input type="text" required="required" name="tim_partdom_makas" value="{{ $mitra_tim->tim_partdom_makas }}"><br> 	
	</div>
	<div class="form-group row">
	 	<lable for="paralegal" class="col-sm-2 col-form-label">Paralegal</lable>
	 	<input type="text" required="required" name="paralegal" value="{{ $mitra_tim->paralegal }}"><br> 	
	</div>
	
	</br>
<input type="submit"  value="Simpan" class="btn btn-primary">
</form>
</br>