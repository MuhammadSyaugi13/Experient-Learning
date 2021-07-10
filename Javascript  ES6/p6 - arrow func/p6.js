// function expression
// const tampilNama = function (nama) {
//     return `hallo ${nama}`;
// }

// arrow function
// const tampilNama = (nama) => { return `hallo ${nama}` };
// console.log(tampilNama('ogi'));

// const tampilNama = (nama, waktu) => { return `hallo ${nama}, Selamat ${waktu}` };
// console.log(tampilNama('Ogi', 'malam'));

// implisit return
// const tampilNama = nama => `hallo ${nama}`;
// console.log(tampilNama('ogi'));

// studi kasus
let mahasiswa = ["ogi", "bagir", "habil"];

// let jumlahHuruf = mahasiswa.map(function (nama) {
//     return nama.length;
// });
// console.log(jumlahHuruf);

// let jumlahHuruf = mahasiswa.map(nama => nama.length);
// console.log(jumlahHuruf);

// mengembalikan object
let jumlahHuruf = mahasiswa.map(nama => ({ nama, jmlHuruf: nama.length }));
console.table(jumlahHuruf[0].jmlHuruf);









