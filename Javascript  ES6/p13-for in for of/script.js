// ~~~~ For of ~~~~ //
// ~ Array ~
// const mhs = ["ogi", "bagir", "habil"];

// mhs.forEach(m => console.log(m));

// for (const m of mhs) {
//     console.log(m);
// }

// ~ String ~
// const nama = "Muhammad Syaugi";
// for (const s of nama) {
//     console.log(s);
// }


// ~ Dengan Parameter index ~
// const mhs = ["ogi", "bagir", "habil"];

// mhs.forEach((m, i) => console.log(m + ' merupakan index ke-' + i));

// for (const [i, m] of mhs.entries()) {
//     console.log(m + ' merupakan index ke-' + i);
// }




// ~ Nodelist ~

// const nama2 = document.querySelectorAll('.nama');
// // console.log(nama2);

// for (n of nama2) {
//     console.log(n.innerText);
// };




// ~ Arguments ~
// function jumlahkanAngka(params) {
//     let jumlah = 0;
//     for (a of arguments) {
//         jumlah += a;
//     }
//     console.log(jumlah);
// }

// jumlahkanAngka(1, 2, 3, 4, 5);



// ~~~~ For in ~~~~ //
const mhs = {
    nama: 'ogi',
    kelas: 5,
    umur: 21
};

for (a in mhs) {
    console.log(mhs[a]);
};