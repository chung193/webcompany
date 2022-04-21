<form action="<?= base_url('admin/pages/add') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?= csrf_field();
?>

<div class="form-group row">
	<label class="col-md-2">Tiêu đề</label>
	<div class="col-md-10">
		<input type="text" name="title_pages" class="form-control" value="<?= set_value('title_pages') ?>" required>
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

<div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" name="show_on_menu" id="exampleCheck1" value="1">
    <label class="form-check-label" for="exampleCheck1">Hiển thị trên menu giới thiệu trang chủ</label>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" name="show_on_footer" id="exampleCheck2" value="1">
    <label class="form-check-label" for="exampleCheck2">Hiển thị ở footer</label>
  </div>

<div class="form-group row">
	<label class="col-md-2"></label>
	<div class="col-md-10">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Lưu thay đổi</button>
	</div>
</div>

<?= form_close(); ?>