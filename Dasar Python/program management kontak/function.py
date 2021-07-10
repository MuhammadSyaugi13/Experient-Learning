def display_kontak(daftar_kontak):
    for kontak in daftar_kontak:
        print('====================')
        print(f"Nama = {kontak['nama']}")
        print(f"Email = {kontak['email']}")
        print(f"Telpon = {kontak['telpon']}")
        print('====================')


def tambahKontak():
    print('====================')
    nama = input("Inputkan Nama  : ")
    email = input("Inputkan email  : ")
    telpon = input("Inputkan no telpon : ")

    kontak = {"nama": nama, "email": email, "telpon": telpon}
    return kontak


def hapusKontak(daftar_kontak):
    print('====================')
    nama = input("masukan nama yang akan dihapus : ")
    print()

    index = -1

    for i in range(0, len(daftar_kontak)):
        kontak = daftar_kontak[i]
        if nama == kontak["nama"]:
            index = i
            break

    if index == -1:
        print("data tidak ditemukan")
    else:
        del daftar_kontak[index]
        print("data berhasil dihapus")

    print('====================')


def cariKontak(daftar_kontak):
    keyword = input("Masukan Keyword Nama Yang Dicari ! : ")
    print()

    print('======Hasil Pencarian=======')
    for kontak in daftar_kontak:
        nama = kontak["nama"]
        if nama.lower().find(keyword) != -1:
            print('')
            print(f"Nama = {kontak['nama']}")
            print(f"Email = {kontak['email']}")
            print(f"Telpon = {kontak['telpon']}")
            print('====================')
    print()