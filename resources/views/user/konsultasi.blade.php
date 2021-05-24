@extends('user.template_user')
@section('tittle','law firm')
@section('content')
<br>
<br>
<section id="content"> 
    <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="aligncenter"><h2 class="aligncenter">Form Konsultasi</h2>
                <br/>
                <form id="konsul_user" action="{{route('addKonsultasi')}}" method="POST">
                @csrf
                <input type="hidden" name='id_user' id='id_user' value="{{Session::get('id_user')}}">
                <div class="col-md-12">
                <label for="" style="margin-top:7px;"></label>
                <textarea class="form-control" name="konsul_user" 
                placeholder="Isi konsultasi anda" rows="15"></textarea>
                </div>

                <div class="col-md-12">
                <div style="margin-top:20px;"></div>
                <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </div>
        </div>
        </form>

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