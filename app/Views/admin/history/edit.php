<form action="<?= base_url('admin/history/edit/' . $history['id']) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?= csrf_field();
?>

<div class="form-group row">
	<label class="col-3">Tiêu đề</label>
	<div class="col-9">
		<input type="text" name="time" class="form-control" placeholder="dd/mm/yyyy" value="<?= $history['time'] ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Tiêu đề</label>
	<div class="col-9">
		<input type="text" name="name" class="form-control" placeholder="Tiêu đề" value="<?= $history['name'] ?>" required>
	</div>
</div>


<div class="form-group row">
	<label class="col-3">Nội dung</label>
	<div class="col-9">
		<textarea name="content" placeholder="Nội dung" class="form-control"><?= $history['content'] ?></textarea>
	</div>
</div>

<div class="form-group row">
					<label class="col-md-3">Upload Hình ảnh <br><small><em>Kích thước tốt nhất là 620x388</em></small></label>
					<div class="col-md-9">
						<input type="file" name="picture" class="form-control" >
					</div>
				</div>

<div class="form-group row">
	<label class="col-3"></label>
	<div class="col-9">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Lưu thay đổi</button>
	</div>
</div>


<?= form_close(); ?>