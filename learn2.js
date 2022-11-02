function ask (a,b){

    if (a == "B001"){
        total = 15000*b;
        pajak = total *0.11;
        console.log("Total Penjualan = "+total);
        console.log("Pajak = " +pajak);
        grand = total + pajak;
        console.log("Grand = " +grand);
    }
    else if (a == "B002"){
        total = 18000*b;
        pajak = total *0.11;
        console.log("Total Penjualan = "+total);
        console.log("Pajak = " +pajak);
        grand = total + pajak;
        console.log("Grand = " +grand);
    }
    else if (a == "B003"){
        total = 24000*b;
        pajak = total *0.11;
        console.log("Total Penjualan = "+total);
        console.log("Pajak = " +pajak);
        grand = total + pajak;
        console.log("Grand = " +grand);
    }
        
    else if(a == "B004"){
        total = 18000*b;
        pajak = total *0.11;
        console.log("Total Penjualan = "+total);
        console.log("Pajak = " +pajak);
        grand = total + pajak;
        console.log("Grand = " +grand);
    }
}

ask("B004",2);