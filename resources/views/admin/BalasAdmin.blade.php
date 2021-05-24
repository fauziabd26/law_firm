@extends('admin.template')
@section('tittle','law firm')
@section('content')

<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li class="active">Data Konsultasi</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Konsultasi</strong>
                            </div>     
                            <div class="card-body card-block">
                                @if($errors->any())
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                               
                            <form action="/admin-AksiBalasAdmin-{{$data->id_konsultasi}}" method="post" class="form-horizontal">
                                    @csrf
                                    @method('PUT')
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class="badge badge-info">
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-9"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class="form-control-label">
                                                Pertanyaan Konsultasi
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                 
                                          <input type="text" class="form-control"
                                                value="{{$data->konsul_user}}" ReadOnly>
                                        
                                        </div>
                                        
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="password-input" class=" form-control-label">
                                                Jawaban Konsultasi
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            @if($data->jawaban_konsul != '')
                                                <textarea type="text" id="jawaban_konsul" name="jawaban_konsul" 
                                                    placeholder="Masukan Jawaban" class="form-control" 
                                                    ></textarea>
                                            @else
                                                <textarea type="text" id="jawaban_konsul" name="jawaban_konsul" 
                                                placeholder="Masukan Jawaban" class="form-control"></textarea>
                                            @endif
                                        </div>
                                        
                                    </div>
                                    <div class="card-body">
                                        @if($data->jawaban_konsul == '')
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Balas
                                        @endif
                                        </button>
                                        <a href="admin-data_konsultasi" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Batal
                                        </a>
                                    </div>
                                </form>
                                
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

  

            <div class="col-md-12">
                <div class="aligncenter"><h2 class="aligncenter"></h2>
                <br/>
                <table id="bootstrap-data-table" class="table table-striped table-bordered">  
                <div class="col-md-12">
                </div>
            </div>
        </div>
     <div class="row">
            <div class="col-sm-4 info-blocks"> 
            <label for="text-input" class="badge badge-info">
            </label>
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