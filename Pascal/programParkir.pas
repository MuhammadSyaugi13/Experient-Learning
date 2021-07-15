program jasaParkir;

uses crt;
var nama,jenis,plat:string;
    msk,kel,tJam,tarif:integer;
BEGIN
clrscr;

   writeln('======== SELAMAT DATANG DI PROGRAM JASA PARKIR ===========');
   write('Masukan Nama lengkap Anda : ');readln(nama);
   write('Pilih jenis kendaraan [mobil/motor] : ');readln(jenis);
   write('masukan plat nomor :');readln(plat);
   write('Jam Masuk : ');readln(msk);
   write('Jam keluar : ');readln(kel);
   write('Total Jam : ');readln(tJam);
   writeln;

   writeln('=============================');
   writeln('Pilih Kategori Lama Jam');
   writeln('=============================');
   writeln('A = 1-5 Jam');
   writeln('B = 6-10 Jam');
   writeln('C = 11-24 Jam');
   writeln;

   writeln('=============================');
   writeln('Nama : ', nama);
   writeln('Nomor kendaraan : ', plat);
   writeln('Jenis Kendaraan : ', jenis);
   writeln('=============================');
   writeln;

   if (jenis = 'mobil') then
   begin
    tarif:= 5000;
    writeln(tarif);
   end

   else if(jenis = 'motor') then
   begin
     tarif:= 3000;
     writeln(tarif);
   end

   else
   begin
     writeln('yang anda input tidak terdaftar');
   end;



readln;
END.

