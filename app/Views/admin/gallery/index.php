<p>
	<a href="<?= base_url('admin/gallery/add') ?>" class="btn btn-success">
		<i class="fa fa-plus"></i> Thêm mới
	</a>
</p>

<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th width="5%">No</th>
			<th width="8%">Picture</th>
			<th width="45%">Tiêu đề</th>
			<th width="15%">category &amp; type</th>
			<th width="15%">Author</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;

foreach ($gallery as $gallery) { ?>
		<tr>
			<td><?= $no ?></td>
			<td>
				<?php if ($gallery['picture'] === '') {
    echo '-';
} else { ?>
					<img src="<?= base_url('assets/upload/image/thumbs/' . $gallery['picture']) ?>" class="img img-thumbnail">
				<?php } ?>
			</td>
			<td><?= $gallery['title_gallery'] ?>
				<small>
					<br><i class="fa fa-link"></i> Link: <?= $gallery['website'] ?>
					<br><i class="fa fa-tasks"></i> Teks Banner: <?= $gallery['status_text'] ?>
					<br><i class="fa fa-image"></i> <?= base_url('assets/upload/image/' . $gallery['picture']) ?>
				</small>
			</td>
			<td><small><i class="fa fa-tags"></i> <?= $gallery['name_category_gallery'] ?>
				<br><i class="fa fa-home"></i> <?= $gallery['type_gallery'] ?></small></td>
			<td><?= $gallery['name'] ?></td>
			<td>

				<a href="<?= base_url('admin/gallery/edit/' . $gallery['id_gallery']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
				<a href="<?= base_url('admin/gallery/delete/' . $gallery['id_gallery']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>