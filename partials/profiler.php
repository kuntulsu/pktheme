<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
            <!-- second jumbotron -->
            <div
                id="intro-example"
                class="p-5 text-center bg-image"
                style="height:250px;background-image: url('<?php echo base_url("assets/images/bdpk.jpg") ?>')"
            >
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
                <div class="text-white justify-content-center align-items-center h-100" style="overflow: auto;overflow-x:hidden">

                    <div class="row p-5">
                    <div class="col-lg-3 col-sm-4">
                    <div class="card mb-3 p-3 bg-primary">
                            <div class="inner">
                                <h3> <?php echo $penduduk[0]['jumlah'] ?> </h3>
                                <p> Jumlah Penduduk </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4">
                    <div class="card mb-3 p-3 bg-success">
                            <div class="inner">
                                <h3> <?php echo $keluarga[0]['jumlah'] ?> </h3>
                                <p> Jumlah Keluarga </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4">
                    <div class="card mb-3 p-3 bg-secondary">
                            <div class="inner">
                                <h3> <?php echo $bantuan['jumlah'] ?> </h3>
                                <p> Bantuan </p>
                            </div>
                            <div class="icon">
                            <i class="fas fa-hands-helping"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4">
                    <div class="card mb-3 p-3 bg-warning">
                            <div class="inner">
                                <h3> <?php echo $dusun[0]['jumlah'] ?> </h3>
                                <p> Wilayah Dusun </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-map" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    
                </div>
                </div>
            </div>
            
            <!-- second jumbotron -->