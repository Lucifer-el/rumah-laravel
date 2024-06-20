@extends('template.master')

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
@endpush

@section('contenttengah')
<div class="card shadow mb-4 w-100">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pembayaran</h6>
        <h3>Selamat Datang {{ Auth::user()->username }}</h3>
    </div>
    <div class="input-group">
        <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Search for..."
        aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
                <button class="btn btn-primary">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Petugas</th>
                            <th>NISN</th>
                            <th>Tanggal Bayar</th>
                            <th>Bulan dibayar</th>
                            <th>Tahun dibayar</th>
                            <th>Spp</th>
                            <th>Jumlah bayar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pembayarans as $key => $pembayaran)
                            <tr>
                                <td>
                                    {{ $key + 1 }}
                                </td>
                                <td>
                                    @foreach ($petugases as $petugas)
                                        @if ($petugas->id_petugas == $pembayaran->id_petugas)
                                            {{ $petugas->nama_petugas }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    {{ $pembayaran->nisn }}
                                </td>
                                <td>
                                    {{ $pembayaran->tgl_bayar }}
                                </td>
                                <td>
                                    {{ $pembayaran->bulan_dibayar }}
                                </td>
                                <td>
                                    {{ $pembayaran->tahun_dibayar }}
                                </td>
                                <td>
                                    @foreach ($spps as $spp)
                                        @if ($spp->id_spp == $pembayaran->id_spp)
                                            {{ $spp->tahun }} | Rp. {{ number_format($spp->nominal) }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    Rp. {{ number_format($pembayaran->jumlah_bayar) }}
                                </td>
                                <td>
                                    <form action="{{ route('pembayaran.destroy', $pembayaran->id_pembayaran) }}"
                                        method="POST" onsubmit="return confirm('Yakin mau hapus data ini?')">
                                        <div class="d-flex">
                                            <a href="{{ route('pembayaran.show', $pembayaran->id_pembayaran) }}"
                                                class="btn btn-sm btn-info" style="margin-right: 5px;"><i
                                                    class="fa-solid fa-circle-info pt-1"></i>
                                                Detail</a>
                                            <a href="{{ route('pembayaran.edit', $pembayaran->id_pembayaran) }}"
                                                class="btn btn-sm btn-primary me-1" style="margin-right: 5px;"><i
                                                    class="fa-solid fa-pen-to-square"></i>
                                                Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" value="Hapus" style="margin-right: -30px;"><i
                                                    class="fa-solid fa-trash-can"></i> Hapus</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center">Data Masih Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
