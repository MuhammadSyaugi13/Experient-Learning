import socket as s
website = input("Masukan Url Website : ")
print("IP address is : ", s.gethostbyname(website))