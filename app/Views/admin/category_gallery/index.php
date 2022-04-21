<?php include 'add.php'; ?>
<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th width="5%">No</th>
			<th width="25%">name</th>
			<th width="25%">Slug</th>
			<th width="25%">order</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;

foreach ($category_gallery as $category_gallery) { ?>
		<tr>
			<td><?= $no ?></td>
			<td><?= $category_gallery['name_category_gallery'] ?></td>
			<td><?= $category_gallery['slug_category_gallery'] ?></td>
			<td><?= $category_gallery['order'] ?></td>
			<td>
				<a href="<?= base_url('admin/category_gallery/edit/' . $category_gallery['id_category_gallery']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
				<a href="<?= base_url('admin/category_gallery/delete/' . $category_gallery['id_category_gallery']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>