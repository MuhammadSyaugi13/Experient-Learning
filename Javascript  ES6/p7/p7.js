// konsep this pada arrow function

// Constructor Function
// const mahasiswa = function () {
//     this.nama = 'ogi';
//     this.umur = 21;
//     this.sayHello = function () {
//         console.log(`Hallo Nama Saya ${this.nama}, umur saya ${this.umur}`);
//     }
// }

// const ogi = new mahasiswa();

// arrow function
// const mahasiswa = function () {
//     this.nama = 'ogi';
//     this.umur = 21;
//     this.sayHello = () => {
//         console.log(`Hallo Nama Saya ${this.nama}, umur saya ${this.umur}`);
//     }
// }

// contoh kasus
// const mahasiswa = function () {
//     this.nama = 'ogi';
//     this.umur = 21;
//     this.sayHello = () => {
//         console.log(`Hallo Nama Saya ${this.nama}, umur saya ${this.umur}`);
//     }

//     setInterval(() => {
//         console.log(this.umur++);
//     }, 5000);
// }

// let ogi = new mahasiswa();
const box = document.querySelector('.box');

box.addEventListener('click', function () {
    let satu = 'size';
    let dua = 'caption';

    if (this.classList.contains(satu)) {
        [satu, dua] = [dua, satu];
    }

    this.classList.toggle(satu);

    setTimeout(() => {
        this.classList.toggle(dua);
    }, 600)
});











