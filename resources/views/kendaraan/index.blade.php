@extends('layout')

@section('content')

<div class="card p-4">

    <div class="d-flex justify-content-between mb-3">
        <h3>Daftar Servis Kendaraan</h3>

        <a href="{{ route('kendaraan.create') }}"
           class="btn btn-primary">
            Tambah Kendaraan
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Plat Nomor</th>
                <th>Nama Pemilik</th>
                <th>Merk Kendaraan</th>
                <th>Keluhan</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($kendaraan as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->plat_nomor }}</td>
                <td>{{ $item->nama_pemilik }}</td>
                <td>{{ $item->merk_kendaraan }}</td>
                <td>{{ $item->keluhan }}</td>

                <td>

                    <a href="{{ route('kendaraan.edit', $item->id) }}"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('kendaraan.destroy', $item->id) }}"
                          method="POST"
                          class="d-inline"
                          onsubmit="return confirm('Hapus kendaraan?')">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm">
                            Hapus
                        </button>

                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection