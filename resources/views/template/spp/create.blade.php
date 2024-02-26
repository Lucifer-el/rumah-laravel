@extends('template.master')

@section('header', "Masukkan SPP")

@section('content')
<div class="row">
    <div class="col-lg-7">
        <div class="p-5">
            <form action="{{route('spp.store')}}" method="POST">
                @csrf
                <div class="form-group row">
                    <div class="col d-flex justify-content-center">
                        <div class="row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" name="tahun" class="form-control @error("tahun"){{'is-invalid'}} @enderror" id="exampleTahun"
                                    placeholder="Tahun">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="nominal" class="form-control @error("nominal"){{'is-invalid'}} @enderror" id="exampleNominal"
                                    placeholder="Nominal" value="{{@old("nominal")}}">
                            </div>
                            @error('tahun')
              <span class="error invalid-feedback" style="display: inline;">{{$message}}</span>
          @enderror

          @error('nominal')
              <span class="error invalid-feedback" style="display: inline;">{{$message}}</span>
          @enderror
                        </div>

                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
            </form>
</div>

</div>
@endsection