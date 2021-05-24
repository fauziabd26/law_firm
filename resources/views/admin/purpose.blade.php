@extends('admin.template')

@section('content')

 <div id="colorlib-main"> 
  <div class="container" style="margin-top:20px">
  </br>
  </br>
  </br>
    <h2>Purpose</h2>
    </br>
    </br>        
      @if(count($purpose))
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover table-condensed tfix">
            <thead align="center">
              <tr>

                <th scope="col">No</th>
                <td><b>Visi & Misi</b></td>
                <td><b>Maksud & Tujuan</b></td>
                <td><b>Motto</b></td>
                <td colspan="2"><b>Actions</b></td>
              </tr>
            </thead>
              <?php $no = 1;?>
              @foreach($purpose as $m)
              <tr>

                <td>{{ $no++ }}</td>
                <td>{{ $m->visi_misi }}</td>
                <td>{{ $m->tujuan }}</td>
               <td>{{ $m->motto }}</td>

                <td align="center" width="30px">
                  <a href="/purpose/editpurpose/{{$m->id}}" class="btn btn-primary btn-sm" role="button"><i class="fa fa-pencil-square"></i> Edit</a>
                </td>

                
              </tr>
              @endforeach
          </table>
          </div>
        @else
            <div class="alert alert-warning">
                <i class="fa fa-exclamation-triangle"></i> Tentang Belum tersedia
            </div>
        @endif
    <a href="/purpose/addpurpose"class="btn btn-primary" role="button"><i class="fa fa-pencil-square"></i> + Tambah purpose</a>  
  </div>
</div>
@stop