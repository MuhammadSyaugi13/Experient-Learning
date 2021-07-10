# continue
for i in range(1, 30):
    if i % 2 == 0:
        continue
    print(i)

# break
while True:
    data = input("Masukan Data : ")
    if data == "x":
        break
    print(data)