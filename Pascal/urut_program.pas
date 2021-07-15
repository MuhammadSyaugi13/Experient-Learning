program urut_program;

uses crt;

var
i,j,k,temp,imaks,n :integer;
A,B,C:array[1..100] of integer;


BEGIN
clrscr; textcolor(10);
writeln('Banyaknya Elemen Array : '); readln(n);

//input data
for i := 1 to n do begin
        write('element ke ',i,' :'); readln(A[i]);
end;

// cetak array sebelum pengurutan
writeln; textcolor(15); write('Sebelum diurutkan : ');
for i := 1 to n do begin
write(A[i], ' ');
writeln();writeln(); textcolor(15);
writeln('Proses pengurutan seleksi : ');
end;

for i := 1 to n-1 do begin

        imaks := i;
        for j:= i+1 to n do
                begin
                if A[j] < A[imaks] then imaks := j;
                end;

        //Tukar A[j] dengan A[imaks]
        temp := A[imaks];
        A[imaks] := A[i];
        A[i] := temp;
        writeln(); textcolor(i);

        //cetak array tiap langkah pengurutan
        write('Hasil akhir langkah ke-',i,' : ');
        for k := 1 to n do begin
          write(A[k], ' ');
        end;

     end;


     //cetak array setelah pengurutan
     writeln();
     textcolor(15); writeln(' Hasil Pengurutan Seleksi : ');
     for i := 1 to n do
     begin
     write(A[i], ' ');
     end;



readln;
END.

