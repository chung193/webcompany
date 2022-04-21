<?php include 'add.php'; ?>
<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th width="5%">No</th>
			<th width="5%">Ảnh</th>
			<th width="20%">Tên</th>
			<th width="20%">Vị trí</th>
			<th width="30%">Liên hệ</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;

foreach ($staff as $staff) { ?>
		<tr>
			<td><?= $no ?></td>
			<td><?php if ($staff['picture'] === '') {
    echo '-';
} else { ?>
				<img src="<?= base_url('assets/upload/staff/thumbs/' . $staff['picture']) ?>" class="img img-thumbnail">
			<?php } ?>
			</td>
			<td><?= $staff['name'] ?>
				<small>
					<br><i class="fa fa-sitemap"></i> type: <?= $staff['name_category_staff'] ?>
				</small>
			</td>
			<td><?= $staff['position'] ?></td>
			<td><small><i class="fa fa-phone"></i> <?= $staff['phone'] ?>
				<br><i class="fa fa-envelope"></i> <?= $staff['email'] ?>
				<br><i class="fa fa-globe"></i> <?= $staff['website'] ?>
				<br><i class="fa fa-map"></i> <?= $staff['address'] ?>
				</small>
			</td>
			<td>
				<a href="<?= base_url('admin/staff/edit/' . $staff['id_staff']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
				<a href="<?= base_url('admin/staff/delete/' . $staff['id_staff']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>