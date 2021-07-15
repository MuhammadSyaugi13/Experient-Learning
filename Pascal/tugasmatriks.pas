{Muhammad Saugi 202043502623 S2M}
program matriks;
uses crt;
type
matrix=array[1..2,1..3] of byte;
var
s,k:matrix;
i,j:integer;

procedure input(var x:matrix);
begin
writeln;
for i:=1 to 2 do
begin
for j:=1 to 3 do
begin
write('masukan matrix[',i,',',j,']:');readln(x[i,j]);
end;
end;
end;

procedure show(var x:matrix);
  begin
  writeln;
  for i:= 1 to 2 do
    begin
    for j:=1 to 3 do
     begin
     write(x[i,j]:4);
     end;
    writeln;
    end;
  writeln;
  end;

{main program}

BEGIN
clrscr;

writeln('Matrix 1');
input(s);
writeln('Matrix 2');
input(k);

writeln('====================');

writeln('Matrix 1 : ');
show(s);
writeln('Matrix 2 : ');
show(k);

writeln('==============');

writeln('Hasil pemjumlahan matrix satu dan 2 adalah : ');
for i:=1 to 2 do
begin
for j:=1 to 3 do
begin
write((s[i,j] + k[i,j]):4);
end;
writeln;
end;

readln;




END.




