@extends('user.template')
@section('tittle','Mitra & Tim')
@section('content')
<br>
<br>
	<section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle">Mitra & Tim Kami</h2>
                </div>
            </div>
        </div>
    </section>
    <div class="table-responsive">
      
              <table class="table table-bordered table-striped table-hover table-condensed tfix">
                <thead align="center">
                  <table border="0">
                    <tr> 
                      
                      <th>No</th>
                      <th>Kurator Pengurus</th>
                      <th>Partdom DKI Jakarta</th>
                      <th>Partdom Samarinda & Kalimantan</th>
                      <th>Partdom Batam & Kep.Riau</th>
                      <th>Tim Partdom Makassar</th>
                      <th>Paralegal</th>
                    </tr>      
                </thead> 

               <?php $no = 1;?>
              @foreach($mitra_tim as $p)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $p->kurator_pengurus }}</td>
                <td>{{ $p->partdom_dkijkt }}</td>
                <td>{{ $p->partdom_samar_kal }}</td>
                <td>{{ $p->partdom_batam_kepriau }}</td>
                <td>{{ $p->tim_partdom_makas }}</td>
                <td>{{ $p->paralegal }}</td>
                
              </tr>
              @endforeach
          </table>
      </div>



<br>
<br>
@stop