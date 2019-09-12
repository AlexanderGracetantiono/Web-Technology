<?php
// $mobil = array("Avanza","Honda","Subaru");

// $namaMhs = array();
// array_push($namaMhs,"Alex","Andy","Joko");

// echo $namaMhs[1];

// for($n =0;$n<count($namaMhs);$n++){
//     echo $namaMhs[$n]."<br>";
// }

function salam(){
    echo "Hello World";
}
//functin dengan param
function salamNama($nama){
    echo "Halo ".$nama;
}
//function multiple param
function multiplyNumber($a,$b){
    echo $a*$b;
}
//function return by value
function returnByValue(){
    return "Hello World";
}
//function return by reference
function returnByReference(&$nama){
    $nama = "Nama Berubah";
}
// salam();

// $nama ="Joko";
// salamNama($nama);

// multiplyNumber(3,4);

// $var = returnByValue();
// echo $var;
// echo returnByValue();

$nama ="Alex";
echo "Var Sebelum Fungsi: ".$nama."<Br>";
returnByReference($nama);
echo "Var sesudah fungsi: ".$nama;
?>