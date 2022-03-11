<!-- Footer -->
<footer class="text-center text-lg-start bg-secondary text-white mt-5">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
 
    <!-- Left -->

    <!-- Right -->
    <div style="margin:0 auto">
      <a href="https://facebook.com/pecangaan.kulon.5" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>

      <a href="https://instagram.com/pemdespecangaankulon/" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://www.youtube.com/channel/UC3M-VzlnonbrjbBa9iaTmng" class="me-4 text-reset">
        <i class="fab fa-youtube"></i>
      </a>
      <a href="https://pecangaankulon.id" class="me-4 text-reset">
        <i class="fas fa-globe"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-home me-3"></i><?= ucwords($this->setting->sebutan_desa." ")?> <?= ucwords($desa['nama_desa'])?>
          </h6>

			<p><?= $desa['alamat_kantor']?><br><?= ucwords($this->setting->sebutan_kecamatan." ".$desa['nama_kecamatan'])?> <?= ucwords($this->setting->sebutan_kabupaten." ".$desa['nama_kabupaten'])?> Provinsi <?= $desa['nama_propinsi']?> Kode Pos <?= $desa['kode_pos']?></p>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Data Publik
          </h6>
          <p>
            <a href="#!" class="text-reset">Data Wilayah</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Data Pendidikan</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Data Pekerjaan</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Data Agama</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Statistik Umur</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <?php foreach ($menu_kiri as $data): ?>
            <p>
                <a class="text-reset" href="<?= site_url("artikel/kategori/$data[slug]"); ?>"><?= $data['kategori']; ?></a>
            </p>
          <?php endforeach; ?>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Kontak Kami
          </h6>
          <p><i class="fas fa-home me-3"></i> <?php echo $desa['alamat_kantor'] ?></p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            <?=$desa['email_desa'] ?>
          </p>
          <p><i class="fas fa-phone me-3"></i> <?=$desa['telepon'] ?></p>
          <p><i class="fab fa-whatsapp me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href="https://opendesa.id/">OpenDesa</a>
    &middot;
    <a class="text-reset fw-bold" href="https://github.com/OpenSID/OpenSID">OpenSID</a>
    &middot;
    <a class="text-reset fw-bold" href="https://pecangaankulon.id/">Desa Pecangaan Kulon</a>

    
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->