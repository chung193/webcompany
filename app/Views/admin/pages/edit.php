<form action="<?= base_url('admin/pages/edit/' . $pages['id_pages']) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?= csrf_field();
?>

<div class="form-group row">
	<label class="col-md-2">Tiêu đề</label>
	<div class="col-md-10">
		<input type="text" name="title_pages" class="form-control" value="<?= $pages['title_pages'] ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Tóm lược</label>
	<div class="col-md-10">
		<textarea name="summary" class="form-control"><?= $pages['summary'] ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Nội dung</label>
	<div class="col-md-10">
		<textarea name="content" class="form-control editor"><?= $pages['content'] ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2">Keyword tin tức (phục vụ SEO Google)</label>
	<div class="col-md-10">
		<textarea name="keywords" class="form-control"><?= $pages['keywords'] ?></textarea>
	</div>
</div>

<div class="mb-3 form-check">
    <input type="checkbox" value="1" class="form-check-input" name="show_on_menu" id="exampleCheck1"
	<?php 
	if($pages['menu']) echo 'checked';
	?>>
    <label class="form-check-label" for="exampleCheck1">Hiển thị trên menu giới thiệu trang chủ</label>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" value="1" class="form-check-input" name="show_on_footer" id="exampleCheck2"
	<?php 
		if($pages['footer']) echo 'checked';
	?>>
    <label class="form-check-label" for="exampleCheck2">Hiển thị ở footer</label>
  </div>

<div class="form-group row">
	<label class="col-md-2"></label>
	<div class="col-md-10">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Lưu thay đổi</button>
	</div>
</div>

<?= form_close(); ?>