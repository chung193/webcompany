<form action="<?= base_url('admin/news/add') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?= csrf_field();
?>

<div class="form-group row">
	<label class="col-md-2">Tiêu đề tin tức</label>
	<div class="col-md-10">
		<input type="text" name="title_news" class="form-control" value="<?= set_value('title_news') ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Upload Hình ảnh</label>
	<div class="col-md-10">
		<input type="file" name="picture" class="form-control" value="<?= set_value('picture') ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Upload Gallery hình ảnh</label>
	<div class="col-md-10">
		<input type="file" name="images[]" multiple="" class="form-control" value="<?= set_value('picture') ?>">
	</div>
</div>


<div class="form-group row">
	<label class="col-md-2">Danh mục, Loại tin &amp; Trạng thái</label>
	<div class="col-md-2">
		<select name="id_category" class="form-control">
			<?php foreach ($category as $category) { ?>
			<option value="<?= $category['id_category'] ?>">
				<?= $category['name_category'] ?>
			</option>
			<?php } ?>
		</select>
		<small class="text-secondary">Danh mục</small>
	</div>
	<div class="col-md-2">
		<select name="type_news" class="form-control">
			<option value="news">Tin tức</option>
			<option value="Dịch vụ">Dịch vụ</option>
			<option value="Profil">Hồ sơ</option>
		</select>
		<small class="text-secondary">Loại nội dung</small>
	</div>
	<div class="col-md-2">
		<select name="status_news" class="form-control">
			<option value="Publish">Xuất bản</option>
			<option value="Draft">Nháp</option>
		</select>
		<small class="text-secondary">Trạng thái xuất bản</small>
	</div>
	<div class="col-md-2">
		<input type="text" name="icon" class="form-control" value="<?= set_value('icon') ?>">
		<small class="text-secondary">Icon <a href="https://fontawesome.com/icons" target="_blank">Fontawsome</a></small>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Ngày và giờ xuất bản</label>
	<div class="col-md-4">
		<input type="text" name="date_publish" class="form-control date" value="<?php if (isset($_POST['date_publish'])) {
    echo set_value('date_publish');
} else {
    echo date('d-m-Y');
} ?>">
		<small class="text-secondary">Định dạng <strong>dd-mm-yyyy</strong>. Ví dụ: <?= date('d-m-Y') ?></small>
	</div>
	<div class="col-md-2">
		<input type="text" name="jam" class="form-control jam" value="<?php if (isset($_POST['jam'])) {
    echo set_value('jam');
} else {
    echo date('H:i:s');
} ?>">
		<small class="text-secondary">Định dạng <strong>HH:MM:SS</strong>. ví du: <?= date('H:i:s') ?></small>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Tóm tắt</label>
	<div class="col-md-10">
		<textarea name="summary" class="form-control"><?= set_value('summary') ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Nội dung</label>
	<div class="col-md-10">
		<textarea name="content" class="form-control editor"><?= set_value('content') ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Keyword (dùng cho SEO Google)</label>
	<div class="col-md-10">
		<textarea name="keywords" class="form-control"><?= set_value('keywords') ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2"></label>
	<div class="col-md-10">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Lưu thay đổi</button>
	</div>
</div>

<?= form_close(); ?>