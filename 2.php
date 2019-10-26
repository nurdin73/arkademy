<?php
function is_name_valid($nama)
{
    


    $valid = '/^[A-Z]*$/';
    if (strlen($nama) >= 3) {
        if (preg_match($valid, $nama)) {
            echo $nama;
        } else {
            echo 'Nama harus Huruf Kapital Semua';
        }
    } else {
        echo 'Nama Minimal 3 Huruf';
    }
}
function is_age_valid($umur)
{
    $preg = "/^[0-9]*$/";
    if (preg_match($preg, $umur)) {
        if (strlen($umur) > 2) {
            echo 'Harus 2 Digit Angka';
        } else {
            echo $umur;
        }
    } else {
        echo 'Masukan Hanya Angka saja';
    }
    

}
function is_username_valid($username)
{
    $pattern = "/^[a-z]{4}[_.][0-9]{3}$/";
    if (preg_match($pattern, $username)) {
        echo $username;
    } else {
        echo 'Username Yang Dimasukkan Tidak Sesuai';
    }

}
echo 'Nama : ';
is_name_valid("TIARA");
echo "<br>";
echo 'Umur : ';
is_age_valid(21);
echo "<br>";
echo 'Username : ';
is_username_valid("dian.111");
?>