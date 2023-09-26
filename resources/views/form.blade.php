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
                <a href="index" class="btn btn-light">
                    <i class="bi bi-caret-left-square-fill"></i>&nbsp;Kembali
                </a>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Nisn</label>
                        <input type="text" class="form-control" name="nisn" placeholder="Nisn">
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama">
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">No Telp</label>
                        <input type="text" class="form-control" name="telp" placeholder="No Telp">
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Kode Kelas</label>
                        <input type="text" class="form-control" name="kode" placeholder="Kode Kelas">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success" type="reset"><i class="bi bi-x-square-fill"></i> Batal</button>
                        <button class="btn btn-primary" type="reset">
                            <i class="bi bi-save-fill"></i>&nbsp;Simpan 
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>