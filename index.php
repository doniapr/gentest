<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kecerdasan Buatan - Generate And Test</title>

    <!-- Bootstrap core CSS -->
    <link href="aset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="aset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="aset/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="aset/css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Kecerdasan Buatan</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#home">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#cari">Cari</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#kelompok">Kelompok</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="bg-primary" id="home">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Generate And Test</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Metode ini merupakan penggabungan antara depthfirst search dengan pelacakan mundur (backtracking), yaitu bergerak ke belakang menuju pada suatu keadaan awal.</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#cari">Mulai!</a>
          </div>
        </div>
      </div>
    </section>

    <section id="cari">
      <div class="container" >
        <form class="form-control" action="hasil.php" method="post">
          <div  align="center">
            <img src="aset/contoh.PNG" alt="" width="30%">
          </div>
          <div class="form-group row">
            <label for="ab" class="col-sm-3 control-label" align="center">Nilai AB</label>
            <input class="col-sm-8 form-control" type="text" name="ab" placeholder="AB" required>
          </div>
          <div class="form-group row">
            <label for="ac" class="col-sm-3 control-label" align="center">Nilai AC</label>
            <input class="col-sm-8 form-control" type="text" name="ac" placeholder="AC" required>
          </div>
          <div class="form-group row">
            <label for="ad" class="col-sm-3 control-label" align="center">Nilai AD</label>
            <input class="col-sm-8 form-control" type="text" name="ad" placeholder="AD" required>
          </div>
          <div class="form-group row">
            <label for="bc" class="col-sm-3 control-label" align="center">Nilai BC</label>
            <input class="col-sm-8 form-control" type="text" name="bc" placeholder="BC" required>
          </div>
          <div class="form-group row">
            <label for="bd" class="col-sm-3 control-label" align="center">Nilai BD</label>
            <input class="col-sm-8 form-control" type="text" name="bd" placeholder="BD" required>
          </div>
          <div class="form-group row">
            <label for="cd" class="col-sm-3 control-label" align="center">Nilai CD</label>
            <input class="col-sm-8 form-control" type="text" name="cd" placeholder="CD" required>
          </div>
          <div class="form-group row container">
            <div class="col-sm-12" align="right">
              <br>
              <button type="submit" class="btn btn-success">Proses</button>
            </div>
          </div>
        </form>
      </div>
    </section>

    <section id="kelompok" class="bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Kelompok </h2>
            <hr class="my-4">
            <p class="mb-5">Doni Aprilianto - Raka Hendra S - Ahmad Warsun - M. Salim Ridho - Rangga Pradana P</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="aset/vendor/jquery/jquery.min.js"></script>
    <script src="aset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="aset/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="aset/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="aset/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="aset/js/creative.min.js"></script>

  </body>

</html>
