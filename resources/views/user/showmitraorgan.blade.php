@extends('user.template')
@section('tittle','Mitra Organisasi')
@section('content')
<br>
<br>
	<section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle">Mitra Organisasi Kami</h2>
                </div>
            </div>
        </div>
    </section>
    <div class="table-responsive">
      <div class="row">
        <br><br>
        @foreach($mitra_organ as $m)
          <div class="col-md-3">
            <div class="card">
              <h4 class="card-header">{{ $m->name }}</h4>
              <div class="card-body">
                <img width="200px" src="{{ url('/uploads/file/'.$m->file) }}"> 
              </div>
              <br><br>
            </div>
        </div>
        @endforeach
      </div>
    </div>
          
<br>
<br>
@stop