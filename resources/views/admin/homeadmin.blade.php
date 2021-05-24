@extends('admin.template')
@section('tittle','law firm')
@section('content')
<br>
<br>
    <section class="statistic">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="recent-report2">
                            <center><h3 class="title-3">Welcome Admin, {{Session::get('username')}}</h3></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<br>
<br>
@stop