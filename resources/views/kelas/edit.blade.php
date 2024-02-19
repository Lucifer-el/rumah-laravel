@extends('template.master');


@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('kelas.update', $kela->id_kelas)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="nama_kelas">Nama Kelas</label>
            <input name="nama_kelas" type="text" class="form-control @error('nama_kelas') {{ 'is-invalid' }} @enderror" id="nama" placeholder="Nama Kelas">
          </div>
          @error('nama_kelas')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
          <div class="form-group">
            <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
            <input name="kompetensi_keahlian" type="text" class="form-control @error('kompetensi_keahlian') {{ 'is-invalid' }} @enderror" id="kompetensi" placeholder="Kompetensi Keahlian">
          </div>
          @error('kompetensi_keahlian')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
        </div>
        <div class="px-3 d-flex justify-content-between align-items-center">
          <button type="reset" class="btn btn-warning">Reset</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
  </div>

@endsection