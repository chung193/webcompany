<?php
use App\Models\Config_model;

$session     = \Config\Services::session();
$Config = new Config_model();
$site        = $Config->listing();
?>
<style type="text/css" media="screen">
  .nav-item a:hover {
    color: yellow !important;
  }
</style>
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url('assets/upload/image/' . $site['icon']) ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?= $site['nameweb'] ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>/assets/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?= base_url('admin/akun') ?>" class="d-block"><?= $session->get('name') ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Dahboard -->
          <li class="nav-item">
            <a href="<?= base_url('admin/dashboard') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <!-- news -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>Tin tức, Hồ sơ &amp; Dịch vụ
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/news') ?>" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Tin tức / Dữ liệu hồ sơ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/news/add') ?>" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Thêm Tin tức / Hồ sơ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/category') ?>" class="nav-link">
                  <i class="fas fa-tags nav-icon"></i>
                  <p>Thể loại Tin tức / Hồ sơ</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- pages -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>Các trang tĩnh
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/pages') ?>" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Danh sách trang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/pages/add') ?>" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Thêm mới trang</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- page giới thiệu-->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>Trang giới thiệu
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/activity') ?>" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Danh mục hoạt động</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/history') ?>" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Lịch sử công ty</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Gallery -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>Galery &amp; Banner
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/gallery') ?>" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Data Galery/Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/gallery/add') ?>" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Thêm Gallery/Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/category_gallery') ?>" class="nav-link">
                  <i class="fas fa-tags nav-icon"></i>
                  <p>Danh mục Galery/Banner</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Download -->
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-download"></i>
              <p>Data File Download
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/download') ?>" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Data File Download</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/download/add') ?>" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Thêm File Download</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/category_download') ?>" class="nav-link">
                  <i class="fas fa-tags nav-icon"></i>
                  <p>Danh mục File Download</p>
                </a>
              </li>
            </ul>
          </li> -->
          <!-- Video -->
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fab fa-youtube"></i>
              <p>Data Video Youtube
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/video') ?>" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Data Video Youtube</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/video/add') ?>" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Thêm Video Youtube</p>
                </a>
              </li>
            </ul>
          </li> -->
          <!-- pengguna -->
          <li class="nav-item">
            <a href="<?= base_url('admin/client') ?>" class="nav-link">
              <i class="nav-icon fas fa-tasks"></i>
              <p>Clients &amp; Portfolio</p>
            </a>
          </li>
          <!-- Staff -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>Staff &amp; Team
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/staff') ?>" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Data Staff/Team</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/staff/add') ?>" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Thêm Staff/Team</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/category_staff') ?>" class="nav-link">
                  <i class="fas fa-tags nav-icon"></i>
                  <p>Danh mục Staff/Team</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- pengguna -->
          <li class="nav-item">
            <a href="<?= base_url('admin/user') ?>" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>Người sử dụng Website</p>
            </a>
          </li>
          <!-- Config -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-wrench"></i>
              <p>Setting Website
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/Config') ?>" class="nav-link">
                  <i class="fas fa-tasks nav-icon"></i>
                  <p>Cấu hình chung</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/Config/logo') ?>" class="nav-link">
                  <i class="fas fa-image nav-icon"></i>
                  <p>Update Logo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/Config/icon') ?>" class="nav-link">
                  <i class="fas fa-leaf nav-icon"></i>
                  <p>Update Icon</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/Config/seo') ?>" class="nav-link">
                  <i class="fab fa-google nav-icon"></i>
                  <p>Setting SEO &amp; Metatext</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- panduan -->
          <!-- <li class="nav-item">
            <a href="<?= base_url('admin/panduan') ?>" class="nav-link">
              <i class="nav-icon fas fa-file-pdf"></i>
              <p>Hướng dẫn &amp; Manual Book</p>
            </a>
          </li> -->
          <!-- logout -->
          <li class="nav-item">
            <a href="<?= base_url('login/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/dasbor') ?>">Dashboard</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?= $title ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="min-height: 500px;">


<?php
$validation = \Config\Services::validation();
    $errors = $validation->getErrors();
    if (! empty($errors)) {
        echo '<span class="text-danger">' . $validation->listErrors() . '</span>';
    }
?>

<?php if (session('msg')) : ?>
     <div class="alert alert-info alert-dismissible">
         <?= session('msg') ?>
         <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
     </div>
 <?php endif ?>