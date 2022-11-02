<?php

function kode($name){
    $shift = substr($name,0,2);
    $bidang = substr($name,2,3);
    
    if($shift == "ML"){
        $shift = "MALAM";
    }else if($shift == "PG"){
        $shift = "PAGI";
    }else if($shift == "SG"){
        $shift = "SIANG";
    }else if($shift == "LB"){
        $shift = "LEMBUR";
    }

    if($bidang == "KU"){
        $bidang = "KEUANGAN";
    }elseif($bidang == "AD"){
        $bidang = "ADMINISTRASI";
    }elseif($bidang == "IT"){
        $bidang = "INFORMATION TECHNOLOGY";
    }elseif($bidang == "GD"){
        $bidang = "GUDANG";
    }

    echo "SHIFT : $shift \n";
    echo "BAGIAN : $bidang \n";
}

kode("PGIT");
?>