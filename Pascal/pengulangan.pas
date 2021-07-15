program pengulangan;

uses crt;
var nSatu,nDua,kali,jumlah:integer;
    bagi:real;

BEGIN
clrscr;

writeln('TABEL PERKALIAN, PEMBAGIAN, PENJUMLAHAN');
writeln('====================================================================');
writeln('| Nilai 1  |  Nilai 2 |  Hasil Perkalian | Pembagian | Penjumlahan |');
writeln('====================================================================');
writeln;


nSatu:=5;

repeat
nDua:=7;
        repeat
        kali := nSatu*nDua;
        bagi := nSatu / nDua;
        jumlah := nSatu+nDua;

        writeln(nSatu:5,nDua:13,kali:13,bagi:18:2,jumlah:13);

        nDua:=nDua+1;
        until nDua > 9;


nSatu:=nSatu+1;
until nSatu > 9;


readln;
END.

