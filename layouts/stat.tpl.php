<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
	<?php $this->load->view("$folder_themes/commons/meta.php"); ?>
</head>
<body>
<!--
<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
-->
<div class="">
<header id="header">
    <div id="navarea">
            <?php $this->load->view("$folder_themes/partials/menu_head.php"); ?>
        </div>
        <?php $this->load->view("$folder_themes/partials/header.php"); ?>
        <?php if (!empty($teks_berjalan)): ?>
            <div class="p-1 bg-info">
            <marquee onmouseover="this.stop()" onmouseout="this.start()">
                <?php $this->load->view($folder_themes.'/layouts/teks_berjalan.php') ?>
            </marquee>
            <?php endif; ?>
            </div>
        </div>
    </header>
	<div class="container">
	<div class="row mt-5">

				<div class="col-lg-8 col-md-9">
					<div class="content_bottom_left">
                        <?php if ($tipe == 2): ?>
							<?php $this->load->view($folder_themes.'/partials/statistik_sos.php'); ?>
    					<?php elseif ($tipe == 3): ?>
    						<?php $this->load->view(Web_Controller::fallback_default($this->theme, '/partials/wilayah.php')); ?>
    					<?php elseif ($tipe == 4): ?>
    						<?php $this->load->view(Web_Controller::fallback_default($this->theme, '/partials/dpt.php')); ?>
						<?php elseif ($tipe == 5): ?>
							<?php $this->load->view(Web_Controller::fallback_default($this->theme, 'partials/data_per_rt.php')); ?>
    					<?php else: ?>
    					<?php $this->load->view(Web_Controller::fallback_default($this->theme, '/partials/statistik.php')); ?>
    					<?php endif; ?>
					</div>
				</div>
			    <div class="col-lg-4 col-md-4">
					<?php $this->load->view("$folder_themes/partials/corona-widget.php") ?>
				</div>

	</div>
	</div>
</div>
<footer id="footer">
	<?php $this->load->view("$folder_themes/partials/footer_bottom.php"); ?>
</footer>
<?php $this->load->view("$folder_themes/commons/meta_footer.php"); ?>
</body>
</html>
