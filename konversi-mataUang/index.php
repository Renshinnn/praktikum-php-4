<?php
    $nom_idr=$_POST['nom_idr'];
    $opsi=$_POST['opsi'];
    $usd=0.00007;
    $eur=0.000059;
    $aud=0.000095;
    $idr_usd=$nom_idr*$usd;
    $idr_eur=$nom_idr*$eur;
    $idr_aud=$nom_idr*$aud;
    
    echo "Nominal IDR yang akan dikonversi : ";
    echo $nom_idr;
    echo "<br><br>";
    //Jenis Konversi IDR-...?
    echo "Jenis Konversi adalah $opsi ";
    echo "<br>";
    echo "==========================================<br>";
    
    if($opsi=="IDR - USD"){
        echo "Hasil Konversi adalah Rp$nom_idr = $$idr_usd ";
    }else if($opsi=="IDR - EUR"){
        echo "Hasil Konversi adalah Rp$nom_idr = €$idr_eur ";
    }else if($opsi=="IDR - AUD"){
        echo "Hasil Konversi adalah Rp$nom_idr = $$idr_aud ";
    }
?>