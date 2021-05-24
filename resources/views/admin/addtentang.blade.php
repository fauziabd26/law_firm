@extends('admin.template')

@section('content')

<div id="colorlib-main"> 
  <div class="container" style="margin-top:20px">   
  </br>
  </br>
  </br>
	<h2>Tentang</h2>
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
	<form action="/tentang/proses"  method="POST" class="table table-striped table-hover table-sm table-bordered"  enctype="multipart/form-data">
		@csrf
	<div class="form-group row">
	 	<lable for="company" class="col-sm-2 col-form-label">Company</lable>
	 	 <textarea class="form-control" value="{{ old('company') }}" rows="20" name="company">{{ old('company') }}</textarea>
          @if ($errors->has('company'))
         <span class="alert alert-danger" role="alert">
           <strong>{{ $errors->first('company') }}</strong>
           </span>
           @endif
	</div>

	<div class="form-group row">
	 	<lable for="why_choose_us" class="col-sm-2 col-form-label">Kenapa Pilih kami?</lable>
	 	<textarea class="form-control" value="{{ old('why_choose_us') }}" rows="20" name="why_choose_us">{{ old('why_choose_us') }}</textarea>
          @if ($errors->has('why_choose_us'))
         <span class="alert alert-danger" role="alert">
           <strong>{{ $errors->first('why_choose_us') }}</strong>
           </span>
           @endif
	</div>

<input type="submit"  value="Add" class="btn btn-primary">
</form>
</br>
</br>
</br>
@stop