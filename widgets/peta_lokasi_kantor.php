

<hr>
<div class="container">
	<div class="row">
		<h4 class="text-center mb-5">Lokasi Kantor Administrasi Desa</h4>
		<div class="col-lg-12 mb-5" id="widget_map" style="height: 400px;">

		<!-- <iframe class="w-100" style="height : 400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=<?=$data_config['lng']?>%2C<?=$data_config['lat']?>%2C<?=$data_config["lng"] ?>%2C<?=$data_config["lat"]?>&amp;layer=mapnik&amp;marker=<?=$data_config['lat'] ?>%2C<?=$data_config['lng'] ?>"></iframe><br/> -->
		</div>
		<div class="col-lg-12">
			<img class="w-100 d-block h-100" src="<?php echo base_url("assets/images/bdpk.jpg") ?>" alt="">
		</div>
	</div>
</div>
<script>
	var coordinates = [<?=$data_config['lat'] ?>,<?=$data_config['lng']?>]
	var mapOptions = {
		center: coordinates,
		zoom: 16,
	}
	var map = new L.map("widget_map", mapOptions);
	var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
	L.marker(coordinates).addTo(map);
	map.addLayer(layer);

</script>