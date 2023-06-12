<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Poppins';
            background: linear-gradient(to right bottom, #ffe4f3, #ffbeef);
            height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
    margin-top: 0px;
    max-width: 900px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    justify-content: center;
}

.title-container {
    align-items: center;
    background-color: #ffe4f3;
    padding: 20px;
    border-radius: 30px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    width: fit-content;
}

        h1 {
            align-items: center;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            color: #5f0f40;
            }
        h2 {
            margin-top: 10px;
            color: #5f0f40;
            font-size: 20px;
            line-height: normal;
        }
        .table {
            line-height: normal;
            margin-top: 10px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .table thead {
            background-color: #ffe4f3;
        }
        .table th {
            color: #5f0f40;
            font-weight: bold;
            text-align: center;
            vertical-align: middle;
            padding: 12px;
        }
        .table td {
            background-color: #efcfe3;
            color: #000;
            text-align: center;
            vertical-align: middle;
            padding: 12px;
        }
        .table .btn {
            margin-right: 5px;
        }  

        .btn-info {
            border-radius: 20px;
            color: #fff;
            font-size: 18px;
            background-color: #b392ac;
            border-color: #b392ac;
        }
        
        .btn-danger {
            border-radius: 20px;
            color: #fff;
            font-size: 18px;
            background-color: #5f0f40;
            border-color: #5f0f40;
        }
        
        .btn-warning {
            border-radius: 20px;
            color: #fff;
            font-size: 15px;
        }

        .btnDelete {
            border-radius: 20px;
            color: #fff;
            font-size: 15px;
            background-color: #f72585;
            border-color: #f72585;
        }
    </style>
</head>
<body>
    <a href="<?= base_url('logout') ?>" class="btn btn-danger" style="position: absolute; top: 20px; right: 20px;">Logout</a>
    <a href="<?= base_url('/buku/create') ?>" class="btn btn-info" style="position: absolute; top: 20px; left: 20px;">Tambah Data</a>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title-container">
                    <h1>Welcome to e-Brary</h1>
                </div>
            </div>
        </div>

        <!-- create list of books -->
        <div class="row">
            <div class="col-12">
                <h2>Daftar Buku</h2>
            </div>

            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($buku as $key => $value): ?>
                            <tr>
                                <td><?= $value['judul'] ?></td>
                                <td><?= $value['penulis'] ?></td>
                                <td><?= $value['penerbit'] ?></td>
                                <td><?= $value['tahun_terbit'] ?></td>
                                <td>
                                    <a href="<?= base_url('/buku/' . $value['id'] . '/edit') ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="<?= base_url('/buku/' . $value['id'] . '/delete') ?>" method="POST" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-sm btn-danger btnDelete">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
