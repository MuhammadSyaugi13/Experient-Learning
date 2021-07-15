program parkir;

uses crt;
var nama,jenis,plat:string;
    msk,kel,tJam,tarif,harga,uangBayar,kembalian:integer;
    kategori:char;

BEGIN
clrscr;

//step 1

 writeln('======= Selamat Datang di program jasa parkir =========');
 writeln('=======================================================');
 write('Masukan nama lengkap anda : ');readln(nama);
 write('input jenis kendaraan [motor/mobil] : ');readln(jenis);
 write('input plat nomor : ');readln(plat);
 write('jam masuk ke parkiran : ');readln(msk);
 write('jam keluar dari parkiran : ');readln(kel);
 write('Total Jam : ');readln(tJam);
 writeln;

 writeln('===========================');
 writeln('Pilih Kategori jam');
writeln('===========================');
 writeln('A = 1-5 Jam');
 writeln('B = 6-10 jam');
 writeln('C = 11-24 jam');
 writeln('Inputkan kategori : ');readln(kategori);
 writeln;

 //step 3
 writeln('==============================');
 writeln('Nama : ',nama);
 writeln('Plat nomor : ', plat);
 writeln('Jenis kendaraan : ',jenis);
 writeln('==============================');
 writeln;

 //step 4
 if(jenis = 'mobil') then
 begin
 tarif := 5000;
 end
 else if(jenis = 'motor') then
 begin
 tarif:=3000;
 end
 else
 begin
 writeln('jenis kendaraan tidak tersedia');
 end;

 case (kategori) of
   'A' : harga := tarif + (tJam-1)*1000;
   'B' : harga := tarif + (tjam-1)*2000;
   'C' : harga := tarif + (tjam-1)*3000;
 end;

 writeln('=============================');
 writeln('Yang harus anda bayar : ',harga);
 writeln('=============================');
 writeln;

 writeln('Uang yang anda masukan : ');readln(uangBayar);
 writeln('================  Loading  ================');

 kembalian := uangBayar-harga;

 writeln('Kembalian Anda Adalah : ',kembalian);





readln;
END.

