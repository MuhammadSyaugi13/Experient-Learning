Program Sorting;
uses wincrt; var pilih:char;
a,i,j,n:integer;
data:array[1..50] of integer;
y:integer;
jwb:char;
Type
W=array[1..50]of integer; var Z:W;
{Sub Program Merge Sort}
procedure merge(var A,B:W;L,mid,R:integer); var I,J,K,T:integer;
	begin
	I:=L;K:=L;J:=mid+1;
	repeat
		if A[I]
		Begin
B[k]:=A[I];
inc(I)
end
else
begin
B[K]:=A[J];
inc(J);
end;
inc(k)
until (I>mid)or (J>R);
if I>mid then
for T:=J to R do B[K+T-J]:=A[T]
else
for T:=I to mid do B[K+T-I]:=A[T]
end;
Procedure order(var A,B:W;N,C:integer);
var I,T:integer;
begin
I:=1;
while I<=(N-2*C+1)do
begin
Merge(A,B,I,I+C-1,I+2*C-1);
I:=I+2*C;
end;
if(I+C-1)
Merge(A,B,I,I+C-1,N)
else
for T:=I to N do B[T]:=A[T]
end;
Procedure mergesort(Var A:W;N:integer);
	var C:integer;
B:W;
begin
C:=1;
while C
begin
Order(A,B,N,C);
C:=2*C;
Order(B,A,N,C);
C:=2*C
end;
end;
{Sub Program Quick Sort}
procedure change(var a,b:integer);
var c:integer;
begin
c:=a;
a:=b;
b:=c;
end;
procedure quick_sort(L,R:integer); var mid,i,j:integer;
begin
i:=L; j:=R; mid:=data[(L+R)div 2];
repeat
while data[i]
while data[j]>mid do dec(j);
if i<=j then
begin
change(data[i],data[j]);
inc(i);dec(j);
end;
until i>j;
if L
if i
end;
label ulang;
begin
writeln('Selamat datang di program Sorting');
write('Ini adalah program yang akan ');
writeln('membantu anda mengurutkan data');
ulang:
writeln;
writeln('Silakan pilih salah satu menu di bawah
ini :');
writeln(' 1. Selection Sort');
writeln(' 2. Buble Sort');
writeln(' 3. Insertion Sort');
writeln(' 4. Quick Sort');
writeln(' 5. Merge Sort');
write('Masukkan nomor menu pilihan anda:
');readln(pilih);
case pilih of
'1':
begin
clrscr;
writeln('Selamat Datang di Program Selection
Sort');
writeln;
write('Banyaknya data: ');readln(n);
write('Masukkan datanya ');
writeln('(tekan enter setiap memasukkan satu
data): ');
for i:=1 to n do readln(data[i]);
for j:=1 to (n-1) do
begin
for i:=j+1 to n do
begin
y:=data[j];
if data[i]
begin
data[j]:=data[i];
data[i]:=y;
end;
end;
end;
writeln;
writeln('Data setelah diurutkan: ');
for i:=1 to n do write(data[i]:5);
end;
'2':
begin
clrscr;
writeln('Selamat Datang di Program Bubble
Sort');
writeln;
write('Banyaknya data: ');readln(n);
write('Silakan masukkan datanya ');
writeln('(tekan enter setiap memasukkan satu
data): ');
for i:=1 to n do readln(data[i]);
for i:=2 to n do
for j:=n downto i do
begin
y:=data[j];
if data[j]
begin
data[j]:=data[j-1];
data[j-1]:=y;
end;
end;
writeln;
writeln('Data setelah diurutkan: ');
for i:=1 to n do write(data[i]:5);
	end;
'3':
begin
clrscr;
writeln('Selamat Datang di Program Insertion
Sort');
writeln;
write('Berapa banyaknya data? ');readln(n);
write('Masukkan datanya ');
writeln('(tekan enter setiap memasukkan satu
data) :');
for i:=1 to n do readln(data[i]);
for i:=2 to n do
begin
y:=data[i];
j:=i-1;
while (y1) do
begin
data[j+1]:=data[j];
j:=j-1;
end;
if y>=data[j] then data[j+1]:=y
else
begin
data[j+1]:=data[j];
data[j]:=y;
end;
end;
writeln;
writeln('Data setelah diurutkan:');
for i:=1 to n do write(data[i]:5);
end;
'4':
begin
clrscr;
writeln('Selamat Datang di Program Quick
Sort');
writeln;
write('Banyaknya data ');readln(n);
write('Silakan masukkan datanya ');
writeln('(tekan ENTER setiap memasukkan
satu data):');
for a:=1 to n do
readln(data[a]);
for a:=1 to n do quick_sort(1,n);
writeln('Data terurutnya adalah : ');
for a:=1 to n do writeln(data[a]:10);
end;
'5':
begin
clrscr;
writeln('Selamat Datang di Program Merge
Sort');
writeln;
write('Banyaknya data : ');readln(n);
writeln('Masukkan datanya ');
writeln('(tekan ENTER setiap memasukkan
satu data): ');
for a:=1 to n do readln(Z[a]);
for a:=1 to n do mergesort(Z,n);
writeln('Data terurutnya adalah : ');
for a:=1 to n do writeln(Z[a]:10);
end;
end;
writeln;
write('TEKAN ENTER jika anda sudah selesai
memahami data terurut');
readln;
clrscr;
write('Apakah anda mau mengulang lagi? (jawab
y atau t): ');
readln(jwb);
if jwb='y' then goto ulang;
writeln;
write('Anda memilih untuk meninggalkan
program sorting ini.');
writeln(' Terima kasih...');
writeln;
writeln('Tekan ENTER untuk menutup jendela
ini');
readln;
donewincrt;
end.
