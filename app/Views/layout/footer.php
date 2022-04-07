<?php use App\Models\Konfigurasi_model;

$konfigurasi = new Konfigurasi_model();
$site        = $konfigurasi->listing();
// Menu
use App\Models\Menu_model;

$menu         = new Menu_model();
$site         = $konfigurasi->listing();
$menu_berita  = $menu->berita();
$menu_profil  = $menu->profil();
$menu_layanan = $menu->layanan();
?>
<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Giới thiệu</h3>
              <p>
                <?= nl2br(strip_tags($site['alamat'])) ?>
                <!-- <br>
                <strong>Phone:</strong> <?= $site['telepon'] ?><br>
                <strong>Email:</strong> <?= $site['email'] ?><br> -->
              </p>
              <div class="social-links mt-3">
                <a href="<?= $site['twitter'] ?>" class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="<?= $site['facebook'] ?>" class="facebook"><i class="fab fa-facebook"></i></a>
                <a href="<?= $site['instagram'] ?>" class="instagram"><i class="fab fa-instagram"></i></a>
                <a href="<?= $site['youtube'] ?>" class="google-plus"><i class="fab fa-youtube"></i></a>

              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h3>Thông tin liên hệ</h3>
            <ul>
              <?php foreach ($menu_profil as $menu_profil) { ?>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('berita/profil/' . $menu_profil['slug_berita']) ?>"><?= $menu_profil['judul_berita'] ?></a></li>
              <?php } ?>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('staff') ?>">Staff &amp; Team Kami</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h3>Pháp lý & câu hỏi</h3>
            <ul>
              <?php foreach ($menu_layanan as $menu_layanan) { ?>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('berita/layanan/' . $menu_layanan['slug_berita']) ?>"><?= $menu_layanan['judul_berita'] ?></a></li>
              <?php } ?>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h3>Thông tin</h3>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Chung193</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>/assets/template/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>/assets/template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>/assets/template/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url() ?>/assets/template/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url() ?>/assets/template/assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?= base_url() ?>/assets/template/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>/assets/template/assets/js/main.js"></script>
  <!-- DataTables  & Plugins -->

<script src="<?= base_url() ?>/assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>

<!-- owl carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  $(function () {
    $('#example1').DataTable();
  });

  $('#owl-partner-logo').owlCarousel({
    items: 6,
		loop: true,
		autoplay : true,
		slideTransition: 'linear',
		autoplayTimeout : 3000,
		autoplayHoverPause : true,
		autoplaySpeed : 3000,
		nav: false,
		dots: false,
		touchDrag: true,
		responsive: {
			0:{
				items: 3,
			},
			768:{
				items: 4,
			},
			992:{
				items: 6,
			},
			1200:{
				items: 6,
			}
		}
})
  </script>
</body>

</html>