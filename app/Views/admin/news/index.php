<p>
	<a href="<?= base_url('admin/news/add') ?>" class="btn btn-success">
		<i class="fa fa-plus"></i> Thêm mới
	</a>
</p>

<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th width="5%">No</th>
			<th width="8%">Hình ảnh</th>
			<th width="40%">Chức vụ</th>
			<th width="15%">Danh mục - loại tin</th>
			<th width="15%">Tác giả - trạng thái</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;

foreach ($news as $news) { ?>
		<tr>
			<td><?= $no ?></td>
			<td>
				<?php if ($news['picture'] === '') {
    echo '-';
} else { ?>
					<img src="<?= base_url('assets/upload/image/thumbs/' . $news['picture']) ?>" class="img img-thumbnail">
				<?php } ?>
			</td>
			<td><a href="<?= base_url('admin/news/edit/' . $news['id_news']) ?>">
					<?= $news['title_news'] ?>
				</a>
				<small>
					<br><i class="fa fa-eye"></i> Lượt xem: <?= $news['views'] ?>
					<br><i class="fa fa-home"></i> Icon: <i class="<?= $news['icon'] ?>"></i> <?= $news['icon'] ?>
					<br><i class="fa fa-calendar-check"></i> xuất bản: <?= date_month_minute($news['date_publish']) ?>
					<br><i class="fa fa-calendar"></i> Cập nhật: <?= date_month_minute($news['date']) ?>
				</small>
			</td>
			<td><small>
				<i class="fa fa-tags"></i> <a href="<?= base_url('admin/news/category/' . $news['id_category']) ?>">
					<?= $news['name_category'] ?>
				</a>
				<br><i class="fa fa-home"></i> <a href="<?= base_url('admin/news/type_news/' . $news['type_news']) ?>">
					<?= $news['type_news'] ?>
				</a>
			</small>
			</td>

			<td><small>
					<i class="fa fa-user"></i> <a href="<?= base_url('admin/news/author/' . $news['id_user']) ?>">
						<?= $news['name'] ?>
					</a>
					<br>
					<i class="fa fa-check"></i> <a href="<?= base_url('admin/news/status_news/' . $news['status_news']) ?>">
					<?= $news['status_news'] ?>
				</a>
				</small>
			</td>
			<td>
				<a href="<?= base_url('news/read/' . $news['slug_news']) ?>" class="btn btn-info btn-sm" target="_blank"><i class="fa fa-eye"></i> Đọc</a>
				<a href="<?= base_url('admin/news/edit/' . $news['id_news']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
				<a href="<?= base_url('admin/news/delete/' . $news['id_news']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>