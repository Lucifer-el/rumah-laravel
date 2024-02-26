@extends('template.master');


@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('petugas.store')}}" method="POST">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="username">Username</label>
            <input name="username" type="text" class="form-control @error('username') {{ 'is-invalid' }} @enderror" id="username" placeholder="Username">
          </div>
          @error('username')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
          <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="text" class="form-control @error('password') {{ 'is-invalid' }} @enderror" id="password" placeholder="password">
          </div>
          @error('password')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
          <div class="form-group">
            <label for="nama_petugas">Nama Petugas</label>
            <input name="nama_petugas" type="text" class="form-control @error('nama_petugas') {{ 'is-invalid' }} @enderror" id="nama_petugas" placeholder="Nama Petugas">
          </div>
          @error('nama_petugas')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
          <div class="form-group">
            <label for="level">Level</label>
            <input name="level" type="text" class="form-control @error('level') {{ 'is-invalid' }} @enderror" id="level" placeholder="Admin/Petugas">
          </div>
          @error('level')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
          
        </div>
        <div class="px-3 d-flex justify-content-between align-items-center">
          <button type="reset" class="btn btn-warning">Reset</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
  </div>

@endsection