// alert();
// function init() {
//     // let nama = 'syaugi';

//     return function tampilNama(nama) {
//         console.log(nama);
//     }
// }

// let panggil = init();
// panggil('ogi');

// contoh function factory

// function ucapkanSalam(waktu) {
//     return function (nama) {
//         console.log(`Hallo ${nama}, Selamat ${waktu}`);
//     }
// }

// let pagi = ucapkanSalam('pagi');
// let malam = ucapkanSalam('malam');

// pagi('ogi');
// malam('nadia');

// contoh private method / variabel

let add = (function () {
    let counter = 0;
    return function () {
        return ++counter;
    }
})();

console.log(add());
console.log(add());
console.log(add());
console.log(add());
