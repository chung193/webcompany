<?php 
use App\Models\config_model;
use App\Models\Pages_model;

$m_page = new Pages_model();
$config = new config_model();
$site        = $config->listing();
// Menu
use App\Models\Menu_model;
use App\Models\News_model;
$m_news = new News_model();
$menu         = new Menu_model();
$site         = $config->listing();
$menu_news  = $menu->news();
$menu_profil  = $menu->profil();
$menu_service = $menu->service();
$footer_intro = $m_page->listing_footer();
?>
</body>
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
                                <img class="lazyload" data-src="//theme.hstatic.net/1000387172/1000670825/14/logo_bct.png?v=138" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Bộ Công Thương">
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
                          <li><span><strong>Địa chỉ:</strong></span> <?= $site['address'] ?></li>
                          <li><span><strong>Điện thoại:</strong></span> <?= $site['phone'] ?></li>
                          <li><span><strong>Fax:</strong></span> <?= $site['fax'] ?></li>
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
                        <?php 
                          foreach($footer_intro as $item){
                        ?>
                        <li class="item">
                          <a href="<?= base_url().'/pages/read/'.$item['slug_pages']?>" title="<?= $item['title_pages']?>"><?= $item['title_pages']?></a>
                        </li>
                        <?php  }
                        ?>
                                
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
                          <a href="<?= base_url() ?>" title="Trang chủ">Trang chủ</a>
                        </li>
                        
                        <li class="item">
                          <a href="<?= base_url() ?>/news/read/gioi-thieu" title="Giới thiệu">Giới thiệu</a>
                        </li>
                        
                        <li class="item">
                          <a href="<?= base_url() ?>/news/category/du-an" title="Dự án">Dự án</a>
                        </li>
                        
                        <li class="item">
                          <a href="<?= base_url() ?>/news/category/tin-tuc" title="Tin tức">Tin tức</a>
                        </li>
                        
                        <li class="item">
                          <a href="<?= base_url() ?>/news/pages/lien-he" title="Liên hệ">Liên hệ</a>
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
            <p>Copyright © 2022 <a href="<?= base_url()?>"> <?= $site['nameweb'] ?></a>.</p>
        </div>
    </div>
</div>
</footer>








            </div>
        </div>
        <div id="site-overlay" class="site-overlay"></div>
    </div> 
<script src="<?= base_url('assets/template/clone/option_selection.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/template/clone/api.jquery.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/template/clone/lazysizes.min.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/template/clone/plugins.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/template/clone/scripts.js') ?>" type="text/javascript"></script>
<!-- POPUP LOAD -->
<script>
var viewedJetProgress = false;
var viewedTextCounter = false;
function isScrolledIntoView(elem) {	
    var docViewTop = $(window).scrollTop() +50;
    var docViewBottom = docViewTop + $(window).height();
    var elemTop = $(elem).offset().top + 50;
    var elemBottom = elemTop + $(elem).height();

    return ((elemTop <= docViewBottom) && (elemBottom >= docViewTop));
}
function progressBarScroll() {
    if($('.section-whatwedo').length > 0){		

        if (isScrolledIntoView($(".section-whatwedo")) && !viewedJetProgress) {				
            viewedJetProgress = true;
            $('.jet-progress-bar').each(function () {

                $(this).prop('Counter',0).animate({
                    Counter: 	$(this).data('percent')
                }, {
                    duration: 1000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).find('.jet-progress-bar__percent-value').text(Math.ceil(now));
                        $(this).find('.jet-progress-bar__status-bar').css('width' , Math.ceil(now) + '%');

                    }
                });
            });
        }
    }
    if($('.section-parallax.prl-one').length > 0){
        if (isScrolledIntoView($(".section-parallax.prl-one")) && !viewedTextCounter) {
            viewedTextCounter = true;
            $('.counter').each(function () {
                $(this).prop('Counter',0).animate({
                    Counter: $(this).data('counter')
                }, {
                    duration: 2500,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        }
    }
}
jQuery(document).ready(function(){
    $(window).scroll(progressBarScroll);
});
</script>
<script>
if($('.top-bar').length > 0){
    $('.js_top_bar_close').click(function(e){
        e.preventDefault();
        $(this).parents('.top-bar').slideToggle();
        $('.mainHeader--height').css('min-height', '');
        let topBarHeight = $('.top-bar').outerHeight();
        let headerHeight = $('.mainHeader--height').outerHeight();
        setTimeout(function(){
            $('.mainHeader--height').css('min-height', headerHeight - topBarHeight);
        },200)
    });
}
</script>

</body>
</html>