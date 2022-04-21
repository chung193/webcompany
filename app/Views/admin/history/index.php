<?php include 'add.php'; ?>
<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th width="5%">No</th>
			<th width="25%">Ảnh</th>
			<th width="25%">Ngày tháng</th>
			<th width="25%">Tiêu đề</th>
			<th width="60%">Nội dung</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;

foreach ($history as $item) { ?>
		<tr>
			<td><?= $no ?></td>
			<td><img src="<?= base_url().'/assets/upload/image/'.$item['picture'] ?>" style="width:100px;"></td>
			<td><?= $item['time'] ?>
			<td><?= $item['name'] ?>
			</td>
			<td><?= $item['content'] ?></td>
			<td style="text-align:center">
				<a href="<?= base_url('admin/history/edit/' . $item['id']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
				<a href="<?= base_url('admin/history/delete/' . $item['id']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>