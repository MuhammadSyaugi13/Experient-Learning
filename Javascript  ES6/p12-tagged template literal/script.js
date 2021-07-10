// const nama = "Syaugi";
// const umur = 21;

// function coba(strings, ...args) {
//     // let result = '';

//     // strings.forEach((str, i) => {
//     //     result += `${str}${args[i] || ''}`;
//     // });

//     // return result;

//     return strings.reduce((result, str, i) => `${result}${str}${args[i] || ''}`, '');

// }

// const str = coba`Halo saya ${nama}, umur saya ${umur} tahun`;
// console.log(str);


// highlight

const nama = "Syaugi";
const umur = 21;

function hightlight(strings, ...args) {

    return strings.reduce((result, str, i) => `${result}${str}<span class="hl">${args[i] || ''}</span>`, '');

}

const str = hightlight`Halo saya ${nama}, umur saya ${umur} tahun`;
document.body.innerHTML = str;
// console.log(str);









