@extends('template.master');

@section('title', 'Show Data Cast')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">


              <div class="form-group">
                <label for="nama">Nama Kelas</label>
                <input name="nama" type="text" class="form-control" id="nama"  placeholder="Nama Kelas" value="{{ $kela->nama_kelas}}" disabled>
              </div>

              <div class="form-group">
                <label for="kompetensi_keahlian">kompetensi_keahlian</label>
                <input name="kompetensi_keahlian" type="text" class="form-control" id="kompetensi_keahlian"  placeholder="Kompetensi Keahlian" value="{{ $kela->kompetensi_keahlian}}" disabled>
              </div>



            </div>

          </div>
        </div>
        <div class="px-3 d-flex justify-content-between align-items-center">

          <a href="{{ route('kelas.index')}}" class="btn btn-info">Back</a>
        </div>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection