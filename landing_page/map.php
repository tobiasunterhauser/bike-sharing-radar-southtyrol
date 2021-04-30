<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map</title>
    <link rel="icon" href="https://www.iconexperience.com/_img/g_collection_png/standard/512x512/bicycle.png" type="image" sizes="16x16">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style>
        #map{position: absolute; top: 0; bottom: 0; left: 0; right: 0;}
    </style>
</head>
<body>
    <div id="map"></div>
    <script>
        var map = L.map('map').setView([0, 0], 4);

        L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=rtwXzaPknPj5CuAX8Sto', {attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',}).addTo(map);
        var marker = L.marker([46.4907, 11.3398]).addTo(map);
        marker.bindPopup("<?php echo $_POST["search"] ?>").openPopup();
    </script>
</body>
</html>