program insertion_sort;

uses crt;
var i,j,k,temp,n : integer;
    A,B,C:array [1..100] of integer;

BEGIN
clrscr; textcolor(12);
write('Inputkan banyaknya element array : ');readln(n);

//input data
for i := 1 to n do
begin
write('element ke-',i,': ');readln(A[i]);
end;


{cetak array sebelum pengurutan}
writeln; textcolor(15); writeln;
write('sebelum diurutkan : ');
for i := 1 to n do
begin
write(A[i],' ');
end;

writeln; textcolor(15);writeln;

{proses pengurutan insertion}
writeln('proses pengurutan insertion : ');
for i := 2 to n do
begin
temp := A[i];
j:=i-1;

while(temp < A[j]) and (j > 0) do
begin
j := j-1;
end;

for k := i downto j+1 do
begin
A[k] := A[k-1];
A[j+1] := temp;
end;

writeln; textcolor(i);
writeln('Hasil Akhir langkah ke-',i-1,' : ');


{cetak array tiap langkah pengurutan:}
for k:= 1 to n do
begin
write(A[k],' ');
end;

end;


{cetak array setelah pengurutan}
writeln; writeln; textcolor(15);
write('Hasil Pengurutan Insertion');
for i:= 1 to n do
begin
write(A[i], ' ');
end;

writeln; writeln; textcolor(10);
write('Apakah sudah terurut ? ');

readln;
END.

