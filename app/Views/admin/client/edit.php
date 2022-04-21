<form action="<?= base_url('admin/client/edit/' . $client['id_client']) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?= csrf_field();
?>
<div class="form-group row">
	<label class="col-3">Tên Client</label>
	<div class="col-9">
		<input type="text" name="name" class="form-control" placeholder="name client" value="<?= $client['name'] ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Tên lãnh đạo / Cuộc gọi</label>
	<div class="col-9">
		<input type="text" name="leader" class="form-control" placeholder="name leader" value="<?= $client['leader'] ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Nơi sinh và ngày sinh</label>
	<div class="col-3">
		<input type="text" name="country" class="form-control" placeholder="Nơi sinh" value="<?= $client['country'] ?>">
	</div>
	<div class="col-3">
		<input type="text" name="date_of_birth" class="form-control" placeholder="dd-mm-yyyy" value="<?= date_id($client['date_of_birth']) ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Loại , Trạng thái Client</label>
	<div class="col-3">
		<select name="type_client" class="form-control">
			<option value="Personal">Cá nhân</option>
			<option value="Company" <?php if ($client['type_client'] === 'Company') {
    echo 'selected';
} ?>>Công ty</option>
			<option value="Organization" <?php if ($client['type_client'] === 'Organization') {
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
		<input type="text" name="phone" class="form-control" placeholder="Điện thoai" value="<?= $client['phone'] ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Website và logo</label>
	<div class="col-4">
		<input type="text" name="website" class="form-control" placeholder="Website" value="<?= $client['website'] ?>">
	</div>
	<div class="col-5">
		<input type="file" name="picture" class="form-control" placeholder="Hình ảnh" value="<?= $client['picture'] ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Địa chỉ nhà</label>
	<div class="col-9">
		<textarea name="address" placeholder="Địa chỉ nhà" class="form-control"><?= $client['address'] ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Lời chứng thực</label>
	<div class="col-9">
		<textarea name="testimonial" placeholder="Lời chứng thực" class="form-control"><?= $client['testimonial'] ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-3"></label>
	<div class="col-9">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Lưu thay đổi</button>
	</div>
</div>


<?= form_close(); ?>