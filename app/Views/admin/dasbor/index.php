<?php $session = \Config\Services::session();
use App\Models\Dasbor_model;

$m_dasbor = new Dasbor_model();
?>
<div class="alert alert-info">
	<h4>Xin chào <em class="text-warning"><?= $session->get('nama') ?></em></h4>
	<hr>
	<p>Chào mừng đến với trang web <strong><?= namaweb() ?></strong>. Trang web này là một ví dụ về kết quả học tập trong Java Web Media<a href="https://javawebmedia.com">www.abcmedia.com</a>. Hy vọng nó hữu ích.</p>
</div>

 <!-- Info boxes -->
<div class="row">
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-newspaper"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Tin tức / Hồ sơ / Dịch vụ</span>
        <span class="info-box-number">
          <?= angka($m_dasbor->berita()) ?>
          <small>Konten</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Clients</span>
        <span class="info-box-number"><?= angka($m_dasbor->client()) ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix hidden-md-up"></div>

  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Staff</span>
        <span class="info-box-number"><?= angka($m_dasbor->staff()) ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-lock"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Người sử dụng Website</span>
        <span class="info-box-number"><?= angka($m_dasbor->user()) ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->

<div class="row">
<!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-download"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">File Download</span>
        <span class="info-box-number"><?= angka($m_dasbor->download()) ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-images"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Galery &amp; Banner</span>
        <span class="info-box-number">
          <?= angka($m_dasbor->galeri()) ?>
          <small>Nội dung</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fab fa-youtube"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Video Youtube</span>
        <span class="info-box-number"><?= angka($m_dasbor->video()) ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix hidden-md-up"></div>

  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-tags"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Chuyên mục Tin tức</span>
        <span class="info-box-number"><?= angka($m_dasbor->kategori()) ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>

</div>
<!-- /.row -->