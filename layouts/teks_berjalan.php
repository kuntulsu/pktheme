<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div>

	<?php foreach ($teks_berjalan AS $teks): ?>
	<span style="font-family: 'sans';color:#fff;" class="border-bottom border-danger">
		<small class="bg-danger" id="datetime<?php echo $teks['id'] ?>">
			
		</small>
		<script>
				d = new Date("<?php echo $teks['updated_at'] ?>")
				let text = d.toLocaleString("id-ID",{dateStyle:"medium"});
				document.getElementById("datetime<?php echo $teks['id'] ?>").innerHTML = "&nbsp;"+text+"&nbsp;";
			</script>
		<small class="font-italic p-1">
			<?= $teks['teks']?>
		<?php if ($teks['tautan']): ?>
			<a class="text-sm" href="<?= $teks['tautan'] ?>" rel="noopener noreferrer" title="Baca Selengkapnya"><?= $teks['judul_tautan']?></a>
		<?php endif; ?>
		</small>
	</span>
<?php endforeach; ?>

</div>