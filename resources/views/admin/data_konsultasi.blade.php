@extends('admin.template')
@section('tittle','law firm')
@section('content')

<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h5>Data Konsultasi</h5>
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
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama User</th>
                                            <th>Pertanyaan Konsultasi</th>
                                            <th>Jawaban Konsultasi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no=1;
                                        @endphp

                                        @foreach( $konsul as $konsultasi )
                                            <tr>
                                                <td>{{$no++}}</td>
                                                @foreach($users as $user)
                                                <td>{{$user->username}}</td>
                                                @endforeach
                                                <td>{{$konsultasi->konsul_user}}</td>
                                                <td>{{$konsultasi->jawaban_konsul}}</td>
                                                <td>
                                                    <div>    
                                                        <a href="/admin-BalasAdmin-{{$konsultasi->id_konsultasi}}" 
                                                            class="btn btn-warning btn-sm"  title="Edit">
                                                            <i class="fas fa-pencil-alt"></i> Balas
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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