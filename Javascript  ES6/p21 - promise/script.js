// promise adalah objek yang mempresentasikan kebeerhasilan atau kegagalan dari sebuah event yang asycronus
// janji (terpenuhi/ingkar)
// states (fulfilled/rejected/pending)
// callback (resolve/reject/finally)
// aksi (then/cacth)

// contoh 1
// let ditepati = false;
// const janji = new Promise((resolve, reject) => {
//     if (ditepati) {
//         resolve('janji ditepati!');
//     } else {
//         reject('Ingkar Janji!');
//     }
// });

// janji
//     .then(response => console.log('Ok! ' + response))
//     .catch(response => console.log('NOT Ok! ' + response));

// contoh 2
// let ditepati = false;

// const janji2 = new Promise((resolve, reject) => {
//     if (ditepati) {
//         setTimeout(() => {
//             resolve('janji ditepati setelah menunggu!');
//         }, 2000);
//     } else {
//         setTimeout(() => {
//             reject('janji TIDAK ditepati setelah menunggu!');
//         }, 2000);
//     }
// });

// console.log('mulai');

// contoh 2
// console.log(janji2.then(() => console.log(janji2)));
// janji2
//     .finally(() => console.log('Selesai menunggu!'))
//     .then(response => console.log('Ok! ' + response))
//     .catch(response => console.log('Not Ok! ' + response));

// console.log('selesai');


// contoh 3

const film = new Promise(resolve => {
    setTimeout(() => {
        resolve([{
            judul: 'Avengers',
            sutradara: 'Syaugi',
            pemeran: 'Doddy, Erik'
        }]);
    }, 2000);
});

const cuaca = new Promise(resolve => {
    setTimeout(() => {
        resolve([{
            tempat: 'Jakarta',
            temp: 24,
            kondisi: 'cerah berawan'
        }]);
    }, 1000);
});

// jika dijalankan satu persatu
// film.then(resp => console.log(resp));
// cuaca.then(resp => console.log(resp));

// jika dijalankan sekaligus

// hasil beberapa promise dalam satu array
Promise.all([film, cuaca])
    // .then(resp => console.log(resp));

    // jika hasil promisenya terpisah
    .then(resp => {
        const [film, cuaca] = resp;
        console.log(film);
        console.log(cuaca);
    });










