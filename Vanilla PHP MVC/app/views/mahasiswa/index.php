<div class="container mt-5">
	<br><br><br>

	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>

			<!-- Button trigger modal -->

	<div class="row mb-3">
		<div class="col-lg-6">
			<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="		#formModal">Tambah Mahasiswa
			</button>

		</div>
	</div>


	<div class="row mb-3">
		<div class="col-lg-6">
			<form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="Cari Mahasiswa..." name="keyword" id="keyword" aria-label="Recipient's username" aria-describedby="basic-addon2">
				  <div class="input-group-append">
				    <button class="btn btn-outline-primary" type="submit" id="tombolCari" name="cari">Cari</button>
				  </div>
				</div>
			</form>
		</div>
	</div>


	<div class="row">
		<div class="col-lg-6">

			

			<h3>Daftar Mahasiswa</h3>
		<ul class="list-group">
			
			<?php foreach ($data['mhs'] as $mhs): ?>
				  <li class="list-group-item "><?= $mhs['nama']; ?>
				  	<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Anda Yakin ingin Menghapus Data Mahasiswa ?')" >Hapus</a>
				  	<a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-warning float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>
				  	<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ml-1">Detail</a>
				  </li>

				  	
			<?php endforeach ?>
		
		</ul>
		</div>
	</div>


<!-- Modal -->

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Tambah Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL;  ?>/mahasiswa/tambah" method="post">
        	<input type="hidden" name="id" id="id">
        	<div class="form-group">
		    	<label for="nama">Nama :</label>
		    	<input type="text" class="form-control" id="nama" name="nama">
		  	</div>

		  	<div class="form-group">
		    	<label for="nim">NIM :</label>
		    	<input type="number" class="form-control" id="nim" name="nrp">
		  	</div>

		  	<div class="form-group">
		    	<label for="jurusan">Jurusan</label>
			    <select class="form-control" id="jurusan" name="jurusan">
			      <option value="Teknik Informatika">Teknik Informatika</option>
			      <option value="Matematika">Matematika</option>
			      <option value="Fisika">Fisika</option>

			    </select>
		  	</div>

			<div class="form-group">
		    	<label for="gender">Jenis Kelamin</label>
			    <select class="form-control" id="gender" name="gender">
			      <option value="laki-laki">Laki-laki</option>
			      <option value="perempuan">Perempuan</option>
			    </select>
		  	</div>


	  </div>


	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Tambah Data</button>
	      </div>
        </form>
    </div>
  </div>
</div>






</div>	