<p>
	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
		<i class="fa fa-plus"></i> Thêm mới
	</button>
</p>
<?= form_open(base_url('admin/category_gallery'));
echo csrf_field();
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
					<label class="col-3">name category gallery</label>
					<div class="col-9">
						<input type="text" name="name_category_gallery" class="form-control" placeholder="name category gallery" value="<?= set_value('name_category_gallery') ?>" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Nomor urut category gallery</label>
					<div class="col-9">
						<input type="number" name="order" class="form-control" placeholder="Nomor urut category gallery" value="<?= set_value('order') ?>" required>
					</div>
				</div>

			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
				<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Lưu</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?= form_close(); ?>