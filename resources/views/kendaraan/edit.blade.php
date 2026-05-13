@extends('layout')

@section('content')

<div class="card p-4">

    <h3 class="mb-4">Edit Kendaraan</h3>

    <form action="{{ route('kendaraan.update', $kendaraan->id) }}"
          method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Plat Nomor</label>

            <input type="text"
                   name="plat_nomor"
                   class="form-control"
                   value="{{ $kendaraan->plat_nomor }}">
        </div>

        <div class="mb-3">
            <label>Nama Pemilik</label>

            <input type="text"
                   name="nama_pemilik"
                   class="form-control"
                   value="{{ $kendaraan->nama_pemilik }}">
        </div>

        <div class="mb-3">
            <label>Merk Kendaraan</label>

            <input type="text"
                   name="merk_kendaraan"
                   class="form-control"
                   value="{{ $kendaraan->merk_kendaraan }}">
        </div>

        <div class="mb-3">
            <label>Keluhan</label>

            <textarea name="keluhan"
                      class="form-control">{{ $kendaraan->keluhan }}</textarea>
        </div>

        <button class="btn btn-primary">
            Update
        </button>

        <a href="/kendaraan"
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

@endsection