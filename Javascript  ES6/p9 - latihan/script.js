// ambil semua elemen vidio
const videos = Array.from(document.querySelectorAll('[data-duration]'));

// pilih hanya yang include 'JAVASCRIPT LANJUTAN'     
let jsLanjut = videos.filter(video => video.textContent.includes('Javascript lanjutan'))

    // Ambil durasi masing-masing vidio
    .map(item => item.dataset.duration)

    // ubah durasi ke int menit & detik
    .map(waktu => {
        // split 
        const parts = waktu.split(':').map(part => parseFloat(part));
        return (parts[0] * 60) + parts[1];
    })

    // Jumlahkan semua detiknya
    .reduce((total, detik) => total + detik);

// ubah dari detik ke menit dan jam
const jam = Math.floor(jsLanjut / 3600);
jsLanjut = jsLanjut - jam * 3600;

const menit = Math.floor(jsLanjut / 60);
const detik = jsLanjut - menit * 60;

// simpan di DOM
const pDurasi = document.querySelector('.total-durasi');
pDurasi.textContent = `${jam} Jam, ${menit} Menit, ${detik} Detik.`;

// ambil jumlah vidio
const jmlVidio = videos.filter(video => video.textContent.includes('Javascript lanjutan')).length;

document.querySelector('.jumlah-vidio').textContent = `${jmlVidio} Video`;

console.log(menit);
