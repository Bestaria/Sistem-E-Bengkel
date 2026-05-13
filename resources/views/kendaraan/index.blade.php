<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>E-Bengkel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to bottom right, #e8f5e9, #f1f8f4);
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
        }

        .navbar {
            background: #7bc47f;
            padding: 15px 0;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 24px;
            color: white !important;
            letter-spacing: 1px;
        }

        .main-card {
            background: white;
            border-radius: 25px;
            padding: 35px;
            margin-top: 50px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.07);
            border: 2px solid #d9f2dd;
        }

        .title {
            color: #2f5d34;
            font-weight: 700;
        }

        .btn-add {
            background: #8ed99b;
            color: #1f3b23;
            border: none;
            padding: 10px 18px;
            border-radius: 14px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-add:hover {
            background: #74c684;
        }

        .table {
            border-radius: 15px;
            overflow: hidden;
        }

        .table thead {
            background: #9ed8a3;
            color: #234227;
        }

        .table tbody tr {
            transition: 0.2s;
        }

        .table tbody tr:hover {
            background: #f1fff3;
            transform: scale(1.01);
        }

        .btn-edit {
            background: #ffe08a;
            color: #5c4300;
            border: none;
            border-radius: 10px;
            padding: 6px 14px;
            font-weight: 600;
        }

        .btn-edit:hover {
            background: #ffd15a;
        }

        .btn-delete {
            background: #ffb4b4;
            color: #7a1f1f;
            border: none;
            border-radius: 10px;
            padding: 6px 14px;
            font-weight: 600;
        }

        .btn-delete:hover {
            background: #ff8d8d;
        }

        th, td {
            vertical-align: middle;
        }

        .table-bordered>:not(caption)>*>* {
            border-color: #d8eadb;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                🌿 Sistem E-Bengkel
            </a>
        </div>
    </nav>

    <div class="container">

        <div class="main-card">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="title">
                    Daftar Servis Kendaraan
                </h2>

                <a href="/kendaraan/create" class="btn btn-add">
                    + Tambah Kendaraan
                </a>
            </div>

            <table class="table table-bordered table-hover">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Plat Nomor</th>
                        <th>Nama Pemilik</th>
                        <th>Merk Kendaraan</th>
                        <th>Keluhan</th>
                        <th width="180">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($data as $item)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->plat_nomor }}</td>
                        <td>{{ $item->nama_pemilik }}</td>
                        <td>{{ $item->merk_kendaraan }}</td>
                        <td>{{ $item->keluhan }}</td>

                        <td class="d-flex gap-2">

                            <a href="/kendaraan/{{ $item->id }}/edit"
                                class="btn btn-edit btn-sm">
                                Edit
                            </a>

                            <form action="/kendaraan/{{ $item->id }}" method="POST"
                                onsubmit="return confirm('Hapus kendaraan dari antrean?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                    class="btn btn-delete btn-sm">
                                    Hapus
                                </button>

                            </form>

                        </td>
                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</body>

</html>