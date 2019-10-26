<?php
function divideAndSort($nomor)
{
    $pisah = explode("0", $nomor);
    // pisahan 1
    $str = str_split($pisah[0]);
    $jml = count($str);
    sort($str);
    for ($i=0; $i < $jml; $i++) { 
        $str[$i];
    }

    // pemisah 2
    $str1 = str_split($pisah[1]);
    $jml1 = count($str1);
    sort($str1);
    for ($x=0; $x < $jml1; $x++) { 
        $str1[$x];
    }

    // pemisah terakhir 
    $str2 = str_split($pisah[2]);
    $jml2 = count($str2);
    sort($str2);
    for ($s=0; $s < $jml2; $s++) { 
        $str2[$s];
    }

    // Menyatukan Beberapa Array
    $hasil = array_merge($str, $str1, $str2);

    // Convert data Array Ke string
    $output = implode($hasil);
    echo "Input : $nomor";
    echo "<br>";
    echo "<br>";
    echo "Output : $output";
}
divideAndSort(5956560159466056);

?>