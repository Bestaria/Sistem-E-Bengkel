@extends('layout')

@section('content')

<div class="card p-4">

    <h3 class="mb-4">Tambah Kendaraan</h3>

    <form action="{{ route('kendaraan.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label>Plat Nomor</label>
            <input type="text"
                   name="plat_nomor"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Nama Pemilik</label>
            <input type="text"
                   name="nama_pemilik"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Merk Kendaraan</label>
            <input type="text"
                   name="merk_kendaraan"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Keluhan</label>
            <textarea name="keluhan"
                      class="form-control"></textarea>
        </div>

        <button class="btn btn-primary">
            Simpan
        </button>

        <a href="/kendaraan"
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

@endsection