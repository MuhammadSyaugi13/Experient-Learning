# dictionary
print()
print("====Output====")
print()

user = [{
    "name": "Ogi",
    "age": 21,
    "address": "Bogor"
}, {
    "name": "Habil",
    "age": 26,
    "address": "Jepara"
}]

# for key, val in user.items():
#     print(f"{key} : {val}")

for dict in user:
    for key, val in dict.items():
        print(f"{key} : {val}")
    print()
