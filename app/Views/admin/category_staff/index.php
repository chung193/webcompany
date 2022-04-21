<?php include 'add.php'; ?>
<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th width="5%">No</th>
			<th width="25%">Tên danh mục</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;

foreach ($category_staff as $category_staff) { ?>
		<tr>
			<td><?= $no ?></td>
			<td><?= $category_staff['name_category_staff'] ?></td>
			<td>
				<a href="<?= base_url('admin/category_staff/edit/' . $category_staff['id_category_staff']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
				<a href="<?= base_url('admin/category_staff/delete/' . $category_staff['id_category_staff']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>