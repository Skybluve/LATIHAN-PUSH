<?php
function operasi($a,$b){
    if  ($a == "B001"){
        $total = 15000*$b;
        echo"Total Penjualan : ".$total;
    }else if ($a == "B002"){
        $total = $b*18000;
        echo"Total Penjualan : ".$total;
    }else if ($a == "B003"){
        $total = $b*24000;
        echo"Total Penjualan : ".$total;
    }else if ($a == "B004"){
        $total = $b*8000;
        echo"Total Penjualan : ".$total;
    }
}

operasi("B001",5);
?>