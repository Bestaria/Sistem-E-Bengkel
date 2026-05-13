<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Kendaraan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #e0e7ff, #f8fafc);
            font-family: 'Segoe UI', sans-serif;
        }

        .form-box {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
        }
    </style>

</head>

<body>

    <div class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="form-box">

                    <h2 class="mb-4">Tambah Data Kendaraan</h2>

                    <form action="/kendaraan/store" method="POST">

                        @csrf

                        <div class="mb-3">
                            <label>Plat Nomor</label>
                            <input type="text" name="plat_nomor" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Nama Pemilik</label>
                            <input type="text" name="nama_pemilik" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Merk Kendaraan</label>
                            <input type="text" name="merk_kendaraan" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Keluhan</label>
                            <textarea name="keluhan" class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Simpan
                        </button>

                        <a href="/kendaraan" class="btn btn-secondary">
                            Kembali
                        </a>

                    </form>

                </div>

            </div>

        </div>

    </div>

</body>

</html>