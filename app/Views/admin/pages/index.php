<p>
	<a href="<?= base_url('admin/pages/add') ?>" class="btn btn-success">
		<i class="fa fa-plus"></i> Thêm mới
	</a>
</p>

<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th width="5%">No</th>
			<th width="40%">Tên</th>
			<th width="15%">Vị trí hiển thị</th>
			<th width="15%">Tác giả - trạng thái</th>
			<th width="15%">Thao tác</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;

foreach ($pages as $pages) { ?>
		<tr>
			<td><?= $no ?></td>
			<td><a href="<?= base_url('admin/pages/edit/' . $pages['id_pages']) ?>">
					<?= $pages['title_pages'] ?>
				</a>
			</td>
			<td>
				<?php 
					if($pages['menu']) {
						echo '<p>menu</p>';
					}

					if($pages['footer']) {
						echo '<p>footer</p>';
					}
				?>
			</td>
			<td><small>
					<i class="fa fa-user"></i> <a href="<?= base_url('admin/pages/author/' . $pages['id_user']) ?>">
						<?= $pages['name'] ?>
					</a>
				</a>
				</small>
			</td>
			<td>
				<a href="<?= base_url('pages/read/' . $pages['slug_pages']) ?>" class="btn btn-info btn-sm" target="_blank"><i class="fa fa-eye"></i> Đọc</a>
				<a href="<?= base_url('admin/pages/edit/' . $pages['id_pages']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
				<a href="<?= base_url('admin/pages/delete/' . $pages['id_pages']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>