// pertemuan lima (closure)

// Factory Function
// function ucapkanSalam(waktu) {
//     return function (nama) {
//         console.log(`Halo ${nama}, Selamat ${waktu}`);
//     }
// }

// let selamatPagi = ucapkanSalam('pagi');
// let selamatSiang = ucapkanSalam('siang');
// let selamatSore = ucapkanSalam('sore');

// console.dir(selamatSore('Ogi'));


// Private
let add = (function () {
    let counter = 0;
    return function () {
        return ++counter;
    }
})();

counter = 100; //counter pengganggu nilai

console.log(add());
console.log(add());
console.log(add());
console.log(add());
