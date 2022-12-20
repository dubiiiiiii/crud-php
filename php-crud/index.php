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
$nama = "";
$email = "";
$password = "";
$sukses = "";
$error = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'delete') {
    $id = $_GET['id'];
    $sql1 = "delete from user where id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1) {
        $sukses = "Berhasil Hapus Data";
    } else {
        $error = "Tidak dapat dihapus!";
    }
}


if ($op == 'edit') {
    $id = $_GET['id'];
    $sql1 = "select * from user where id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);
    $r1 = mysqli_fetch_array($q1);

    $nama = $r1['nama'];
    $email = $r1['email'];
    $password = $r1['password'];

    if ($nama == '') {
        $error = "Data tidak ditemukan";
    }
}

// create
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($nama && $nama && $password) {
        // update
        if ($op == 'edit') {
            $sql1 = "update user set nama='$nama', email='$email', password='$password' where id = '$id'";
            $q1 = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data telah berubah!";
            } else {
                $error = "Data tidak dapat dirubah!";
            }
            // delete
        } else {
            $sql1 = "insert into user(nama, email, password) values('$nama','$email','$password')";
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
    <title>Data User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <ul class="nav nav-tabs text-bg-dark justify-content-center">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="main.php">Main</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Data User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="data.php">Data Lokasi</a>
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
                        header("refresh:5;url=index.php");
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
                        header("refresh:5;url=index.php");
                    }
                    ?>
                    <form action="" method="POST">
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" id="nama"
                                    value="<?php echo $nama ?>">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email" id="email"
                                    value="<?php echo $email ?>">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password" id="password"
                                    value="<?php echo $password ?>">
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
            <div class="card">
                <div class="card-header text-white bg-secondary">
                    Data User
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Option</th>
                            </tr>
                        <tbody>
                            <?php
                            $sql2 = "select * from user order by id desc";
                            $q2 = mysqli_query($koneksi, $sql2);
                            $urut = 1;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $id = $r2['id'];
                                $nama = $r2['nama'];
                                $email = $r2['email'];
                                $password = $r2['password'];

                            ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $urut++ ?>
                                </th>
                                <td scope="row">
                                    <?php echo $nama ?>
                                </td>
                                <td scope="row">
                                    <?php echo $email ?>
                                </td>
                                <td scope="row">
                                    <?php echo md5($password) ?>
                                </td>

                                <td scope="row">
                                    <a href="index.php?op=edit&id=<?php echo $id ?>"><button type="button"
                                            class="btn btn-warning">Edit</button></a>
                                    <a href="index.php?op=delete&id=<?php echo $id ?>"
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