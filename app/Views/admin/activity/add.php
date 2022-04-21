<p>
	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
		<i class="fa fa-plus"></i> Thêm mới
	</button>
</p>
<form action="<?= base_url('admin/activity/add') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?= csrf_field();
?>

<div class="modal fade" id="modal-default">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Thêm mới</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="form-group row">
					<label class="col-3">Tiêu đề</label>
					<div class="col-9">
						<input type="text" name="name" class="form-control" placeholder="Tiêu đề" value="<?= set_value('name') ?>" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Nội dung</label>
					<div class="col-9">
						<textarea name="content" placeholder="Địa chỉ" class="form-control"><?= set_value('content') ?></textarea>
					</div>
				</div>

			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
				<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Lưu lại</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?= form_close(); ?>