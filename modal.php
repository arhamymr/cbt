
<div id="modal_daftar" class="modal fade" tabindex="-1" data-width="600" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">Form Pendaftaran <span id="nama_kegiatan"> </span></h4>
  </div>
  <div class="alert alert-danger" id="notifikasi" style="display:none;">
	<a class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
	<h4>System error !</h4>
	<p>
		<div id="kata"></div>
	</p>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-6">
		<img src="../images/admin.png" class="img-circle">
      </div>
      <div class="col-md-6">
		<form method="POST" action="proses.php" id="daftar_kontingen2">
		<input type="hidden" value="" id="namaKegiatan" name="nama_kegiatan"> 
		<input type="hidden" value="daftar_kontingen2" name="action"> 
        <input type="text" class="form-control" value="" name="nama_kontingen" placeholder="Nama kontingen" required autofocus> 
		<br>
        <input type="text" class="form-control" value="" name="alamat" placeholder="Alamat" required> 
		<br>
        <input type="text" class="form-control" value="" name="kabupaten" placeholder="Kabupaten" required>  
		<br>
		<input type="text" id="username" class="form-control" value="" name="username" placeholder="Username" required> 
		<br>
        <input type="password" class="form-control" value="" name="password" placeholder="Password" required> 
		<br>
        <input type="password" class="form-control" value="" name="password2" placeholder="Ulangi password" required> 
		<br>
		<input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign up">
		</form>
      </div>
    </div>
  </div>
</div>