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
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h5>
                    <img src="<?php echo base_url(); ?>assets/img/laos.png" height="30" alt="">
                    <span class="badge badge-secondary">E-Voting</span></h5>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php if($this->uri->segment(1)=="beranda"){echo 'active';}?>">
                        <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php if($this->uri->segment(1)=="calon"){echo 'active';}?>">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/calon">Calon Kandidat</a>
                    </li>
                    <li class="nav-item <?php if($this->uri->segment(1)=="hasil"){echo 'active';}?>">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/hasil">Hasil E-Voting</a>
                    </li>
                </ul>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary btn-lg"><i class="fas fa-clipboard-list"></i> Cara
                        Memilih</button>
                    <a href="<?php echo base_url(); ?>index.php/vote" class="btn btn-success btn-lg"><i class="fas fa-poll"></i> Voting</a>

                </div>

            </div>
        </div>
    </nav>