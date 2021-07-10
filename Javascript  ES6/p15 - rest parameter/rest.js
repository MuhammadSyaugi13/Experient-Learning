// contoh implementasi  rest parameter

// function jumlahkan(...params) {

// contoh dengan for of
// let total = 0;
// for (const n of params) {
//     total += n;
// }
// return total;

// contoh dengan reduce
//     return params.reduce((a, b) => a + b);

// }

// console.log(jumlahkan(1, 2, 3, 4, 5));


// contoh dengan array dectructuring
// const namaKelompok = ['Ogi', 'Habil', 'Bagir', 'Bin Sahil', 'Muhsal'];
// const [ketua, wakil, ...anggota] = namaKelompok;
// console.log(anggota);

// contoh dengan Object dectructuring
// const team = {
//     pm: "Ogi",
//     FrontEnd1: 'andi',
//     FrontEnd2: 'rizky',
//     backend: 'farhan',
// };

// const { pm, ...anggota } = team;
// console.log(anggota);


// contoh kasus filter

function filterBy(tipe, ...params) {

    return params.filter(p => typeof p == tipe);

}

console.log(filterBy('boolean', 'syaugi', 'aji', 1, true, 24, 'andi', false));






