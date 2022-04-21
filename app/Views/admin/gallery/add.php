<form action="<?= base_url('admin/gallery/add') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?= csrf_field();
?>

<div class="form-group row">
	<label class="col-md-2">title gallery</label>
	<div class="col-md-10">
		<input type="text" name="title_gallery" class="form-control" value="<?= set_value('title_gallery') ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Upload picture gallery</label>
	<div class="col-md-10">
		<input type="file" name="picture" class="form-control" value="<?= set_value('picture') ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">category, type &amp; Status</label>
	<div class="col-md-3">
		<select name="id_category_gallery" class="form-control">
			<?php foreach ($category_gallery as $category_gallery) { ?>
			<option value="<?= $category_gallery['id_category_gallery'] ?>">
				<?= $category_gallery['name_category_gallery'] ?>
			</option>
			<?php } ?>
		</select>
		<small class="text-secondary">category</small>
	</div>
	<div class="col-md-3">
		<select name="type_gallery" class="form-control">
			<option value="gallery">gallery</option>
			<option value="Homepage">Homepage Slider</option>
		</select>
		<small class="text-secondary">type content</small>
	</div>
	<div class="col-md-3">
		<select name="status_text" class="form-control">
			<option value="show">Show</option>
			<option value="notshow">Not show</option>
		</select>
		<small class="text-secondary">Text under slider</small>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">content gallery</label>
	<div class="col-md-10">
		<textarea name="content" class="form-control content"><?= set_value('content') ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Link/URL untuk Banner</label>
	<div class="col-md-10">
		<input type="text" name="website" class="form-control" value="<?= set_value('website') ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2"></label>
	<div class="col-md-10">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
	</div>
</div>

<?= form_close(); ?>