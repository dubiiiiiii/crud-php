<?php
$host = '';
$user = "root";
$pass = "";
$db = "db_data";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    # code...
    die("tidak bisa koneksi ke database");
}
$nama_wil = "";
$summ = "";
$latitude = "";
$longtitude = "";
$sukses = "";
$error = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'delete') {
    $id = $_GET['id'];
    $sql1 = "delete from data where id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1) {
        $sukses = "Berhasil Hapus Data";
    } else {
        $error = "Tidak dapat dihapus!";
    }
}


if ($op == 'edit') {
    $id = $_GET['id'];
    $sql1 = "select * from data where id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);
    $r1 = mysqli_fetch_array($q1);

    $nama_wil = $r1['nama_wil'];
    $summ = $r1['summ'];
    $latitude = $r1['latitude'];
    $longtitude = $r1['longtitude'];

    if ($nama_wil == '') {
        $error = "Data tidak ditemukan";
    }
}

// create
if (isset($_POST['submit'])) {
    $nama_wil = $_POST['nama_wil'];
    $summ = $_POST['summ'];
    $latitude = $_POST['latitude'];
    $longtitude = $_POST['longtitude'];

    if ($nama_wil && $summ && $latitude && $longtitude) {
        // update
        if ($op == 'edit') {
            $sql1 = "update data set nama_wil='$nama_wil', summ='$summ', latitude='$latitude',longtitude='$longtitude'  where id = '$id'";
            $q1 = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data telah berubah!";
            } else {
                $error = "Data tidak dapat dirubah!";
            }
            // delete
        } else {
            $sql1 = "insert into data(nama_wil, summ, latitude, longtitude) values('$nama_wil','$summ','$latitude', '$longtitude')";
            $q1 = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "berhasil input data!";
            } else {
                $error = "gagal input data!";
            }
        }
    } else {
        $error = "Please input data!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Lokasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <ul class="nav nav-tabs text-bg-dark justify-content-center">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="main.php">Main</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="index.php">Data User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="data.php">Data Lokasi</a>
            </li>
        </ul>
    </div>
    <div class="bd-1">
        <div class="mx-auto">
            <!-- input data -->
            <div class="card">
                <div class="card-header">
                    Create / Edit Data
                </div>
                <div class="card-body">
                    <!-- error msg -->
                    <?php
                    if ($error) {
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                    <?php
                        header("refresh:2;url=data.php");
                    }
                    ?>

                    <!-- succed msg -->
                    <?php
                    if ($sukses) {
                    ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                    <?php
                        header("refresh:5;url=data.php");
                    }
                    ?>
                    <form action="" method="POST">
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Lokasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_wil" id="nama_wil"
                                    value="<?php echo $nama_wil ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-2 col-form-label">Detail Lokasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="summ" id="summ"
                                    value="<?php echo $summ ?>">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="latitude" class="col-sm-2 col-form-label">Latitude</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="latitude" id="latitude"
                                    value="<?php echo $latitude ?>">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="longtitude" class="col-sm-2 col-form-label">longtitude</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="longtitude" id="longtitude"
                                    value="<?php echo $longtitude ?>">
                            </div>
                        </div>

                        <!-- button -->
                        <div class="col-12">
                            <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>

            <!-- output data. -->
            <div class="card ">
                <div class="card-header text-white bg-secondary">
                    Data Lokasi
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Wilayah</th>
                                <th scope="col">Penjelasan</th>
                                <th scope="col">Latitude</th>
                                <th scope="col">longtitude</th>
                                <th scope="col">Option</th>
                            </tr>
                        <tbody>
                            <?php
                            $sql2 = "select * from data order by id asc";
                            $q2 = mysqli_query($koneksi, $sql2);
                            $urut = 1;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $id = $r2['id'];
                                $nama_wil = $r2['nama_wil'];
                                $summ = $r2['summ'];
                                $latitude = $r2['latitude'];
                                $longtitude = $r2['longtitude'];

                            ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $urut++ ?>
                                </th>
                                <td scope="row">
                                    <?php echo $nama_wil ?>
                                </td>
                                <td scope="row">
                                    <?php echo $summ ?>
                                </td>
                                <td scope="row">
                                    <?php echo $latitude ?>
                                </td>
                                <td scope="row">
                                    <?php echo $longtitude ?>
                                </td>

                                <td scope="row">
                                    <a href="data.php?op=edit&id=<?php echo $id ?>"><button type="button"
                                            class="btn btn-warning">Edit</button></a>
                                    <a href="data.php?op=delete&id=<?php echo $id ?>"
                                        onclick="return confirm('Delete ?')"><button type="button"
                                            class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>
                            <?php

                            }
                            ?>
                        </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>