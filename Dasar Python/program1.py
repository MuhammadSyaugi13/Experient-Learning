banyak = int(input("Berapa banyak data yang akan dimasukan ?"))

nama = []
umur = []

for i in range(0, banyak):
    print(f"data ke {i+1}")
    input_nama = input("masukan nama :")
    input_umur = int(input("masukan umur :"))

    nama.append(input_nama)
    umur.append(input_umur)

for i in range(0, len(nama)):
    data_nama = nama[i]
    data_umur = umur[i]
    print(f"Nama saya {data_nama}, saya berumur {data_umur}")