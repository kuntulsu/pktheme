<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<hr>
<div class="container mt-5">
	<h4 class="text-center">Transparansi APBDes</h4>
<div class="row mt-4">
	<?php foreach ($data_widget as $subdata_name => $subdatas): ?>

		<!-- new apbd -->
		<div class="col-md-4">
			<div class="card text-center">
				<div class="card-header"><?= ($subdatas['laporan'])?></div>
				<div class="card-body">
					<small class="text-muted text-center">Realisasi | Anggaran</small>
					<?php foreach ($subdatas as $key => $subdata): ?>
				<?php if($subdata['judul'] != NULL and $key != 'laporan' and $subdata['realisasi'] != 0 or $subdata['anggaran'] != 0): ?>
					<div class="progress-group"><?= $subdata['judul']; ?><br>
						<b>Rp. <?= number_format($subdata['realisasi']); ?> | Rp. <?= number_format($subdata['anggaran']); ?></b>
						<div class="progress progress-bar-striped" align="right" style="background-color: #27c8a2"><small></small>
							<div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" style="width: <?= $subdata['persen'] ?>%" aria-valuenow="<?= $subdata['persen'] ?>" aria-valuemin="0" aria-valuemax="100"><span><?= $subdata['persen'] ?> %</span></div>
						</div>
					</div>
					<hr>
				<?php endif; ?>
			<?php endforeach; ?>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>
</div>
