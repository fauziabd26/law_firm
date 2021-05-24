@extends('user.template_user')
@section('tittle','law firm')
@section('content')
<br>
<br>
<section id="content"> 
    <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="aligncenter"><h2 class="aligncenter">Jawaban Konsultasi</h2>
                <br/>
            @foreach($konsul as $data)
            <input type="hidden" name='username' id='username' value="{{Session::get('username')}}">
            <h5>Pertanyaan Konsultasi :</h5>
            <input class="form-control" type="text" value="{{ $data->konsul_user }}" readonly>            
            <div class="d-flex justify-content-start">Jawaban Konsultasi :</div>
            <input class="form-control" type="text" value="{{ $data->jawaban_konsul }}" readonly>            
            @endforeach
            </div>
        </div>

     <div class="row">
            <div class="col-sm-4 info-blocks"> 
                <i class="icon-info-blocks material-icons"></i>
                <div class="info-blocks-in">
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks material-icons"></i>
                <div class="info-blocks-in">
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks material-icons"></i>
                <div class="info-blocks-in">
                </div>
            </div>
        </div>
    </div>
    </section>
    
    <section class="section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-text">
                    </div>
                </div>
            </div>
        </div>
    </section>    
<br>
<br>
@stop