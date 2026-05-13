<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>E-Bengkel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f7fb;
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar {
            background: linear-gradient(135deg, #0f172a, #1e3a8a);
        }

        .navbar-brand {
            font-weight: 700;
            color: white !important;
        }

        .card-box {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            padding: 30px;
        }

        .table thead {
            background: #1e3a8a;
            color: white;
        }

        .btn-add {
            background: #0d6efd;
            color: white;
            border-radius: 10px;
        }

        .btn-edit {
            background: #f59e0b;
            color: white;
        }

        .btn-delete {
            background: #dc2626;
            color: white;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                Sistem E-Bengkel
            </a>
        </div>
    </nav>

    <div class="container mt-5">

        <div class="card-box">

            <div class="d-flex justify-content-between mb-4">
                <h2>Daftar Servis Kendaraan</h2>

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