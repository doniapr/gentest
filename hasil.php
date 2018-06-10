<?php
  include "fungsi.php";

  //ambil nilai dari dari tiap titik
  $nilai['ab'] = $_POST['ab'];
  $nilai['ba'] = $_POST['ab'];

  $nilai['ac'] = $_POST['ac'];
  $nilai['ca'] = $_POST['ac'];

  $nilai['ad'] = $_POST['ad'];
  $nilai['da'] = $_POST['ad'];

  $nilai['bc'] = $_POST['bc'];
  $nilai['cb'] = $_POST['bc'];

  $nilai['bd'] = $_POST['bd'];
  $nilai['db'] = $_POST['bd'];

  $nilai['cd'] = $_POST['cd'];
  $nilai['dc'] = $_POST['cd'];

  //inisiasi awal dan penentuan state awal
  $awal = ["a","b","c","d"];
  $gen[0] = ["a","b","c","d"];
  $genString[0] = implode('',$gen[0]);
  $max = faktorial(count($awal));

  //pembangkitan kemungkinan
  for ($i=1; $i < $max; $i++) {
    $gen[$i] = generate($awal,$gen);
    $genString[$i] = implode('',$gen[$i]);
  }

  //mengurutkan hasil pembangkitan sesuai abjad
  sort($genString);

  //perhitungan total jarak dari tiap kemungkinan yang ada
  for ($i=0; $i < $max; $i++) {
    $hasil[$i] = hitung($genString[$i],$nilai);
  }

  //pencarian nilai terbaik
  $res['angka'][0] = $hasil[0];
  $res['nama'][0] = $genString[0];
  for ($i=1; $i < $max; $i++) {
    if ($res['angka'][0]>$hasil[$i]) {
      $res['angka'][0] = $hasil[$i];
      $res['nama'][0] = $genString[$i];
    }else if (in_array($hasil[$i],$res['angka'])) {
      array_push($res['angka'],$hasil[$i]);
      array_push($res['nama'],$genString[$i]);
    }
  }
 ?>

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
         <a class="navbar-brand js-scroll-trigger" href="index.php">Kecerdasan Buatan</a>
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
           <ul class="navbar-nav ml-auto">
             <li class="nav-item">
               <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
             </li>
             <li class="nav-item">
               <a class="nav-link js-scroll-trigger" href="#pembangkitan">Pembangkitan</a>
             </li>
             <li class="nav-item">
               <a class="nav-link js-scroll-trigger" href="#hasil">Hasil</a>
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
             <a class="btn btn-light btn-xl js-scroll-trigger" href="#pembangkitan">Hasil!</a>
           </div>
         </div>
       </div>
     </section>

     <section id="pembangkitan">
       <div class="container">
         <div class="row">
           <div class="col-lg-12 text-center">
             <h2 class="section-heading">Kemungkinan Yang Dibangkitkan</h2>
             <hr class="my-4">
           </div>
         </div>
       </div>
       <div class="container" align="center">
         <table class="table table-bordered">
           <tr>
             <th>Pencarian ke</th>
             <th>Lintasan</th>
             <th>panjang</th>
           </tr>
           <?php
             $z = 1;
             for ($i=0; $i <$max ; $i++) {
               echo "<tr>";
                 echo "<td>".$z."</td>";
                 echo "<td>".strtoupper($genString[$i])."</td>";
                 echo "<td>".$hasil[$i]."</td>";
               echo "</tr>";
               $z++;
             }

            ?>
         </table>
       </div>
     </section>

     <section class="bg-dark text-white" id="hasil">
       <div class="container text-center">
        <h2 class="mb-4">Lintasan Terbaik adalah</h2>
        <?php for ($i=0; $i < count($res['nama']); $i++) { ?>
          <li><?php echo strtoupper($res['nama'][$i]) ." - ". $res['angka'][0]; ?></li>
        <?php } ?>
       </div>
     </section>

     <section id="kelompok">
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
