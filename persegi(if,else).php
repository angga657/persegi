<?php
// IF, ELSE PERHITUNGAN LUAS PERSEGI
$sisi = 10;
if ($sisi > 0) {
    $luas = ($sisi * $sisi);
    echo "Hasil Dari Sisi Persegi $sisi = $luas <br>";
    return $luas;
} else {
    echo "Sisi Harus Bilangan Positif <br>";
}

// IF,ELSE Function PERHITUNGAN LUAS PERSEGI
function rumus_persegi($sisi)
{

    if ($sisi > 0) {
        $luas = ($sisi * $sisi);
        echo "Hasil Dari Sisi Persegi $sisi = $luas <br>";
        return $luas;
    } else {
        echo "Sisi Harus Bilangan Positif <br>";
    }
}

rumus_persegi(12);


// IF,ELSE CLASS PERHITUNGAN LUAS PERSEGI
class Rumus_matematika
{
    function rumus_persegi($sisi)
    {

        if ($sisi > 0) {
            $luas = ($sisi * $sisi);
            echo "Hasil Dari Sisi Persegi $sisi = $luas <br>";
            return $luas;
        } else {
            echo "Sisi Harus Bilangan Positif <br>";
        }
    }
}

$luas = new Rumus_matematika();

$luas->rumus_persegi(15);
