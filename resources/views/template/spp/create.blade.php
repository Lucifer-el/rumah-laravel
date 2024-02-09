@extends('template.master')

@section('header', 'Pendataan Spp Tahunan')

@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('spp.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="tahun">Tahun Spp</label>
                    <input name= "tahun" type="text" class="form-control @error('tahun') {{ 'is-invalid' }} @enderror" id="tahun" placeholder="Tahun Spp" value="{{@old('tahun')}}">
                    <label for="nominal">Nominal Spp</label>
                    <input name= "nominal" type="text" class="form-control @error('nominal') {{ 'is-invalid' }} @enderror" id="nominal" placeholder="Nominal Spp" value="{{@old('nominal')}}">
                </div>
                @error('tahun')
                <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{$message}}</span>
                @enderror
                @error('nominal')
                <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{$message}}</span>
                @enderror
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>
@endsection