<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<style>

.padding {
    padding: 3rem !important;
    margin-left: 200px
}

.card-img-top {
    height: 300px
}

.card-no-border .card {
    border-color: #d7dfe3;
    border-radius: 4px;
    margin-bottom: 30px;
    -webkit-box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05)
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem
}

.pro-img {
    margin-top: -80px;
    margin-bottom: 20px
}

.little-profile .pro-img img {
    width: 128px;
    height: 128px;
    -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    border-radius: 100%
}

html body .m-b-0 {
    margin-bottom: 0px
}

h3 {
    line-height: 30px;
    font-size: 21px
}

.btn-rounded.btn-md {
    padding: 12px 35px;
    font-size: 16px
}

html body .m-t-10 {
    margin-top: 10px
}

.btn-primary,
.btn-primary.disabled {
    background: #7460ee;
    border: 1px solid #7460ee;
    -webkit-box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
    box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
    -webkit-transition: 0.2s ease-in;
    -o-transition: 0.2s ease-in;
    transition: 0.2s ease-in
}

.btn-rounded {
    border-radius: 60px;
    padding: 7px 18px
}

.m-t-20 {
    margin-top: 20px
}

.text-center {
    text-align: center !important
}

p {
    margin-top: 0;
    margin-bottom: 1rem
}
.single_advisor_profile {
    position: relative;
    margin-bottom: 50px;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    z-index: 1;
    border-radius: 15px;
    -webkit-box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
    box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
}
.single_advisor_profile .advisor_thumb {
    position: relative;
    z-index: 1;
    border-radius: 15px 15px 0 0;
    margin: 0 auto;
    padding: 30px 30px 0 30px;
    background-color: #3f43fd;
    overflow: hidden;
}
.single_advisor_profile .advisor_thumb::after {
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    position: absolute;
    width: 150%;
    height: 80px;
    bottom: -45px;
    left: -25%;
    content: "";
    background-color: #ffffff;
    -webkit-transform: rotate(-15deg);
    transform: rotate(-15deg);
}
@media only screen and (max-width: 575px) {
    .single_advisor_profile .advisor_thumb::after {
        height: 160px;
        bottom: -90px;
    }
}
.single_advisor_profile .advisor_thumb .social-info {
    position: absolute;
    z-index: 1;
    width: 100%;
    bottom: 0;
    right: 30px;
    text-align: right;
}
.single_advisor_profile .advisor_thumb .social-info a {
    font-size: 14px;
    color: #020710;
    padding: 0 5px;
}
.single_advisor_profile .advisor_thumb .social-info a:hover,
.single_advisor_profile .advisor_thumb .social-info a:focus {
    color: #3f43fd;
}
.single_advisor_profile .advisor_thumb .social-info a:last-child {
    padding-right: 0;
}
.single_advisor_profile .single_advisor_details_info {
    position: relative;
    z-index: 1;
    padding: 30px;
    text-align: right;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    border-radius: 0 0 15px 15px;
    background-color: #ffffff;
}
.single_advisor_profile .single_advisor_details_info::after {
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    position: absolute;
    z-index: 1;
    width: 50px;
    height: 3px;
    background-color: #3f43fd;
    content: "";
    top: 12px;
    right: 30px;
}
.single_advisor_profile .single_advisor_details_info h6 {
    margin-bottom: 0.25rem;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
    .single_advisor_profile .single_advisor_details_info h6 {
        font-size: 14px;
    }
}
.single_advisor_profile .single_advisor_details_info p {
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    margin-bottom: 0;
    font-size: 14px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
    .single_advisor_profile .single_advisor_details_info p {
        font-size: 12px;
    }
}
.single_advisor_profile:hover .advisor_thumb::after,
.single_advisor_profile:focus .advisor_thumb::after {
    background-color: #070a57;
}
.single_advisor_profile:hover .advisor_thumb .social-info a,
.single_advisor_profile:focus .advisor_thumb .social-info a {
    color: #ffffff;
}
.single_advisor_profile:hover .advisor_thumb .social-info a:hover,
.single_advisor_profile:hover .advisor_thumb .social-info a:focus,
.single_advisor_profile:focus .advisor_thumb .social-info a:hover,
.single_advisor_profile:focus .advisor_thumb .social-info a:focus {
    color: #ffffff;
}
.single_advisor_profile:hover .single_advisor_details_info,
.single_advisor_profile:focus .single_advisor_details_info {
    background-color: #070a57;
}
.single_advisor_profile:hover .single_advisor_details_info::after,
.single_advisor_profile:focus .single_advisor_details_info::after {
    background-color: #ffffff;
}
.single_advisor_profile:hover .single_advisor_details_info h6,
.single_advisor_profile:focus .single_advisor_details_info h6 {
    color: #ffffff;
}
.single_advisor_profile:hover .single_advisor_details_info p,
.single_advisor_profile:focus .single_advisor_details_info p {
    color: #ffffff;
}
</style>

<div class="container mt-2 mb-2">
    <div class="archive_style_1">
        <div style="margin-top:10px;">

        </div>
        <div class="row mt-5">
            <div class="col-lg-5 mb-4">
                <?php $this->load->view($folder_themes."/partials/corona-widget.php")?>
            </div>
            <div class="col-lg-7 mb-4">
            <iframe class="w-100 h-100" style="height: 300px;" src="https://www.youtube.com/embed/m5RpBHv68LM" title="YouTube video player" frameborder="0" allow="accelerometer;; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <?php if ($headline): ?>
        <?php $abstrak_headline = potong_teks($headline['isi'], 550) ?>
        <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <span class="title_text">Berita Utama</span> </h2>
        </div>
        <div id="headline" class="single_category wow fadeInDown">
            <div class="archive_style_1">
                <div class="business_category_left wow fadeInDown">
                    <ul class="fashion_catgnav">
                        <li>
                            <div class="catgimg2_container2">
                                <h5 class="catg_titile">
                                    <a href="<?= site_url('artikel/'.buat_slug($headline))?>"> <?= $headline['judul'] ?></a>
                                </h5>
                                <a href="<?= site_url('artikel/'.buat_slug($headline))?>">
                                <?php if ($headline["gambar"] != ""): ?>
                                <?php if (is_file(LOKASI_FOTO_ARTIKEL."sedang_".$headline['gambar'])): ?>
                                <img src="<?= AmbilFotoArtikel($headline['gambar'],'sedang') ?>" width="300" class="img-fluid img-thumbnail hidden-sm hidden-xs" style="float:left; margin:0 8px 4px 0;" />
                                <img src="<?= AmbilFotoArtikel($headline['gambar'],'sedang') ?>" width="100%" class="img-fluid img-thumbnail hidden-lg hidden-md" style="float:left; margin:0 8px 4px 0;" />
                                <?php else: ?>
                                <img src="<?= base_url("$this->theme_folder/$this->theme/images/noimage.png") ?>" width="300px" class="img-fluid img-thumbnail hidden-sm hidden-xs" style="float:left; margin:0 8px 4px 0;"/>
                                <img src="<?= base_url("$this->theme_folder/$this->theme/images/noimage.png") ?>" width="100%" class="img-fluid img-thumbnail hidden-lg hidden-md" style="float:left; margin:0 8px 4px 0;"/>
                                <?php endif; ?>
                                <?php endif; ?>
                                </a>
                                <div style="text-align: justify;" class="hidden-sm hidden-xs">
                                    <?= $abstrak_headline ?> ...
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
    	</div>
    	<?php endif; ?>
	</div>
    <?php $title = (!empty($judul_kategori))? $judul_kategori : "Artikel Terkini" ?>
    <?php if (is_array($title)): ?>
    	<?php foreach ($title as $item): ?>
    		<?php $title= $item ?>
    	<?php endforeach; ?>
    <?php endif; ?>
    <hr>

    <div class="row mt-4" id="article">
        <h4 class="text-center"><?php echo $title ?></h4>
    <?php if ($artikel): ?>
    <?php foreach($artikel as $data): ?>
        <div class="col-lg-4 col-xl-3 mb-5">
            <div class="card text-center mb-5 d-flex align-items-stretch" >
            <a href="<?= site_url('artikel/'.buat_slug($data))?>">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <?php if (is_file(LOKASI_FOTO_ARTIKEL."sedang_".$data['gambar'])): ?>
                    <img loading="lazy" style="" class="card-img-top" src="<?= AmbilFotoArtikel($data['gambar'],'sedang') ?>">
                <?php else: ?>
                    <img loading="lazy" style="" src="<?= base_url("$this->theme_folder/$this->theme/images/noimage.png") ?>" class="card-img-top">
                <?php endif; ?>
                    
                </div>
            </a>
            <div class="card-body d-flex flex-column">
                <div class="contain">
                    <div class="metadata mb-2 hide-sm">
                        <button class="btn mb-3 btn-rounded btn-sm btn-secondary text-white btn-disabled"><i class="fa fa-comment"></i> <?php $baca_komentar = $this->db->query("SELECT * FROM komentar WHERE id_artikel = '".$data['id']."'"); $komentarku = $baca_komentar->num_rows();echo number_format($komentarku,0,',','.'); ?></button>
                        <button class="btn mb-3 btn-rounded btn-sm btn-success text-white btn-disabled"><i class="fa fa-eye"></i> <?php echo $data['hit'] ?></button>
                        <button class="btn mb-3 btn-rounded btn-sm btn-info text-white btn-disabled"><i class="fa fa-pencil"></i> <?php echo $data['owner'] ?></button>
                    </div>
                <p class="card-title mb-4"><?php echo $data['judul'] ?></p>
                <a href="<?= site_url('artikel/'.buat_slug($data))?>" class="btn btn-primary mt-auto" style="">Read More</a>
            
                </div>
        </div>
            </div>
        </div>
    <?php endforeach; ?>
    <?php else: ?>
    </div>
    <div class="business_category_left wow fadeInDown" id="artikel-blank">
        <div class="box box-warning box-solid">
            <div class="box-header"><h3 class="box-title">Maaf, belum ada data</h3></div>
            <div class="box-body">
                <p>Belum ada artikel yang dituliskan dalam <?= $title ?></p>
                <p>Silakan kunjungi situs web kami dalam waktu dekat.</p>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php if($artikel AND $paging->num_rows > $paging->per_page): ?>
    <nav aria-label="...">
    <ul class="pagination pagination-circle">
        <?php if ($paging->start_link): ?>
        <li class="page-item"><a class="page-link" href="<?= site_url($paging_page."/$paging->start_link" . $paging->suffix) ?>" title="Halaman Pertama"><i class="fa fa-fast-backward"></i>&nbsp;</a></li>
        <?php endif; ?>
        <?php foreach ($pages as $i): ?>
        <li class="page-item <?= ($p == $i) ? 'active' : "" ?>">
            <a class="page-link" href="<?= site_url($paging_page."/$i" . $paging->suffix) ?>" title="Halaman <?= $i ?>"><?= $i ?></a>
        </li>
        <?php endforeach; ?>
        <?php if ($i != $paging->end_link): ?>
        <li class="page-item disabled">
            <a>...</a>
        </li>
        <?php endif; ?>
        <?php if ($paging->end_link): ?>
        <li class="page-item"><a class="page-link" href="<?= site_url($paging_page."/$paging->end_link" . $paging->suffix) ?>" title="Halaman Terakhir"><i class="fa fa-fast-forward"></i>&nbsp;</a></li>
        <?php endif; ?>
    </ul>
</nav>
<?php endif; ?>
<hr>