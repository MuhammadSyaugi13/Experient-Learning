// const coba = new Promise((resolve, reject) => {
//     setTimeout(() => {
//         resolve('selesai');
//     }, 2000);
// });
// // console.log(coba);
// coba.then(() => console.log(coba)); //jalankan ketika resolve

function cobaPromise() {
    return new Promise((resolve, reject) => {
        const waktu = 3000;
        if (waktu < 5000) {
            setTimeout(() => {
                resolve('selesai');
            }, 2000);
        } else {
            reject('Waktu menuggu terlalu lama');
        }
    });
};

// const coba = cobaPromise();
// coba
//     .then(() => console.log(coba))
//     .catch(() => console.log(coba));

async function cobaAsync() {
    try {
        const coba = await cobaPromise();
        console.log(coba);
    } catch (err) {
        console.error(err);
    }
};

cobaAsync();





