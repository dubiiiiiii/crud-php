<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        #map {
            width: 100vh;
            height: 500px;
        }

        h3 {
            text-align: center;
        }
    </style>

    <title>Get-Coordinate</title>
</head>

<body>
    <h3>Get - Coordinate</h3>
    <div class="row">
        <div class="col-sm-6">
            <div id="map"></div>
        </div>

        <div class="col-sm-5">
            <div class="form-grup">
                <p>latitude</p>
                <input type="text" class="form-control" id="latitude" name="latitude">
                <p>longtitude</p>
                <input type="text" class="form-control" id="longitude" name="longitude">
            </div>
        </div>
    </div>
    <script>
        var map = L.map('map').setView([51.505, -0.09], 13);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        // get coordinate code.
        var latInput = document.querySelector("[name=latitude]");
        var lngInput = document.querySelector("[name=longitude]");

        var curLocation = [51.505, -0.09];

        map.attributionControl.setPrefix(false);

        var marker = new L.marker(curLocation, {
            draggable: 'true'
        });

        marker.on('dragend', function (event) {
            var position = marker.getLatLng();
            marker.setLatLng(position, {
                draggable: 'true'
            }).bindPopup(position).update();
            $("#Latitude").val(position.lat);
            $("#Longitude").val(position.lng).keyup();
        });

        map.addLayer(marker);
    </script>
</body>

</html>