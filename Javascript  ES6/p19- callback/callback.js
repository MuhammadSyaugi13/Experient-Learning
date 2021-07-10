// callback adalah function yang dikirimkan sebagai parameter pada function lain
// callback adalah function yang dieksekusi setelah function lain selesai dijalankan

// syncronus callback
// function halo(name) {
//     alert(`Hallo ${name}`);
// }

// function tampilkanPesan(callback) {
//     const nama = prompt('Masukan Nama : ');
//     callback(nama);
// }
// tanpa arrow function
// tampilkanPesan(function (nama) {
//     alert(`Hallo ${nama}`);
// });\

// Dengan arrow function
// tampilkanPesan(nama => alert(`Hallo ${nama}`));

// asycronus callback


// console.log('mulai');
// mhs.forEach(m => {
//     for (let i = 0; i < 900000; i++) {
//         let date = new Date;
//         // console.log(date.getDate());
//     }
//     console.log(m.nama);
// });
// console.log('selesai');

// ajax dengan vanilla javascript
// function getDataMahasiswa(url, success, error) {
//     let xhr = new XMLHttpRequest();

//     xhr.onreadystatechange = function () {
//         if (xhr.readyState === 4) {
//             if (xhr.status === 200) {
//                 success(xhr.response);
//             } else if (xhr.status === 404) {
//                 error();
//             }
//         }
//     }

//     xhr.open('get', url);
//     xhr.send();
// }
// console.log('Mulai');

// getDataMahasiswa('data/mhs.json',
//     results => {
//         // console.log(JSON.parse(results)); 
//         // jika ingin menampilkan hanya nama
//         const mhs = JSON.parse(results);
//         mhs.forEach(m => console.log(m.nama));
//     },

//     () => { });

// console.log('Selesai');

// ajax dengan jquery
console.log('Mulai');
$.ajax({
    url: 'data/mhs.json',
    success: (mhs) =>
        mhs.forEach(m => console.log(m.nama)),
    error: (e) => console.log(e.responseText)
});
console.log('Selesai');