<form action="<?= base_url('admin/staff/edit/' . $staff['id_staff']) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?= csrf_field();
?>
<div class="form-group row">
	<label class="col-3">Tên nhân viên</label>
	<div class="col-9">
		<input type="text" name="name" class="form-control" placeholder="name staff" value="<?= $staff['name'] ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Vị trí chức vụ</label>
	<div class="col-6">
		<input type="text" name="position" class="form-control" placeholder="vị trí" value="<?= $staff['position'] ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Quê quán và ngày sinh</label>
	<div class="col-3">
		<input type="text" name="country" class="form-control" placeholder="Quê quán" value="<?= $staff['country'] ?>">
	</div>
	<div class="col-3">
		<input type="text" name="date_of_birth" class="form-control" placeholder="dd-mm-yyyy" value="<?= date_id($staff['date_of_birth']) ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3"> Loại nhân viên và trạng thái</label></label>
	<div class="col-3">
		<select name="id_category_staff" class="form-control">
			<?php foreach ($category_staff as $category_staff) { ?>
			<option value="<?= $category_staff['id_category_staff'] ?>" <?php if ($staff['id_category_staff'] === $category_staff['id_category_staff']) {
    echo 'selected';
} ?>><?= $category_staff['name_category_staff'] ?></option>
			<?php } ?>
		</select>
		<small class="text-secondary">Loại nhân viên</small>
	</div>
	<div class="col-3">
		<select name="status_staff" class="form-control">
			<option value="Publish">Công khai</option>
			<option value="Draft"  <?php if ($staff['status_staff'] === 'Nháp') {
    echo 'selected';
} ?>>Draft</option>
		</select>
		<small class="text-secondary">Trạng thái nhân viên</small>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Thông tin liên hệ</label>
	<div class="col-4">
		<input type="text" name="phone" class="form-control" placeholder="Điện thoại" value="<?= $staff['phone'] ?>">
	</div>
	<div class="col-5">
		<input type="text" name="email" class="form-control" placeholder="Email nhân viên" value="<?= $staff['email'] ?>">
	</div>

</div>

<div class="form-group row">
	<label class="col-3">Website và ảnh nhân viên</label>
	<div class="col-4">
		<input type="text" name="website" class="form-control" placeholder="Website" value="<?= $staff['website'] ?>">
	</div>
	<div class="col-5">
		<input type="file" name="picture" class="form-control" placeholder="picture" value="<?= $staff['picture'] ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Địa chỉ</label>
	<div class="col-9">
		<textarea name="address" placeholder="address" class="form-control"><?= $staff['address'] ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Kỹ năng</label>
	<div class="col-9">
		<textarea name="skill" placeholder="skill" class="form-control"><?= $staff['skill'] ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-3"></label>
	<div class="col-9">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Lưu thay đổi</button>
	</div>
</div>


<?= form_close(); ?>