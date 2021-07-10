print()
print('=======Output=======')
print()
#Below is area for your code
import function

# list of dictionary
daftar_kontak = []
# daftar_kontak.append({
#     "nama": "ogi",
#     "email": "ogi@gmail.com",
#     "telpon": "083223131232",
# })

# menu program
while True:
    print('#Menu')
    print('1. Daftar Kontak')
    print('2. Tambah Kontak')
    print('3. Hapus Kontak')
    print('4. Cari Kontak')
    print('0. Keluar')
    print('')

    menu = input("pilih Menu : ")

    if menu == "0":
        break
    elif menu == "1":
        function.display_kontak(daftar_kontak)
        print()
        print('====================')
        print()
    elif menu == "2":
        KontakBaru = function.tambahKontak()
        daftar_kontak.append(KontakBaru)
        print()
        print('====================')
        print()
    elif menu == "3":
        function.hapusKontak(daftar_kontak)
        print()
        print('====================')
        print()
    elif menu == "4":
        print('=====Menu Pencarian=====')
        print()
        function.cariKontak(daftar_kontak)

    else:
        print("Menu tidak tersedia ")

print('Program Selesai')

#don't code below this comment
print()
print('====================')
print()
