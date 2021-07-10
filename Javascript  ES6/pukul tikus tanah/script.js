const tanah = document.querySelectorAll('.tanah');
const tikus = document.querySelectorAll('.tikus');

function randomTanah(tanah) {

    const tRandom = Math.floor(Math.random() * tanah.length);
    return tanah[tRandom];

}

function munculkanTikus() {
    // tambah class muncul pada elemen yg memiliki class tanan 
    const tRandom = randomTanah(tanah);
    tRandom.classList.add('muncul');

}