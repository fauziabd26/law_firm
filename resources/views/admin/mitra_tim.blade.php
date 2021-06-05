@extends('admin.template')

@section('content')

 <div id="colorlib-main"> 
  <div class="container" style="margin-top:20px">
  </br>
  </br>
  </br>
    <h2>Mitra & Team</h2>
    </br>
    </br>        
      @if(count($mitra_tim))
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover table-condensed tfix">
            <thead align="center">
              <tr>

                <th scope="col">No</th>
                <td><b>Kurator/Pengurus</b></td>
                <td><b>Partners Domisili Dki</b></td>
                <td><b>Partners Domisili Samarinda/Kal</b></td>
                <td><b>Partners Domisili Batam/KepRiau</b></td>
                <td><b>Team Partners Makasar</b></td>
                <td><b>Paralegal</b></td>
                <td colspan="2"><b>Actions</b></td>
              </tr>
            </thead>
              <?php $no = 1;?>
              @foreach($mitra_tim as $m)
              <tr>

                <td>{{ $no++ }}</td>
                <td>{{ $m->kurator_pengurus }}</td>
                <td>{{ $m->partdom_dkijkt }}</td>
                <td>{{ $m->partdom_samar_kal }}</td>
                <td>{{ $m->partdom_batam_kepriau }}</td>
                <td>{{ $m->tim_partdom_makas }}</td>
                <td>{{ $m->paralegal }}</td>
               
                <td align="center" width="30px">
                  <a href="/editmitra_tim/{{$m->id}}" class="btn btn-primary btn-sm" role="button"><i class="fa fa-pencil-square"></i> Edit</a>

                  <a href="/mitra_tim/destroy/{{ $m->id }}" class="btn btn-danger btn-sm mr-2" title="Hapus" data-toggle="tooltip"><i class="fa fa-trash" aria-hidden="true">Hapus</i>
                  </a>
                </td>

                
              </tr>
              @endforeach
          </table>
          </div>
        @else
            <div class="alert alert-warning">
                <i class="fa fa-exclamation-triangle"></i> Mitra & Team Belum tersedia
            </div>
        @endif
    <a href="-mitra_tim-addmitra_tim"class="btn btn-primary" role="button"><i class="fa fa-pencil-square"></i> + Tambah Mitra & Team</a>  
  </div>
</div>
@stop