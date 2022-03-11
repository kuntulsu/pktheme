<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php if ($single_artikel["id"]) : ?>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
			<div class="single_page_area" id="<?= 'artikel-'.$single_artikel['judul']?>">
		<div style="margin-top:0px;">

		</div>
		<div class="single_category wow fadeInDown">
		</div>
		<div id="printableArea">
			<div class="post_commentbox">
				<h4><?php echo $single_artikel['judul'] ?></h4>
				<span class="meta_date">
					<button class="btn mb-3 btn-warning text-white btn-disabled btn-sm btn-rounded"><i class="fas fa-calendar"></i>&nbsp;<span id="tgl_post"></span></button>

					<button class="btn mb-3 btn-rounded btn-sm btn-secondary text-white btn-disabled"><i class="fa fa-tag"></i>&nbsp;<?= $single_artikel['kategori']?></button>
                    <button class="btn mb-3 btn-rounded btn-sm btn-success text-white btn-disabled"><i class="fa fa-eye"></i>&nbsp;<?= hit($single_artikel['hit']) ?></button>
                    <button class="btn mb-3 btn-rounded btn-sm btn-info text-white btn-disabled"><i class="fa fa-pencil"></i>&nbsp;<?= $single_artikel['owner']?></button>
				</span>
				<!-- <div class="fb-like" data-href="<?= site_url('artikel/'.buat_slug($single_artikel['id']))?>" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div> -->
			</div>
			<div class="single_page_content mt-4" style="margin-bottom:10px;">
				<?php if ($single_artikel['id_kategori'] == 1000) : ?>
					<div class="row">
						<div class="col-md-4 col-xs-12">
							<div class="info-box bg-info">
								<span class="info-box-icon"><i class="fa fa-calendar"></i></span>
								<div class="info-box-content">
									<span class="info-box-text">Tanggal & Jam</span>
									<span class="progress-description">
										<?= tgl_indo2($detail_agenda['tgl_agenda']) ?>
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-xs-12">
							<div class="info-box bg-success box-primary-shadow">
								<span class="info-box-icon"><i class="fa fa-map-marker"></i></span>
								<div class="info-box-content">
									<span class="info-box-text">Lokasi</span>
									<span class="progress-description">
										<?= $detail_agenda['lokasi_kegiatan'] ?>
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-xs-12">
							<div class="info-box bg-danger">
								<span class="info-box-icon"><i class="fa fa-bullhorn"></i></span>
								<div class="info-box-content">
									<span class="info-box-text">Koordinator</span>
									<span class="progress-description">
										<?= $detail_agenda['koordinator_kegiatan'] ?>
									</span>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<div class="sampul">
					<?php if ($single_artikel['gambar']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar'])): ?>
						<img class="col-md-12" src="<?=AmbilFotoArtikel($single_artikel['gambar'],"sedang") ?>" alt="">
					<?php endif;?>
				</div>
				<div class="teks"><?= $single_artikel["isi"]?></div>
				<?php if ($single_artikel['dokumen']!='' and is_file(LOKASI_DOKUMEN.$single_artikel['dokumen'])): ?>
					<p>Download Lampiran:<br><a href="<?= base_url().LOKASI_DOKUMEN.$single_artikel['dokumen']?>" title=""><?= $single_artikel['link_dokumen']?></a></p>
				<?php endif; ?>
				<?php if ($single_artikel['gambar1']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar1'])): ?>
					<div class="sampul">
						<a data-fancybox="gallery" href="<?= AmbilFotoArtikel($single_artikel['gambar1'],'sedang')?>">
							<img width="270px" style="float:left; margin:0 8px 4px 0;" src="<?= AmbilFotoArtikel($single_artikel['gambar1'],'sedang')?>"/>
						</a>
					</div>
				<?php endif; ?>
				<div class="row justify-content-center">
				<?php if ($single_artikel['gambar2']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar2'])): ?>
					<div class="sampul">
						<a data-fancybox="gallery" href="<?= AmbilFotoArtikel($single_artikel['gambar2'],'sedang')?>">
							<img class="col-md-6" style="float:left; margin:0 8px 4px 0;" src="<?= AmbilFotoArtikel($single_artikel['gambar2'],'sedang')?>"/>
						</a>
					</div>
				<?php endif; ?>
				<?php if ($single_artikel['gambar3']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar3'])): ?>
					<div class="sampul">
						<a data-fancybox="gallery" href="<?= AmbilFotoArtikel($single_artikel['gambar3'],'sedang')?>">
							<img class="col-md-6" style="float:left; margin:0 8px 4px 0;" src="<?= AmbilFotoArtikel($single_artikel['gambar3'],'sedang')?>"/>
						</a>
					</div>
				<?php endif; ?>
				</div>
			</div>
		</div>
		<!-- <div class="container">
				<a name="fb_share" href="http://www.facebook.com/sharer.php?u=<?= "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>" onclick='window.open(this.href,"popupwindow","status=0,height=500,width=500,resizable=0,top=50,left=100");return false;' rel='noopener noreferrer' target='_blank' title='Facebook'><button type="button" class="btn btn-primary btn-sm btn-rounded"><i class="fab fa-facebook-square fa-2x"></i></button></a>
				<a href="http://twitter.com/share?source=sharethiscom&text=<?= htmlspecialchars($single_artikel["judul"]);?>%0A&url=<?= "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI].'&via=ariandii'?>" class="twitter-share-button" onclick='window.open(this.href,"popupwindow","status=0,height=500,width=500,resizable=0,top=50,left=100");return false;' rel='noopener noreferrer' target='_blank' title='Twitter'><button type="button" class="btn btn-info btn-sm btn-rounded"><i class="fab fa-twitter fa-2x"></i></button></a>
				<a href="mailto:?subject=<?= htmlspecialchars($single_artikel["judul"]);?>&body=<?= potong_teks($single_artikel["isi"], 1000);?> ... Selengkapnya di <?= "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>" title='Email'><button type="button" class="btn btn-danger btn-sm btn-rounded"><i class="fa fa-envelope fa-2x"></i></button></a>
				<a href="https://telegram.me/share/url?url=<?= "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>&text=<?= htmlspecialchars($single_artikel["judul"]);?>%0A" onclick='window.open(this.href,"popupwindow","status=0,height=500,width=500,resizable=0,top=50,left=100");return false;' rel='noopener noreferrer' target='_blank' title='Telegram'><button type="button" class="btn btn-dark btn-sm btn-rounded"><i class="fab fa-telegram fa-2x"></i></button></a>
				<a href="#" onclick="printDiv('printableArea')" title='Cetak Artikel'><button type="button" class="btn btn-warning btn-sm btn-rounded"><i class="fa fa-print fa-2x"></i></button></a>
				<a href="https://api.whatsapp.com/send?text=<?= htmlspecialchars($single_artikel["judul"]);?>%0A<?= "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>" onclick='window.open(this.href,"popupwindow","status=0,height=500,width=500,resizable=0,top=50,left=100");return false;' rel='noopener noreferrer' target='_blank' title='Whatsapp'><button type="button" class="btn btn-success btn-sm btn-rounded"><i class="fab fa-whatsapp fa-2x"></i></button></a>
		</div> -->
	</div>
	<!-- <?php if ($single_artikel['boleh_komentar'] == 1): ?>
		<div class="fb-comments" data-href="<?= site_url('artikel/'.buat_slug($single_artikel))?>" width="100%" data-numposts="5"></div>
	<?php endif; ?>
	<div class="contact_bottom">
		<?php if (!empty($komentar)): ?>
			<div class="contact_bottom">
				<div class="box-body">
					<?php foreach ($komentar AS $data): ?>
						<table class="table table-bordered table-striped dataTable table-hover">
							<thead class="bg-gray disabled color-palette">
								<tr>
									<th><i class="fa fa-comment"></i> <?= $data['owner']?></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<font color='green'><small><?= tgl_indo2($data['tgl_upload'])?></small></font><br/><?= $data['komentar']?>
									</td>
								</tr>
							</tbody>
						</table>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>
	</div> -->
	<div class="form-group group-komentar mt-5" id="kolom-komentar">
		<?php if ($single_artikel['boleh_komentar'] == 1): ?>
			<div class="box box-default">
				<div class="box-header">
					<h2 class="box-title">Kirim Komentar</h2>
				</div><hr />
				<?php
					$notif = $this->session->flashdata('notif');
					$label = ($notif['status'] == -1) ? 'label-danger' : 'label-info';
				?>
				<?php if ($notif): ?>
					<div class="box-header <?= $label; ?>"><?= $notif['pesan']; ?></div>
				<?php endif; ?>
				<div class="contact_bottom">
					<form class="contact_form form-komentar" id="validasi" name="form" action="<?= site_url("add_comment/$single_artikel[id]"); ?>" method="POST" onSubmit="return validasi(this);">
						<table width="100%">
							<tr class="komentar nama">
								<td width="20%">Nama</td>
								<td>
									<input class="form-group form-control required" type="text" name="owner" maxlength="100" placeholder="ketik di sini" value="<?= $notif['data']['owner']; ?>">
								</td>
							</tr>
							<tr class="komentar alamat">
								<td>No. Hp</td>
								<td>
									<input class="form-group form-control number required" type="text" name="no_hp" maxlength="15" placeholder="ketik di sini" value="<?= $notif['data']['no_hp']; ?>">
								</td>
							</tr>
							<tr class="komentar alamat">
								<td>E-mail</td>
								<td>
									<input class="form-group form-control email" type="text" name="email" maxlength="100" placeholder="email@gmail.com" value="<?= $notif['data']['email']; ?>">
								</td>
							</tr>
							<tr class="komentar pesan">
								<td valign="top">Isi Pesan</td>
								<td>
									<textarea class="required w-100" name="komentar"><?= $notif['data']['komentar']; ?></textarea>
								</td>
							</tr>
							<tr class="captcha"><td>&nbsp;</td>
								<td>
									<img id="captcha" src="<?= base_url('securimage/securimage_show.php'); ?>" alt="CAPTCHA Image"/>
									<a href="#" onclick="document.getElementById('captcha').src = '<?= base_url()."securimage/securimage_show.php?"?>' + Math.random(); return false" style="color: #000000;">[ Ganti gambar ]</a>
								</td>
							</tr>
							<tr class="captcha_code">
								<td>&nbsp;</td>
								<td>
									<input type="text" name="captcha_code" class="required form-control" maxlength="6" value="<?= $notif['data']['captcha_code']; ?>"/> Isikan kode di gambar
								</td>
							</tr>
							<tr class="submit">
								<td>&nbsp;</td>
								<td><input class="btn btn-primary btn-rounded" type="submit" value="Kirim"></td>
							</tr>
							<tr class="submit">
								<td><br><br></td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		<?php else: ?>
			<span class='info'></span>
		<?php endif; ?>
	</div>
</div>
			<?php else: ?>
				<div class="artikel col-md-8" id="artikel-blank">
						<div class="container error_page_content">
							<h1>404</h1>
							<h2>Maaf</h2>
							<h3>Halaman ini belum tersedia atau sedang dalam perbaikan</h3>
							<p class="wow fadeInLeftBig">Silahkan kembali lagi ke halaman <a href="<?= site_url(); ?>first">Beranda</a></p>
						</div>
				</div>
			<?php endif; ?>
			<div class="col-md-4">
				<?php $this->load->view("$folder_themes/partials/corona-widget.php") ?>
			</div>
		</div>
	</div>

	<script>
						d = new Date("<?=$single_artikel['tgl_upload']?>")
						let dates = d.toLocaleString("id-ID",{dateStyle:"medium"});
						$("#tgl_post").html(dates);
					</script>
