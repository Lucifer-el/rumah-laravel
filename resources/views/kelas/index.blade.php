@extends('template.master')
@section('content')
@if ($message = Session::get('success'))
  <div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>	
    <strong>{{ $message }}</strong> 
  </div>
@endif
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <a href="{{ route('kelas.create') }}" class="btn btn-sm btn-outline-primary">
          <i class="fa fa-plus"> Genre</i>
        </a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="table" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Id Kelas</th>
              <th>Nama Kelas</th>
              <th>Kompetensi Keahlian</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($kelass as $key => $value)
              <tr>                
                <td>
                  {{ $value->id_kelas }}
                </td>
                <td>
                  {{ $value->nama_kelas }}  
                </td>
                <td>
                  {{ $value->kompetensi_keahlian }}
                </td>
              </tr>   
                  
<td>
  <form action="{{route('kelas.destroy', $value->id_kelas)}}" method="POST">
    <a href="{{route('kelas.edit', $value->id_kelas)}}" class="btn btn-sm btn-warning">EDIT</a>
    <a href="{{route('kelas.show', $value->id_kelas)}}" class="btn btn-sm btn-warning">SHOW</a>
    @csrf
    @method('DELETE')
    <input type="submit" class="btn btn-sm btn-danger my-1" value="delete">
  </form>
</td>
                 
                  
                  
                              
              </tr>
            @empty
              <tr>
                <td>Data Masih Kosong</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
@endsection