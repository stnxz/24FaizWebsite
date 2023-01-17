<?php
include "database.php";
$query = "SELECT * FROM barang WHERE id_barang='" . $_GET["id_barang"] . "'";
$result = mysqli_query($db_connect, $query);
$customer = mysqli_fetch_assoc($result);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>

<body>
    
    <div class="container mt-4">
        <div class="page-header mb-4">
            <h2>Edit Pesanan</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="edit_process.php" method="post">
                    <input type="hidden" name="id_barang" value="<?php echo $_GET["id_barang"]; ?>" class="form-control" required>
                    <div class="form-group">
                        <label for="exampleInputItem">ID Barang</label>
                        <input type="text" name="id" class="form-control" value="<?php echo $customer["id_barang"] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputItem">Nama Barang</label>
                        <input type="text" name="item" class="form-control" value="<?php echo $customer["nama_barang"] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleTotalPesanan">Total Pesanan</label>
                        <input type="text" name="total" class="form-control" value="<?php echo $customer["total_pesanan"] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleHargaBarang">Harga Barang</label>
                        <input type="text" name="price" class="form-control" value="<?php echo $customer["harga_barang"] ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>