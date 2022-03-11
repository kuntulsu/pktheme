<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="row">
<div class="text-center">
	
	<div class="card text-white bg-info w-100">
		<div class="card-header">
			<h6>Data Statistik Penyebaran Covid-19 Desa Pecangaan Kulon</h6>
		</div>
		<div class="card-body">
			<div class="row p-2">
				<div class="col-md-6 mb-3 mr-3 ml-3">
					<div id="card-status" class="card text-dark">
						<div class="card-header">
							Status
						</div>
						<div class="card-body">
							<div id="status">
								<div class="spinner-border" role="status">
									<span class="sr-only">Loading...</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 mb-3 mr-3 ml-3">
					<div class="card bg-warning">
						<div class="card-header">
							Kasus Aktif
						</div>
						<div class="card-body">
							<div id="kasus_aktif">
								<div class="spinner-border" role="status">
									<span class="sr-only">Loading...</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 mb-3 mr-3 ml-3">
					<div class="card bg-success">
						<div class="card-header">
							Sembuh
						</div>
						<div class="card-body">
							<div id="kasus_sembuh">
								<div class="spinner-border" role="status">
									<span class="sr-only">Loading...</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 mb-3 mr-3 ml-3">
					<div class="card bg-danger">
						<div class="card-header">
							Meninggal
						</div>
						<div class="card-body">
							<div id="kasus_meninggal">
								<div class="spinner-border" role="status">
									<span class="sr-only">Loading...</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<small class="text-white">Sumber : Dinas Kesehatan Kabupaten Jepara</small>
				</div>
		</div>
	</div>
</div>
</div>

<script>
	$(document).ready(function(){
		var req = $.get("https://api.pecangaankulon.id",function(req){
			var data = req;
			if(data['data']['status'] == "low"){
				$("#card-status").addClass("bg-success").removeClass("text-dark")
				$("#status").html(data['data']['status'])
			}else if(data['data']['status'] == "medium"){
				$("#card-status").addClass("bg-warning").removeClass("text-dark")
				$("#status").html(data['data']['status'])
			}else if(data['data']['status'] == "high"){
				$("#card-status").addClass("bg-danger").removeClass("text-dark")
				$("#status").html(data['data']['status'])
			}
			$("#kasus_aktif").html(data["data"]["saat_ini"])
			$("#kasus_sembuh").html(data['data']["sembuh"])
			$("#kasus_meninggal").html(data['data']["meninggal"])
		
				
		});
		
	})
</script>