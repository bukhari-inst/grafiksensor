<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grafik Sensor</title>

    <!--panggil file bootstrap -->
    <!-- Custom styles for this template-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery-3.4.0.min.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="jquery-latest.js"></script>

    <!-- memanggil data grafik -->
    <script type="text/javascript">
        var refreshid = setInterval(function() {
            $('#responsecontainer').load('data.php');
        }, 1000);
    </script>

</head>

<body>

    <!-- tempat untuk tampilan grafik -->
    <div class="container" style="text-align: center;">
        <h3>Grafik Sensor Secara Realtime</h3>
        <p>(Data yang ditampilkan adalah 5 data terakhir)</p>
    </div>

    <!-- div untuk grafik -->
    <div class="container">
        <div class="container" id="responsecontainer" style="width: 100%; text-align: center;"></div>
    </div>
    </div>


    <!-- pemanis untuk menampilkan gambar -->
    <!-- <div class="container" style="text-align: center;">
        <img src="assets/img/kodingperangkat.png">
    </div> -->

</body>
</html>