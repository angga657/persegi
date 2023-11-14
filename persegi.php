<?php
// Penjumlahan Variable PERSEGI
$sisi = 6;
$luas = $sisi * $sisi;

echo "Hasil Dari Perhitungan Luas Persegi Adalah = $luas <br>";



// FUNCTION PERSEGI
function persegi($sisi)
 { 

     $luas = ($sisi * $sisi);
     return $luas;
 }

 $fungsi_persegi = persegi($sisi);

 echo "Hasil Dari Perhitungan Luas Persegi Menggunakan Function Adalah = $fungsi_persegi <br>";



 
//  CLASS PERSEGI
 class persegi
 {
     function hitung_luas($sisi)
     {
         $luas = $sisi * $sisi;
         return $luas;
     }
 }

 $kotak = new persegi();


 echo "Hasil Perhitungan Luas = ";
 echo $kotak->hitung_luas($sisi);


