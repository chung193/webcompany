<form action="<?= base_url('admin/news/edit/' . $news['id_news']) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?= csrf_field();
?>

<div class="form-group row">
	<label class="col-md-2">Tiêu đề</label>
	<div class="col-md-10">
		<input type="text" name="title_news" class="form-control" value="<?= $news['title_news'] ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Upload hình ảnh</label>
	<div class="col-md-10">
		<input type="file" name="picture" class="form-control" value="<?= $news['picture'] ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Upload Gallery hình ảnh</label>
	<div class="col-md-10">
		<input type="file" name="image[]" multiple="" class="form-control" value="<?= set_value('picture') ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Danh mục, loại tin &amp; Trạng thái</label>
	<div class="col-md-2">
		<select name="id_category" class="form-control">
			<?php foreach ($category as $category) { ?>
			<option value="<?= $category['id_category'] ?>" <?php if ($news['id_category'] === $category['id_category']) {
    echo 'selected';
} ?>>
				<?= $category['name_category'] ?>
			</option>
			<?php } ?>
		</select>
		<small class="text-secondary">Danh mục</small>
	</div>
	<div class="col-md-2">
		<select name="type_news" class="form-control">
			<option value="news">Tin tức</option>
			<option value="service" <?php if ($news['type_news'] === 'Service') {
    echo 'selected';
} ?>>Dịch vụ</option>
			<option value="profile" <?php if ($news['type_news'] === 'Profile') {
    echo 'selected';
} ?>>Profil</option>
		</select>
		<small class="text-secondary">Loại nội dung</small>
	</div>
	<div class="col-md-2">
		<select name="status_news" class="form-control">
			<option value="Publish">Xuất bản</option>
			<option value="Draft" <?php if ($news['status_news'] === 'Draft') {
    echo 'selected';
} ?>>Nháp</option>
		</select>
		<small class="text-secondary">Tình trạng xuất bản</small>
	</div>
	<div class="col-md-2">
		<input type="text" name="icon" class="form-control" value="<?= $news['icon'] ?>">
		<small class="text-secondary">Icon <a href="https://fontawesome.com/icons" target="_blank">Fontawsome</a></small>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Ngày giờ xuất bản</label>
	<div class="col-md-4">
		<input type="text" name="date_publish" class="form-control date" value="<?php if (isset($_POST['date_publish'])) {
			echo set_value('date_publish');
		} else {
			echo date_id($news['date_publish']);
		} ?>">
		<small class="text-secondary">Định dạng <strong>dd-mm-yyyy</strong>. Ví dụ: <?= date('d-m-Y') ?></small>
	</div>
	<div class="col-md-2">
		<input type="text" name="jam" class="form-control jam" value="<?php if (isset($_POST['jam'])) {
			echo set_value('jam');
		} else {
			echo date('H:i:s', strtotime($news['date_publish']));
		} ?>">
		<small class="text-secondary">Định dạng <strong>HH:MM:SS</strong>. Ví dụ: <?= date('H:i:s') ?></small>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Tóm lược</label>
	<div class="col-md-10">
		<textarea name="summary" class="form-control"><?= $news['summary'] ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Nội dung</label>
	<div class="col-md-10">
		<textarea name="content" class="form-control editor"><?= $news['content'] ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Keyword tin tức (phục vụ SEO Google)</label>
	<div class="col-md-10">
		<textarea name="keywords" class="form-control"><?= $news['keywords'] ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2"></label>
	<div class="col-md-10">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Lưu thay đổi</button>
	</div>
</div>

<?= form_close(); ?>