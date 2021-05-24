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
            <div class="card-body">
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Pertanyaan Konsultasi</th>
                    <th>Jawaban Konsultasi</th>
                </tr>
                </thead>
                <tbody>

                @foreach($konsultasi as $konsul)
                <tr>
                    <td>{{$konsul->konsul_user}}</td>
                    <td>{{$konsul->jawaban_konsul}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
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