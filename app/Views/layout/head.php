<?php use App\Models\Konfigurasi_model;

$konfigurasi = new Konfigurasi_model();
$site        = $konfigurasi->listing();
?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title ?></title>
  <meta content="<?= strip_tags($description) ?>" name="description">
  <meta content="<?= $keywords ?>, <?= keywords() ?>" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/upload/image/' . $site['icon']) ?>" rel="icon">
  <link href="<?= base_url('assets/upload/image/' . $site['icon']) ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>/assets/template/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/template/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/template/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/template/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/template/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- owl carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>/assets/template/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v4.1.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

   <!-- jQuery -->
<script src="<?= base_url() ?>/assets/admin/plugins/jquery/jquery.min.js"></script>
<?= metatext(); ?>
  <style type="text/css" media="screen">
    .table {
      border: solid thin #EEE;
      border-collapse: collapse;
    }
    .table td, .table th {
      border: solid thin #EEE;
    }
    .breadcrumbs {
      padding-top: 40px;
    }
  </style>
</head>

<body>