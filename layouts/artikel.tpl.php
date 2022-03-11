<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php $this->load->view("$folder_themes/commons/meta.php"); ?>
    <!-- </head> -->
</head>
<body onLoad="renderDate()">
    <style>
        @font-face {
            font-family: "sans";
            src: url('<?= base_url("$this->theme_folder/$this->theme/assets/fonts/SourceSansPro-Regular.ttf"); ?>');
        }
        body{
            font-family: "sans";
            overflow-x: hidden;
        }
        @media only screen and (max-width: 600px) {
            .img-header {
                display: none;
            }
        }
        a.dropdown-item{
            border-bottom: 2px solid transparent;
        }
        a.dropdown-item:hover{
            border-bottom: 2px solid blue;
        }
    </style>
<!--
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
-->
<div class="row" style="background-color: #f6f6f6;">
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
    
    <div class="row">
        <div class="container">
            <div class="content_middle"></div>
            <div class="content_bottom">
                <div class="col-lg-12 col-md-12" id="article">
					<div class="container mt-5">
                    <div class="row">
                    <?php $this->load->view("$folder_themes/partials/artikel.php"); ?>
                    </div>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("$folder_themes/partials/footer_bottom.php"); ?>
<!-- <footer id="footer">
</footer> -->

<?php $this->load->view("$folder_themes/commons/meta_footer.php"); ?>
<!-- </body></html> -->
</body>
</html>
