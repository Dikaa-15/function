<?php

// Latihan no 1

$judul = "=== Program biodata sederhana function===";
echo "$judul <br />";

$nama_Lengkap = "Nama lengkap : Dwi andika f. <br />";
$umur ="umur : 15 <br />";
$kelas = "kelas : RPL 2 <br />";
$TTL = "Tempat/Tanggal lahir : Jakarta, 15 february 2008 <br />";
$noWhatsApp = "No : 0895-3960-83939 <br />";
$alamat = "Alamat : JL. Abdul Muiz No.44, Jakarta Pusat <br />";

function biodataLengkap(){
    global $nama_Lengkap, $umur, $kelas, $TTL, $noWhatsApp, $alamat;
    echo $nama_Lengkap, $umur, $kelas, $TTL, $noWhatsApp, $alamat;
     
    



}
echo biodataLengkap();













?>