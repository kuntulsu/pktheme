<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="single_page_area">

	<div class="single_page_area">
		<h2>Statistik Data Penduduk Berdasarkan RT</h2>

		<div class="table-responsive">
		<table id="dpt" class="table table-bordered table-striped">
		<thead>
		<tr>
			<th class="text-center">RW</th>
			<th class="text-center">RT</th>
			<th class="text-center">Nama</th>

		</tr>
		</thead><?php
		if(count($main) > 0){ ?>
			<tbody><?php
			foreach($main as $data){ ?>
				<tr>
					<td class="text-center"><?= strtoupper($data["rw"]) ?></td>
					<td class="text-center"><?= strtoupper($data["rt"]) ?></td>
					<td class="text-left"><?= strtoupper($data["nama"]) ?></td>

				</tr><?php
			} ?>
			</tbody>
			<tr>
				<th colspan="3" class="text-right">TOTAL</th>
				<th class="text-right"><?= $total["total_warga"] ?></th>
				<th class="text-right"><?= $total["total_warga_l"] ?></th>
				<th class="text-right"><?= $total["total_warga_p"] ?></th>
			</tr><?php
		} else { ?>
			<tr><td colspan=6 class="text-center">Daftar masih kosong</td></tr><?php
		} ?>
		</table>
		</div>
	</div>
</div> <!-- .list-frame -->
