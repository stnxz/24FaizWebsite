<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header mb-4">
                    <h2>Tambah Pesanan Baru</h2>
                </div>
                <form action="add_process.php" method="post">
                <div class="form-group">
                        <label>ID</label>
                        <input type="text" name="id" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="item" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Total Pesanan</label>
                        <input type="text" name="total" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Harga Barang</label>
                        <input type="text" name="price" class="form-control" required>
                    </div>
                    <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>