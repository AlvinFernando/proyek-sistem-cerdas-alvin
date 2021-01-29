<?php
use App\Xsiswa;
use App\Xguru;


function totalSiswa(){
    return Xsiswa::count();
}

function totalGuru(){
    return Xguru::count();
}