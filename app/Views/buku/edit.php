<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Poppins';
            background: linear-gradient(to right bottom, #ffe4f3, #ffbeef);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center; /* Menengahkan form secara vertikal */
            margin: 0;
            padding: 0;
        }

        .form-container {
            max-width: 500px;
            background-color: #ffe4f3;
            padding: 30px;
            border-radius: 50px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            margin-bottom: 20px;
            color: #5f0f40;
        }

        .form-container .form-label {
            color: #5f0f40;
            font-weight: bold;
        }

        .form-container .form-control {
            border-radius: 8px;
        }

        .form-container .btn-primary {
            border-radius: 8px;
            background-color: #5f0f40;
            border-color: #5f0f40;
        }

        .form-container .btn-primary:hover {
            background-color: #ffbeef;
            border-color: #ffbeef;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Edit Data Buku</h2>
        <form action="<?= base_url('/buku/'. $buku['id'] . '/edit') ?>" method="post">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $buku['judul'] ?>">
            </div>
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $buku['penulis'] ?>">
            </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $buku['penerbit'] ?>">
            </div>
            <div class="mb-3">
                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?= $buku['tahun_terbit'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
