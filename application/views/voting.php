<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <title>E-Voting Pemilu LaOS 2018</title>
</head>

<body>
    <div class="container my-5">
        <div class="row  justify-content-center ">
            <div class="col-8">
                <h1 class="text-center">Lets Vote!</h1>
            </div>
            <div class="col-6 align-self-center mt-2">
                <div class="alert alert-danger">
                    Anda telah melakukan voting
                </div>
                <div class="card">
                    <div class="card-body">

                        <img class="img-fluid mx-auto d-block my-3" src="assets/img/laos.png" height="200px">
                        <form>
                            <div class="row">
                                <div class="col">
                                    <img class="img-thumbnail" src="assets/img/bagas.jpeg">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="calon" id="calon1" value="1">
                                        <label class="form-check-label" for="calon1">
                                            Rachmad Agung Bagaskoro
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <img class="img-thumbnail" src="assets/img/anang.jpeg">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="calon" id="calon2" value="2">
                                        <label class="form-check-label" for="calon2">
                                            Zainal Hasan
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <img class="img-thumbnail" src="assets/img/miqdad.jpeg">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="calon" id="calon3" value="3">
                                        <label class="form-check-label" for="calon3">
                                            Miqdad Yanuar Farcha
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <img class="img-thumbnail" src="assets/img/sihul.jpg">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="calon" id="calon4" value="4">
                                        <label class="form-check-label" for="calon4">
                                            Shohihul Maksud
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title text-center mt-3">Masukkan Identitas</h5>
                            <div class="form-group">
                                <label for="nama">Masukkan Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" aria-describedby="namaHelp"
                                    placeholder="Masukkan Nama Lengkap Anda">
                                <small id="namaHelp" class="form-text text-muted">Pastikan nama lengkap sesuai dengan
                                    kartu identitas Anda</small>
                            </div>
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM Anda">
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


</body>

</html>