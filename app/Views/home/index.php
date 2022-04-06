<?php use App\Models\Menu_model;

$menu    = new Menu_model();
$berita  = $menu->berita();
$profil  = $menu->profil();
$layanan = $menu->layanan();
?>

<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">
        <?php $noslide = 1;

foreach ($slider as $slider) {  ?>
        <!-- Slide 1 -->
        <div class="carousel-item<?php if ($noslide === 1) {
    echo ' active';
} ?>" style="background-image: url(<?= base_url('assets/upload/image/' . $slider['gambar']) ?>)">
          <?php if ($slider['status_text'] === 'Ya') {  ?>
          <div class="container" style="max-width: 70%; text-align: left; padding-left: 2%; padding-right: 2%;">
                <h2><?= $slider['judul_galeri'] ?></h2>
                <p><?= $slider['isi'] ?></p>
                <a href="<?= $slider['website'] ?>" class="btn-get-started scrollto">Xem thêm</a>
            </div>
          <?php } ?>
        </div>
        <?php $noslide++; } ?>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->


  <main id="main">

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
      <div class="container" data-aos="fade-up">
          
      <div class="row">

          <div class="col-md-4 col-sm-5 col-sm-12  d-flex align-items-center">
            <div class="section-title ">
              <p>Giới thiệu</p>
              <h2><?= $konfigurasi['namaweb'] ?></h2>
            </div>
          </div>
          

          <div class="col-md-8 col-sm-7 col-sm-12 ">
            <div class="content" data-aos="fade-left">
              <?= $konfigurasi['tentang'] ?>
              <a href="<?= $slider['website'] ?>" class="btn-get-started scrollto">Xem thêm</a>
            </div>
          </div>

      </div>
      
      <div class="hilite-title text-right bdr-gray bdr-right">
				<strong>18 Năm</strong>
				<span class="text-black">Kinh nghiệm làm việc</span>
			</div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <?php $pr = 1;

foreach ($profil as $profil) { ?>
          <div class="col-md-6 col-lg-4 text-center d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="<?= $pr ?>00">
              <div class="icon"><i class="<?= $profil['icon'] ?>"></i></div>
              <h4 class="title"><a href="<?= base_url('berita/profil/' . $profil['slug_berita']) ?>"><?= $profil['judul_berita'] ?></a></h4>
              <p class="description"><?= $profil['ringkasan'] ?></p>
            </div>
          </div>
          <?php $pr++; } ?>
</div>
      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Selamat datang di <?= $konfigurasi['namaweb'] ?></h3>
          <p><?= $konfigurasi['tagline'] ?></p>
        </div>

      </div>
    </section><!-- End Cta Section -->

    



    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan Kami</h2>
          <p>Yuk gunakan layanan yang ada di <?= namaweb() ?>. <?= tagline() ?></p>
        </div>

        <div class="row">
          <?php $ml = 1;

foreach ($layanan as $layanan) { ?>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="<?= $ml; ?>00">
            <div class="icon"><i class="<?= $layanan['icon'] ?>"></i></div>
            <h4 class="title"><a href="<?= base_url('berita/layanan/' . $layanan['slug_berita']) ?>"><?= $layanan['judul_berita'] ?></a></h4>
            <p class="description"><?= $layanan['ringkasan'] ?></p>
          </div>
          <?php $ml++; } ?>
        </div>

      </div>
    </section><!-- End Services Section -->

    <?php include 'berita.php'?>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div>
        <style type="text/css" media="screen">
          iframe {
            min-height: 300px;
            width: 100%;
          }
        </style>
        <?= google_map() ?>
      </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->
