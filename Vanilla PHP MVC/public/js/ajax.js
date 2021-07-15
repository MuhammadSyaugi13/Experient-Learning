$(function () {
	
	$('.tombolTambahData').on('click', function(){

		$('#ModalLabel').html('Tambah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Tambah Data');

	});


	$('.tampilModalUbah').on('click', function(){

		$('#ModalLabel').html('Ubah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Ubah Data');
		$('.modal-body form').attr('action', 'http://localhost/mvc/public/mahasiswa/ubah');

		const id =  $(this).data('id');


		$.ajax({
			url: 'http://localhost/mvc/public/mahasiswa/getubah',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data){
				console.log(data);
				$('#nama').val(data.nama);
				$('#nim').val(data.nrp);
				$('#jurusan').val(data.jurusan);
				$('#gender').val(data.gender);
				$('#id').val(data.id);
			}
		})

	});

});