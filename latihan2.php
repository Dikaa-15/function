<?php

$judul = "===Program Angkot Sederhana=== <br />";
echo "$judul";

// function pengulanganBuku($noBuku, $kondisiTerminasi, $kondisiTerminasi1, $kondisiTerminasi2){
//     for($noBuku; $noBuku <= $kondisiTerminasi; $noBuku++){
//        if($noBuku <= $kondisiTerminasi1){
//         echo "Buku no - $noBuku tersedia <br />";
//        }else if($noBuku <= $kondisiTerminasi2){
//         echo "Buku no - $noBuku sedang dipinjam <br />";
//        }else{
//         echo "Buku no $noBuku tidak tersedia <br />";
//        }
// }
// }

// echo pengulanganBuku(1, 15, 6, 10);


function pengulanganAngkot($noAngkot, $kondisiTerminasi, $kondisiTerminasi1, $kondisiTerminasi2, $kondisiTerminasi3, $kondisiTerminasi4, $kondisiTerminasi5, $kondisiTerminasi6, $kondisiTerminasi7, $kondisiTerminasi8, $kondisiTerminasi9){
    for($noAngkot; $noAngkot <= $kondisiTerminasi; $noAngkot++){
        if($noAngkot <= $kondisiTerminasi1 || $noAngkot == $kondisiTerminasi3 || $noAngkot == $kondisiTerminasi8 || $noAngkot == $kondisiTerminasi9){ 
            echo "Angkot no - $noAngkot tersedia <br />";
        }else if($noAngkot <= $kondisiTerminasi2 || $noAngkot == $kondisiTerminasi5 || $noAngkot == $kondisiTerminasi6){
            echo "Angkot no - $noAngkot sedang diperbaiki <br />";
        }else{
            echo "Angkot no - $noAngkot tidak tersedia <br />";
        }
    }
}




echo pengulanganAngkot(1, 20, 1, 2, 3, 4, 9, 12, 17, 10, 11);




?>