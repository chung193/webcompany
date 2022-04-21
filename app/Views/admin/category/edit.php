<?= form_open(base_url('admin/category/edit/' . $category['id_category']));
echo csrf_field();
?>

<div class="form-group row">
	<label class="col-3">Tên danh mục </label>
	<div class="col-9">
		<input type="text" name="name_category" class="form-control" placeholder="Tên danh mục" value="<?= $category['name_category'] ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Sắp xếp </label>
	<div class="col-9">
		<input type="number" name="order" class="form-control" placeholder="Sắp xếp" value="<?= $category['order'] ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-3"></label>
	<div class="col-9">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Lưu</button>
	</div>
</div>

<?= form_close(); ?>