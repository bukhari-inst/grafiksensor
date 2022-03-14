<?php 
	//koneksi database
	$konek = mysqli_connect("localhost","root", "", "grafiksensor");

	//baca data dari tb_sensor
	//baca informasi tanggal untuk all data - x di grafik
	//$tanggal	= mysqli_query($konek, "SELECT tanggal FROM tb_sensor ORDER BY ID ASC");
	//baca informasi suhu u/ semua data - y di grafik
	//$suhu		= mysqli_query($konek, "SELECT suhu FROM tb_sensor ORDER BY ID ASC");

 ?>

 <!-- tampilan grafik -->
 <div class="panel panel-primary">
 	<div class="panel-heading">
 		Grafik Sensor
 	</div>
 </div>
 
 	<div class="panel-body">
 		<!-- canva untuk grafik -->
 		<canvas id ="myChart"></canvas>

 		<!-- gambar grafik -->
 		<script type ="text/javascript">
 			//baca Id canva tempat grafik diletakkan
 			var canvas = document.getElementById('myChart');
 			//letakkan data untuk tanggal dan suhu grafik
 			var data = {
 				labels : [
 					<?php 
 						while($data_tanggal = mysqli_fetch_array($tanggal))
 						{
 							echo '"'.$data_tanggal['tanggal'].'",' ;
 						}

 					 ?>
 				] , 
 				datasets : [{
 					label : "suhu",
 					data : [
 						<?php 
 							while($data_suhu = mysqli_fetch_array($suhu))
 							{
 								echo $data_suhu['suhu'].',' ;
 							}
 						?>
 					]
 				}]
 			};


 			//option grafik
 			var option = {
 				showLines : true,
 				animation : {duration : 0}
 			};

 			//cetak grafik kedalam canvas
 			var myLineChart = Chart.Line(canvas,{
 				data : data,
 				options : options
 			});


 		</script>
 	</div>
 </div>