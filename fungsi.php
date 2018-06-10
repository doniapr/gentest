<?php

  function generate($nilai,$ada)
  {
    shuffle($nilai);
    if (in_array($nilai,$ada)) {
      return generate($nilai,$ada);
    }
    return $nilai;
  }

  function faktorial($angka){
    if($angka<=1){
      $hasil=1;
      return $hasil;
    }elseif($angka>1){
      for($i=1; $i<=$angka; $i++){
        $hasil=$angka * faktorial($angka-1);
      }
      return $hasil;
    }
  }

  function hitung($gen,$nilai){
    $hitung = $nilai[$gen[0].$gen[1]] + $nilai[$gen[1].$gen[2]] + $nilai[$gen[2].$gen[3]];

    return $hitung;
  }
 ?>
