@extends('admin.template')

@section('content')

 <div id="colorlib-main"> 
  <div class="container" style="margin-top:20px">
  </br>
  </br>
  </br>
    <h2>Mitra & Organisasi</h2>
    </br>
    </br>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
      Tambah Mitra & Organisasi Baru
    </button>
      @if(count($mitra_organ))
        <div class="table-responsive">
          <br>        
          <table class="table table-bordered table-striped table-hover table-condensed tfix">
            <thead align="center">
              <tr>
                <th scope="col">No</th>
                <td><b>Nama Organisasi</b></td>
                <td><b>Foto</b></td>
              </tr>
            </thead>
              <?php $no = 1;?>
              @foreach($mitra_organ as $m)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $m->name }}</td>
                <td><img width="200px" src="{{ url('uploads/file/'.$m->file) }}"></td> 

                <td align="center" width="30px">
                
                  <a href="/mitra_organ/destroy/{{ $m->id }}" class="btn btn-danger btn-sm mr-2" title="Hapus" data-toggle="tooltip"><i class="fa fa-trash" aria-hidden="true">Hapus</i>
                  </a>
                  </td>

              </tr>
              @endforeach
          </table>
          </div>
        @else
            <div class="alert alert-warning">
                <i class="fa fa-exclamation-triangle"></i> Mitra & Organisasi Belum tersedia
            </div>
        @endif
        <br>

<!-- ADDModal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Mitra & Organisasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if(count($errors) > 0)
          <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
              {{ $error }} <br/>
            @endforeach
          </div>
        @endif
        <form action="/mitra_organ/proses"  method="POST" class="table table-striped table-hover table-sm table-bordered"  enctype="multipart/form-data">
          {{@csrf_field()}}
          <div class="form-group">
            <lable for="name">Nama Mitra & Organisasi</lable>
            <input type="text" name="name" id="name" required="required" class="form-control"><br>
          </div>
          <div class="form-group">
            <lable for="file">Foto</lable>
            <div class="form-group">  
              <input type="file" name="file" id="file" required="required" class="form-group"><br>
            </div>
          </div>
          <input type="submit"  value="Add" class="btn btn-primary">
        </form>  
      </div>
    </div>
  </div>
</div>
<!-- ADDModal -->
@endsection