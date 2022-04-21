<form action="<?= base_url('admin/activity/edit/' . $activity['id']) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?= csrf_field();
?>
<div class="form-group row">
	<label class="col-3">Tiêu đề</label>
	<div class="col-9">
		<input type="text" name="name" class="form-control" placeholder="Tiêu đề" value="<?= $activity['name'] ?>" required>
	</div>
</div>


<div class="form-group row">
	<label class="col-3">Nội dung</label>
	<div class="col-9">
		<textarea name="content" placeholder="Nội dung" class="form-control"><?= $activity['content'] ?></textarea>
	</div>
</div>



<div class="form-group row">
	<label class="col-3"></label>
	<div class="col-9">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Lưu thay đổi</button>
	</div>
</div>


<?= form_close(); ?>