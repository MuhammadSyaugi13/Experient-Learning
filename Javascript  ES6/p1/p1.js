// objek literal

// let mahasiswa = {
// 	nama: 'ogi',
// 	energi: 10,
// 	makan: function (porsi) {
// 		this.energi = this.energi + porsi;
// 		console.log(`Selamat Makan ${this.nama}`);
// 	}
// }

// let mahasiswa2 = {
// 	nama: 'aji',
// 	energi: 10,
// 	makan: function (porsi) {
// 		this.energi = this.energi + porsi;
// 		console.log(`Selamat Makan ${this.nama}`);
// 	}
// }

// function declaration

// function Mahasiswa(nama, energi) {
// 	let mahasiswa = {};
// 	mahasiswa.nama = nama,
// 	mahasiswa.energi = energi,

// 	mahasiswa.makan = function (porsi) {
// 		this.energi += porsi;
// 		console.log(`Selamat Makan ${this.nama}`);
// 	}

// 	mahasiswa.main = function (jam) {
// 		this.energi -= jam;
// 		console.log(`Selamat Bermain ${this.nama}`);


// 	}

// 	return mahasiswa;
// }

// let ogi = Mahasiswa('ogi', 10);
// let aji = Mahasiswa('aji', 10);


// Constructor function

function Mahasiswa(nama, energi) {
	this.nama = nama,
	this.energi = energi,

	this.makan = function (porsi) {
		this.energi += porsi;
		console.log(`Selamat Makan ${this.nama}`);
	}

	this.main = function (jam) {
		this.energi -= jam;
		console.log(`Selamat Bermain ${this.nama}`);


	}

}

let ogi = new Mahasiswa('ogi', 10);
let aji = new Mahasiswa('aji', 10);