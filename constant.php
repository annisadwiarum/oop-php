<?php

// name adalah nama konstanta, dan value adalah nilai dari name
// define(name, value)

define("NAME", "Annisa Dwi Arum");
echo NAME;

echo "<br>";

const AGE = 23;
echo AGE;

//perbedaan dari define dan const adalah, const bisa disimpan di dalam class, sedangkan define harus disimpan di luar dari class. 

class Test {
    Const ADDRESS = "Medan";
}

echo "<br>";
echo Test::ADDRESS;

//cek magic constant LINE
echo "<br>";
echo __LINE__;
echo "<br>";
echo __FILE__;
//OUTPUTNYA BAKAL NGELUARIN DI LINE BERAPA CODE INI DI PROSES.