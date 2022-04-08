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

  <footer class="main-footer">
    <div class="main-footer--bottom">
      <div class="container scroltop-to-bottom">
        <div class="row">
          
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg">
            <div class="footer-col footer-block">
              <h4 class="footer-title">
                Giới thiệu
              </h4>
              <div class="footer-content">
                
                <?= $site['tagline'] ?>         
                <div class="logo-footer">
                  <a href="/" target="_blank" rel="noreferrer noopener" aria-label="Bộ công thương" class="fade-box">
                    <img class=" lazyloaded" data-src="//theme.hstatic.net/1000387172/1000670825/14/logo_bct.png?v=138" src="//theme.hstatic.net/1000387172/1000670825/14/logo_bct.png?v=138" alt="Bộ Công Thương">
                  </a>
                </div>
                
                <div class="social-list">
                  
                  <a href="<?= $site['facebook'] ?>" target="_blank" rel="noreferrer" class="fa fa-facebook" aria-label="Facebook"></a>
                  
                  
                  <a href="<?= $site['instagram'] ?>" target="_blank" rel="noreferrer" class="fa fa-instagram" aria-label="Google"></a>
                  
                  
                  <a href="<?= $site['twitter'] ?>" target="_blank" rel="noreferrer" class="fa fa-twitter" aria-label="Twitter"></a>
                  
                  
                  <a href="<?= $site['youtube'] ?>" target="_blank" rel="noreferrer" class="fa fa-youtube" aria-label="Youtobe"></a>
                  
                </div>
                
              </div>
            </div>
          </div>
          
          
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg">
            <div class="footer-col footer-block">
              <h4 class="footer-title">
                Thông tin liên hệ
              </h4>
              <div class="footer-content toggle-footer">
                <ul>
                  <li><span><strong>Địa chỉ:</strong></span> <?= $site['alamat'] ?></li>
                  <li><span><strong>Điện thoại:</strong></span> <?= $site['telepon'] ?></li>
                  <li><span><strong>Fax:</strong></span> <?= $site['hp'] ?></li>
                  <li><span><strong>Email:</strong></span> <?= $site['email'] ?></li>							
                </ul>	
              </div>
            </div>
          </div>
          
          
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg">
            <div class="footer-col footer-link">
              <h4 class="footer-title">
                PHÁP LÝ &amp; CÂU HỎI
              </h4>
              <div class="footer-content toggle-footer">
                <ul>
                  
                  <li class="item">
                    <a href="/search" title="Tìm kiếm">Tìm kiếm</a>
                  </li>
                  
                  <li class="item">
                    <a href="/pages/about-us" title="Giới thiệu">Giới thiệu</a>
                  </li>
                  
                  <li class="item">
                    <a href="/pages/chinh-sach-doi-tra" title="Chính sách đổi trả">Chính sách đổi trả</a>
                  </li>
                  
                  <li class="item">
                    <a href="/pages/chinh-sach-bao-mat" title="Chính sách bảo mật">Chính sách bảo mật</a>
                  </li>
                  
                  <li class="item">
                    <a href="/pages/dieu-khoan-dich-vu" title="Điều khoản dịch vụ">Điều khoản dịch vụ</a>
                  </li>
                    
                </ul>
              </div>
            </div>
          </div>
          
          
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg">
            <div class="footer-col footer-link">
              <h4 class="footer-title">
                Thông tin
              </h4>
              <div class="footer-content toggle-footer">
                <ul>
                  
                  <li class="item">
                    <a href="/" title="Trang chủ">Trang chủ</a>
                  </li>
                  
                  <li class="item">
                    <a href="/pages/about-us" title="Giới thiệu">Giới thiệu</a>
                  </li>
                  
                  <li class="item">
                    <a href="/collections/all" title="Dự án">Dự án</a>
                  </li>
                  
                  <li class="item">
                    <a href="https://nextcompany.myharavan.com/products/sunshinecuty-nextcompany" title="Chi tiết dự án">Chi tiết dự án</a>
                  </li>
                  
                  <li class="item">
                    <a href="/blogs/news" title="Blog">Blog</a>
                  </li>
                  
                  <li class="item">
                    <a href="/pages/lien-he" title="Liên hệ">Liên hệ</a>
                  </li>
                    
                </ul>
              </div>
            </div>
          </div>
          
        </div>	
        <button class="scroltop" aria-label="icon scroll top">
          <span class="fa fa-angle-up" id="btn-vibrate"></span>
        </button>
      </div>
    </div>
    <div class="main-footer--copyright">
      <div class="container">
        <div class="main-footer--border">
          <p>Copyright © 2022 <a href="https://nextcompany.myharavan.com"> NextCompany</a>. <a target="_blank" rel="noreferrer" href="https://www.haravan.com">Powered by Haravan</a></p>
        </div>
      </div>
    </div>
  </footer>



  <div id="preloader"></div>


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