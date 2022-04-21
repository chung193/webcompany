<form action="<?= base_url('admin/config/logo') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?= csrf_field();
?>

<input type="hidden" name="id_config" value="<?= $config['id_config'] ?>">
<div class="form-group row">
	<label class="col-3">Upload Logo Baru</label>
	<div class="col-6">
		<input type="file" name="logo" value="<?= $config['logo'] ?>" class="form-control">
		<small class="text-secondary">Format: JPG, PNG, GIF</small>
	</div>
	<div class="col-3">
		<img src="<?= logo() ?>" class="img img-thumbnail">
	</div>
</div>

<div class="form-group row">
	<label class="col-3"></label>
	<div class="col-9">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Lưu</button>
	</div>
</div>

<?= form_close(); ?>