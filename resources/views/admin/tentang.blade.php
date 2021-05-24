@extends('admin.template')

@section('content')

 <div id="colorlib-main"> 
  <div class="container" style="margin-top:20px">
  </br>
  </br>
  </br>
    <h2>Tentang</h2>
    </br>
    </br>        
      @if(count($tentang))
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover table-condensed tfix">
            <thead align="center">
              <tr>

                <th scope="col">No</th>
                <td><b>Company</b></td>
                <td><b>Kenapa Pilih Kami?</b></td>
                <td colspan="2"><b>Actions</b></td>
              </tr>
            </thead>
              <?php $no = 1;?>
              @foreach($tentang as $m)
              <tr>

                <td>{{ $no++ }}</td>
                <td>{{ $m->company }}</td>
                <td>{{ $m->why_choose_us }}</td>
               
                <td align="center" width="30px">
                  <a href="/tentang/edittentang/{{$m->id}}" class="btn btn-primary btn-sm" role="button"><i class="fa fa-pencil-square"></i> Edit</a>
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
    <a href="/tentang/addtentang"class="btn btn-primary" role="button"><i class="fa fa-pencil-square"></i> + Tambah Tentang</a>  
  </div>
</div>
@stop