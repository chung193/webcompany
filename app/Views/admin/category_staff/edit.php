<?= form_open(base_url('admin/category_staff/edit/' . $category_staff['id_category_staff']));
echo csrf_field();
?>

<div class="form-group row">
	<label class="col-3">Tên danh mục nhân viên</label>
	<div class="col-9">
		<input type="text" name="name_category_staff" class="form-control" placeholder="Tên danh mục nhân viên" value="<?= $category_staff['name_category_staff'] ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-3"></label>
	<div class="col-9">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Lưu</button>
	</div>
</div>

<?= form_close(); ?>