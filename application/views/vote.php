<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png" type="image/x-icon">

    <title>E-Voting Pemilu LaOS 2018</title>
</head>
<body>
<div class="container my-5">
        <div class="row  justify-content-center ">
            <div class="col-8">
                <h1 class="text-center">Lets Vote!</h1>
            </div>
            <div class="col-6 align-self-center mt-2">
                <?php
                    if (isset($alert)):
                ?>
                <div class="alert alert-<?= $class ?>" data-dismiss="alert"  >
                <?= $alert ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </div>
                <?php
                endif;
                ?>
                <script>
                    window.setTimeout(function() {
                        $(".alert").fadeTo(500, 0).slideUp(500, function(){
                            $(this).remove(); 
                        });
                    }, 4000);
                </script>
                <div class="card">
                    <div class="card-body">

                        <img class="img-fluid mx-auto d-block my-3" src="<?php echo base_url(); ?>assets/img/laos.png" height="200px">
                        <form action="<?php echo base_url();?>index.php/vote" method="post">
                            <div class="row">
                                <div class="col">
                                    <img class="img-thumbnail" src="<?php echo base_url(); ?>assets/img/bagas.jpeg">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="calon" id="calon1" value="1">
                                        <label class="form-check-label" for="calon1">
                                            Rachmad Agung Bagaskoro
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <img class="img-thumbnail" src="<?php echo base_url(); ?>assets/img/anang.jpeg">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="calon" id="calon2" value="2">
                                        <label class="form-check-label" for="calon2">
                                            Zainal Hasan
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <img class="img-thumbnail" src="<?php echo base_url(); ?>assets/img/miqdad.jpeg">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="calon" id="calon3" value="3">
                                        <label class="form-check-label" for="calon3">
                                            Miqdad Yanuar Farcha
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <img class="img-thumbnail" src="<?php echo base_url(); ?>assets/img/sihul.jpg">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="calon" id="calon4" value="4">
                                        <label class="form-check-label" for="calon4">
                                            Shohihul Maksud
                                        </label>
                                    </div>
                                </div>
                                <?= form_error('calon','<small id="namaHelp" class="form-text text-danger">','</small>') ?>
                            </div>
                            <h5 class="card-title text-center mt-3">Masukkan Identitas</h5>
                            <div class="form-group">
                                <label for="nama">Masukkan Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="nama" aria-describedby="namaHelp" placeholder="Masukkan Nama Lengkap Anda">
                                <?= form_error('nama','<small id="namaHelp" class="form-text text-danger">','</small>') ?>
                            </div>
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="text" name="nim" class="form-control" id="nim" placeholder="Masukkan NIM Anda">
                                <?= form_error('nim','<small id="namaHelp" class="form-text text-danger">','</small>') ?>
                            </div>
                            <div class="btn-group float-right">
                                <button type="reset" class="btn btn-default"><i class="far fa-window-restore"></i>
                                    Reset</button>
                                <button type="submit" class="btn btn-success"><i class="fas fa-check-circle"></i>
                                    Vote</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
        <script>
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove(); 
                });
            }, 4000);
        </script>
   
    </body>