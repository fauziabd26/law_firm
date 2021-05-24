@extends('admin.template')

@section('content')
 <div id="colorlib-main"> 
  <div class="container" style="margin-top:20px">   
	</br>
	</br>
	<h2>Edit Tentang</h2>
	@if(count($errors) > 0)
	<div class="alert alert-danger">
		@foreach ($errors->all() as $error)
		{{ $error }} <br/>
		@endforeach
	</div>
	@endif	
	<form action="/tentang/update/{{ $tentang->id }}" method="post" enctype="multipart/form-data">
		@method('put')
		@csrf

		<div class="form-group row">
	 	<lable for="company" class="col-sm-2 col-form-label">Company</lable>
	 	 <textarea class="form-control"   name="company" >{{ $tentang->company }}</textarea>
          @if ($errors->has('company'))
         <span class="alert alert-danger" role="alert">
           <strong>{{ $errors->first('company') }}</strong>
           </span>
           @endif
	</div>

	<div class="form-group row">
	 	<lable for="why_choose_us" class="col-sm-2 col-form-label">Kenapa Pilih kami?</lable>
	 	<textarea class="form-control"  name="why_choose_us" >{{ $tentang->why_choose_us }}</textarea>
          @if ($errors->has('why_choose_us'))
         <span class="alert alert-danger" role="alert">
           <strong>{{ $errors->first('why_choose_us') }}</strong>
           </span>
           @endif
	</div>
	 	
	</br>
<input type="submit"  value="Simpan" class="btn btn-primary">
</form>
</br>
</br>
</br>
@stop