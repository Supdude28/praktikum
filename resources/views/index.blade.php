<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/icons/bootstrap-icons.min.css">
</head>
<body class="bg-body-secondary">
    <div class="container">
        <div class="card shadow mt-4">
            <div class="card-header d-flex text-bg-primary bg-gradient justify-content-between">
                <h4 class="card-title">Data</h4>
                <a href="form" class="btn btn-light">
                    <i class="bi bi-plus-circle-fill"></i> Tambah
                </a>
            </div>
            <div class="card-body">
                <table class="table table-sm table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>NISN</th>
                            <th>NAMA</th>
                            <th>ALAMAT</th>
                            <th >NO TELP</th>
                            <th>KODE KELAS</th>
                            <th>EDIT/HAPUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>21</td>
                            <td>Abah</td>
                            <td>Pwk</td>
                            <td>0828</td>
                            <td>lab</td>
                            <td >
                                <a href="form" class="btn btn-success btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="index" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>