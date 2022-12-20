<?php
$host = 'localhost';
$user = "root";
$pass = "";
$db = "db_data";

$koneksi = mysqli_connect($host, $user, $pass, $db);

$hasil = mysqli_query($koneksi, 'SELECT * FROM data');

$data = [];
while ($d = mysqli_fetch_assoc($hasil)) {
    $data[] = $d;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <style>
        #map {
            /* padding-top: 10px; */

            margin-top: 40px;
            width: 100%;
            height: 550px;
        }
    </style>
</head>

<body>
    <div>
        <ul class="nav nav-tabs text-bg-dark justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="main.php">Main</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Data User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="data.php">Data Lokasi</a>
            </li>
        </ul>
    </div>

    <div>
        <div id="map"></div>
    </div>

    <script>
        getLocation();

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            }
        }

        function showPosition(position) {

            let lat = position.coords.latitude;
            let lng = position.coords.longitude;

            var map = L.map('map', {
                center: [lat, lng],
                zoom: 13
            });

            let data = <?php echo json_encode($data); ?>;

            data.map(function (d) {
                L.marker([d.latitude, d.longtitude]).addTo(map).bindPopup(`
                    <b>${d.nama_wil}</b>
                    <p>${d.summ}</p>
                `);
            })

            console.log(data);

            // L.marker([lat, lng]).addTo(map);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png?{foo}', { foo: 'bar', attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors' }).addTo(map);

        } 
    </script>


</body>

</html>