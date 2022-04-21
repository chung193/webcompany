<?= form_open(base_url('admin/category_gallery/edit/' . $category_gallery['id_category_gallery']));
echo csrf_field();
?>

<div class="form-group row">
	<label class="col-3">name category gallery</label>
	<div class="col-9">
		<input type="text" name="name_category_gallery" class="form-control" placeholder="name category gallery" value="<?= $category_gallery['name_category_gallery'] ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Sắp xếp category gallery</label>
	<div class="col-9">
		<input type="number" name="order" class="form-control" placeholder="Sắp xếp" value="<?= $category_gallery['order'] ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-3"></label>
	<div class="col-9">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Lưu</button>
	</div>
</div>

<?= form_close(); ?>