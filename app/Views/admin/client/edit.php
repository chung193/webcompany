<form action="<?= base_url('admin/client/edit/' . $client['id_client']) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?= csrf_field();
?>
<div class="form-group row">
	<label class="col-3">Tên Client</label>
	<div class="col-9">
		<input type="text" name="nama" class="form-control" placeholder="Nama client" value="<?= $client['nama'] ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Tên lãnh đạo / Cuộc gọi</label>
	<div class="col-9">
		<input type="text" name="pimpinan" class="form-control" placeholder="Nama Pimpinan/Panggilan" value="<?= $client['pimpinan'] ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Nơi sinh và ngày sinh</label>
	<div class="col-3">
		<input type="text" name="tempat_lahir" class="form-control" placeholder="Nơi sinh" value="<?= $client['tempat_lahir'] ?>">
	</div>
	<div class="col-3">
		<input type="text" name="tanggal_lahir" class="form-control" placeholder="dd-mm-yyyy" value="<?= tanggal_id($client['tanggal_lahir']) ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Loại , Trạng thái Client</label>
	<div class="col-3">
		<select name="jenis_client" class="form-control">
			<option value="Perorangan">Cá nhân</option>
			<option value="Perusahaan" <?php if ($client['jenis_client'] === 'Perusahaan') {
    echo 'selected';
} ?>>Công ty</option>
			<option value="Organisasi" <?php if ($client['jenis_client'] === 'Organisasi') {
    echo 'selected';
} ?>>Cơ quan</option>
		</select>
		<small class="text-secondary">Thể loại Client</small>
	</div>
	<div class="col-3">
		<select name="status_client" class="form-control">
			<option value="Publish">Xuất bản</option>
			<option value="Draft" <?php if ($client['status_client'] === 'Draft') {
    echo 'selected';
} ?>>Nháp</option>
		</select>
		<small class="text-secondary">Trạng thái Client</small>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Email và Điện thoại</label>
	<div class="col-5">
		<input type="text" name="email" class="form-control" placeholder="Email client" value="<?= $client['email'] ?>">
	</div>
	<div class="col-4">
		<input type="text" name="telepon" class="form-control" placeholder="Điện thoai" value="<?= $client['telepon'] ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Website và logo</label>
	<div class="col-4">
		<input type="text" name="website" class="form-control" placeholder="Website" value="<?= $client['website'] ?>">
	</div>
	<div class="col-5">
		<input type="file" name="gambar" class="form-control" placeholder="Hình ảnh" value="<?= $client['gambar'] ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Địa chỉ nhà</label>
	<div class="col-9">
		<textarea name="alamat" placeholder="Địa chỉ nhà" class="form-control"><?= $client['alamat'] ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Lời chứng thực</label>
	<div class="col-9">
		<textarea name="isi_testimoni" placeholder="Lời chứng thực" class="form-control"><?= $client['isi_testimoni'] ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-3"></label>
	<div class="col-9">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Lưu thay đổi</button>
	</div>
</div>


<?= form_close(); ?>