<?= form_open(base_url('admin/config/seo'));
echo csrf_field();
?>

<input type="hidden" name="id_config" value="<?= $config['id_config'] ?>">
<div class="form-group row">
	<label class="col-3">Keywords (untuk pencarian Google)</label>
	<div class="col-9">
		<textarea name="keywords" class="form-control"><?= $config['keywords'] ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Metatext, Facebook Pixel, Google Analytic dsb</label>
	<div class="col-9">
		<textarea name="metatext" class="form-control"><?= $config['metatext'] ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-3"></label>
	<div class="col-9">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Lưu</button>
	</div>
</div>

<?= form_close(); ?>