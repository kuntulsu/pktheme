<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarLeftAlignExample"
      aria-controls="navbarLeftAlignExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
    <i class="fa-solid fa-bars-staggered"></i> Menu
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarLeftAlignExample">
      <!-- Left links -->
      <ul class="navbar-nav  mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo site_url() ?>">
            Home
          </a>
        </li>
        <?php foreach ($menu_atas as $data): ?>
                <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a
                class="nav-link dropdown-toggle"
                href="#"
                id="<?php echo $data['nama'] ?>"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
                >
                <?php echo $data['nama']?>
                </a>
                <ul class="dropdown-menu text-white" aria-labelledby="<?php echo $data['nama'] ?>">
                <?php if(count($data['submenu']) > 0): ?>
                    <?php foreach($data['submenu'] as $submenu): ?>
                        <li>
                            <a class="dropdown-item text-white" href="<?php echo $submenu['link'] ?>"><?php echo $submenu['nama'] ?></a>
                        </li>
                
                    <?php endforeach; ?>
                <?php endif; ?>
                </ul>
            </li>
        <?php endforeach; ?>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
  
</nav>
<div class="row">
