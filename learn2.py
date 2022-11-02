def ask ():
    a = input("Masukkan kode barang : ")
    b = int(input("Masukkan Jumlah : "))

    if a == "B001" :
        total = 15000*b
        pajak = total *0.11
        print(f"Total Penjualan = {total}")
        print(f"Pajak = {pajak}")
        grand = total + pajak
        print(f"Grand = {grand}")
    elif a == "B002" :
        total = 18000*b
        pajak = total *0.11
        print(f"Total Penjualan = {total}")
        print(f"Pajak = {pajak}")
        grand = total + pajak
        print(f"Grand = {grand}")
    elif a == "B003" :
        total = 24000*b
        pajak = total *0.11
        print(f"Total Penjualan = {total}")
        print(f"Pajak = {pajak}")
        grand = total + pajak
        print(f"Grand = {grand}")
        
    elif a == "B004" :
        total = 18000*b
        pajak = total *0.11
        print(f"Total Penjualan = {total}")
        print(f"Pajak = {pajak}")
        grand = total + pajak
        print(f"Grand = {grand}")

ask()