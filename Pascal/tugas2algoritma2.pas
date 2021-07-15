program tugas2algoritma;

uses crt;

var
i, n:integer;
a,t,L: real;

procedure hitungLuasSegitiga(alas,tinggi:real; var luas:real);
begin
luas := (alas*tinggi)/2;
end;

BEGIN
clrscr;
write('banyaknya segitiga : ');readln(n);
for i:=1 to n do
begin
writeln('hitung luas segitiga ke-',i);
write('masukan alas : ');readln(a);
write('masukan tinggi : ');readln(t);

{memanggil prosedur}
hitungLuasSegitiga(a,t,L);
writeln('luas segitiga = ', L:0:2);
writeln;
end;
readln

END.




