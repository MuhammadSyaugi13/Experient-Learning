// html fragments
// let mhs = {
//     nama: 'Ogi',
//     umur: 21
// };

// const el = `<div class="mhs">
//     <h2>${mhs.nama}</h2>
//     <span class="umur"> ${mhs.umur} </span>
// </div>`;


// looping
// const mhs = [
//     {
//         nama: 'ogi',
//         umur: 21
//     }, {
//         nama: 'ari',
//         umur: 22
//     },
// ];

// const el = `<div class="mhs">
//     ${mhs.map(m => `<ul>
//         <li>${m.nama}</li>
//         <li>${m.umur}</li>
//     </ul>`).join('')}
// </div>`;

// conditionals
// ternary
// const lagu = {
//     // judul: 'Kau Adalah',
//     // penyanyi: 'Isyana',
//     // feat: 'Rayi Putra',

//     // jika tidak ada featuring
//     judul: 'tetap dalam jiwa',
//     penyanyi: 'Isyana',
// };



// const el = `<div class="lagu">
//     <ul>
//         <li>${lagu.judul}</li>
//         <li>${lagu.penyanyi} ${lagu.feat ? `feat. (${lagu.feat})` : ''}</li>
//     </ul>
// </div>`;

// html fragments

const mhs = {
    nama: 'ogi',
    semester: 2,
    mataKuliah: [
        'Algoritma',
        'Pemrograman 2',
        'B Inggris'
    ]
};

function cetakMatkul(matkul) {

    return `<ol>
        ${matkul.map(mk => `<li>${mk}</li>`).join('')}
    </ol>`;

}

const el = `<div class="mhs">
    <h2>${mhs.nama}</h2>
    <span class="semester">Semester : ${mhs.semester}</span>    
    <h4>Mata Kuliah : </h4>
    ${cetakMatkul(mhs.mataKuliah)}
</div>`;


console.log(el);
document.body.innerHTML = el;