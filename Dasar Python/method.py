# ini sama seperti function, tetapi harus di deklarasikan sebelum digunakan

nama = []

# tanpa parameter
# def print_nama():
#     print('=========')
#     for data in nama:
#         print(data)
#         say_hello(data)
#     print('=========')

# # dengan parameter
# def say_hello(name):
#     print(f"hello {name}, welcome to my program")

# nama.append("ogi")
# print_nama()

# nama.append("habil")
# print_nama()

# Argument list & return value


def jumlahkan(x, *list_angka):
    total = 0
    for angka in list_angka:
        total = total + angka
    return (list_angka, total)


list_angk, tota = jumlahkan(10, 10, 10, 10)
print(
    f"parameternya adalah : {list_angk}, dan jumlah semua list angka-nya adalah {tota}"
)
