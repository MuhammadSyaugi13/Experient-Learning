program uts;


uses crt;

var
bil:array[1..5] of integer;
i,nilai_min,nilai_max:integer;
rata2:real;

type
arr = array[1..5] of integer;

procedure tampil(n:arr);
begin
for i:=1 to 5 do
begin
write(n[i],',');
end;
writeln;

end;
{awal prosedure min max}
procedure min_max(n:arr);
begin

  nilai_min:=n[1];
  nilai_max:=n[1];

  for i:=1 to 5 do
  begin
    if(n[i] < nilai_min) then
    begin
      nilai_min:=n[i];
    end;

    if(n[i] > nilai_max) then
    begin
      nilai_max:=n[i];
    end;
  end;

  writeln('nilai terkecil adalah : ', nilai_min);
  writeln('nilai Terbesar adalah : ', nilai_max);

end;
{akhir prosedure min_max}

{prosedure rata2}
procedure mean(n:arr);
var jumlah:integer;

begin
jumlah:=0;

{jumlah seluruh data}
for i:=1 to 5 do
begin
jumlah := jumlah + n[i];
end;

{rata-rata}
rata2 := jumlah / 5;
writeln('rata2 nya adalah : ', rata2:1:1);

end;
{akhir prosedure rata2}

begin
clrscr;
for i:=1 to 5 do
begin
write('Masukan angka : ');readln(bil[i]);
end;
tampil(bil);
min_max(bil);
mean(bil);


readln;
end.



