<p>
	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
		<i class="fa fa-plus"></i> Thêm mới
	</button>
</p>
<form action="<?= base_url('admin/client') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
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
					<label class="col-3">Tên Client</label>
					<div class="col-9">
						<input type="text" name="name" class="form-control" placeholder="name client" value="<?= set_value('name') ?>" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Tên lãnh đạo / Cuộc gọi</label>
					<div class="col-9">
						<input type="text" name="leader" class="form-control" placeholder="name leader/Panggilan" value="<?= set_value('leader') ?>">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Nơi sinh và ngày sinh</label>
					<div class="col-3">
						<input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat lahir" value="<?= set_value('tempat_lahir') ?>">
					</div>
					<div class="col-3">
						<input type="text" name="date_lahir" class="form-control" placeholder="dd-mm-yyyy" value="<?= set_value('date_lahir') ?>">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Thể loại, Trạng thái Client</label>
					<div class="col-3">
						<select name="type_client" class="form-control">
							<option value="Perorangan">Cá nhân</option>
							<option value="Perusahaan">Công ty</option>
							<option value="Organisasi">Cơ quan</option>
						</select>
						<small class="text-secondary">Thể loại Client</small>
					</div>
					<div class="col-3">
						<select name="status_client" class="form-control">
							<option value="Publish">Xuất bản</option>
							<option value="Draft">Nháp</option>
						</select>
						<small class="text-secondary">Trạng thái Client</small>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Email và Điện thoại</label>
					<div class="col-5">
						<input type="text" name="email" class="form-control" placeholder="Email client" value="<?= set_value('email') ?>">
					</div>
					<div class="col-4">
						<input type="text" name="phone" class="form-control" placeholder="Điện thoại" value="<?= set_value('phone') ?>">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Website và logo</label>
					<div class="col-4">
						<input type="text" name="website" class="form-control" placeholder="Website" value="<?= set_value('website') ?>">
					</div>
					<div class="col-5">
						<input type="file" name="picture" class="form-control" placeholder="Hình ảnh" value="<?= set_value('picture') ?>">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Địa chỉ nhà</label>
					<div class="col-9">
						<textarea name="address" placeholder="Địa chỉ nhà" class="form-control"><?= set_value('address') ?></textarea>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Lời chứng thực</label>
					<div class="col-9">
						<textarea name="content_testimoni" placeholder="Lời chứng thực" class="form-control"><?= set_value('content_testimoni') ?></textarea>
					</div>
				</div>

			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
				<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Lưu thay đổi</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?= form_close(); ?>