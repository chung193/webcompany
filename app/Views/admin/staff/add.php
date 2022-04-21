<p>
	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
		<i class="fa fa-plus"></i> Thêm mới
	</button>
</p>
<form action="<?= base_url('admin/staff') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
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
					<label class="col-3">Tên nhân viên/ lãnh đạo</label>
					<div class="col-9">
						<input type="text" name="name" class="form-control" placeholder="Tên nhân viên" value="<?= set_value('name') ?>" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Vị trí chức vụ </label>
					<div class="col-6">
						<input type="text" name="position" class="form-control" placeholder="Vị trí" value="<?= set_value('position') ?>">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Nơi sinh</label>
					<div class="col-3">
						<input type="text" name="country" class="form-control" placeholder="Quê quán" value="<?= set_value('country') ?>">
					</div>
					<div class="col-3">
						<input type="text" name="date_of_birth" class="form-control" placeholder="dd-mm-yyyy" value="<?= set_value('date_of_birth') ?>">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Vị trí/ loại nhân viên</label>
					<div class="col-3">
						<select name="id_category_staff" class="form-control">
							<?php foreach ($category_staff as $category_staff) { ?>
							<option value="<?= $category_staff['id_category_staff'] ?>"><?= $category_staff['name_category_staff'] ?></option>
							<?php } ?>
						</select>
						<small class="text-secondary">Phân loại</small>
					</div>
					<div class="col-3">
						<select name="status_staff" class="form-control">
							<option value="Publish">Công khai</option>
							<option value="Draft">Nháp</option>
						</select>
						<small class="text-secondary">Trạng thái nhân viên</small>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Email và điện thoại</label>
					<div class="col-5">
						<input type="text" name="email" class="form-control" placeholder="Email nhân viên" value="<?= set_value('email') ?>">
					</div>
					<div class="col-4">
						<input type="text" name="phone" class="form-control" placeholder="điện thoại" value="<?= set_value('phone') ?>">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Upload ảnh nhân viên</label>
					<div class="col-5">
						<input type="file" name="picture" class="form-control" placeholder="picture" value="<?= set_value('picture') ?>">
					</div>
					<div class="col-4">
						<input type="text" name="website" class="form-control" placeholder="Website" value="<?= set_value('website') ?>">
					</div>

				</div>

				<div class="form-group row">
					<label class="col-3">Địa chỉ</label>
					<div class="col-9">
						<textarea name="address" placeholder="Địa chỉ" class="form-control"><?= set_value('address') ?></textarea>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Kỹ năng</label>
					<div class="col-9">
						<textarea name="skill" placeholder="skill" class="form-control"><?= set_value('skill') ?></textarea>
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