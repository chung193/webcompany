<?php use App\Models\Menu_model;

$menu    = new Menu_model();
$news  = $menu->news();
$profil  = $menu->profil();
$service = $menu->service();
?>
<main id="main" class="main-content-theme main-index	">
  <section class="section section-slider">
    <div id="home-slider">
      <div class="owl-carousel ">

    
        <?php $noslide = 1;

            foreach ($slider as $slider) {  ?>

          <div class="item fade-box">
            <a href="<?= $slider['website'] ?>" title="<?= $slider['title_gallery'] ?>">
              <picture>
                <source class="owl-lazy" data-srcset="<?= base_url('assets/upload/image/' . $slider['picture']) ?>" media="(max-width: 767px)">
                <source class="owl-lazy" data-srcset="<?= base_url('assets/upload/image/' . $slider['picture']) ?>" media="(min-width: 768px)">
                <img class="owl-lazy" data-src="<?= base_url('assets/upload/image/' . $slider['picture']) ?>" alt="<?= $slider['title_gallery'] ?>">
              </picture>
            </a>

          <?php if ($slider['status_text'] === 'show') {  ?>
          <div class="item-cap lazyload ">
            <div class="item-cap-content" data-animation-in="slideInUp" data-animation-out="animate-out">
              <h2 class="text-white"><?= $slider['title_gallery'] ?></h2>
              <p class="text-white">
              <?= $slider['content'] ?>
              </p>
              <div class="site-button black">
                <a href="<?= $slider['website'] ?>" title="<?= $slider['title_gallery'] ?>">
                    <span>Xem thêm</span><em></em>
                </a>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <?php $noslide++; } ?>
      </div>
    </div>
  </section>



  <!-- ======= About Us Section ======= -->
  <section class="section section-intro bg-gray">
    <div class="container">
        <div class="wrapper-home-intro">
            <div class="row-flex">
                <div class="col-md-4 col-sm-5 col-sm-12">
                    <div class="s-title">
                        <span>Giới thiệu</span>						
                        <h2>
                          <?= $config['nameweb'] ?>
                        </h2>
                    </div>
                </div>
                <div class="col-md-8 col-sm-7 col-sm-12">
                    <div class="s-content">
                        <?= $config['intro'] ?>                        
                        <a class="site-button black" href="<?= $slider['website'] ?>">
                            <span>Đọc thêm</span><em></em>
                        </a>
                    </div>
                </div>
            </div>
            <div class="hilite-title text-right bdr-gray bdr-right">
                <strong>18 Năm</strong>
                <span class="text-black">Kinh nghiệm làm việc</span>
            </div>
        </div>
    </div>
  </section>

  <!-- End About Us Section -->

    <!-- =======  Services Section ======= -->
    <section class="section section-service bg-white">
      <div class="container">
        <div class="wrapper-home-service">
          <div class="s-title"><h2>Dịch vụ</h2></div>
          <div class="row s-content list-service-home">
            <div class="col-md-4 col-sm-4 col-xs-12 item--service">
              <div class="box-service zoom-slow">
                <div class="img-service fade-box">
                  <a href="<?= base_url() ?>/pages/read/dich-vu" aria-label="Nextcompany thiết kế nội thất Hiện đại - Sang trọng" class="banner-hover-effect">
                    <img class=" lazyloaded" data-src="//theme.hstatic.net/1000387172/1000670825/14/h-service_item_1.jpg?v=138" src="//theme.hstatic.net/1000387172/1000670825/14/h-service_item_1.jpg?v=138" alt="Nextcompany thiết kế nội thất Hiện đại - Sang trọng">
                  </a>
                </div>
                <div class="desc-service">
                    <h3><a href="<?= base_url() ?>/pages/read/dich-vu">Nextcompany thiết kế nội thất Hiện đại - Sang trọng</a></h3>							
                    <a href="<?= base_url() ?>/pages/read/dich-vu" class="site-button black"> 
                      <span>Xem thêm </span>
                      <em></em>
                    </a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 item--service">
              <div class="box-service zoom-slow">
                <div class="img-service fade-box">
                  <a href="<?= base_url() ?>/pages/read/dich-vu" aria-label="Nextcompany  thi công xây dựng Chuyên nghiệp - Tâm huyết" class="banner-hover-effect">
                    <img class=" lazyloaded" data-src="//theme.hstatic.net/1000387172/1000670825/14/h-service_item_2.jpg?v=138" src="//theme.hstatic.net/1000387172/1000670825/14/h-service_item_2.jpg?v=138" alt="Nextcompany  thi công xây dựng Chuyên nghiệp - Tâm huyết">
                  </a>
                </div>
                <div class="desc-service">
                    <h3><a href="<?= base_url() ?>/pages/read/dich-vu">Nextcompany  thi công xây dựng Chuyên nghiệp - Tâm huyết</a></h3>							<a href="<?= base_url() ?>/pages/read/dich-vu" class="site-button black"> <span>Xem thêm </span><em></em></a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 item--service">
              <div class="box-service zoom-slow">
                <div class="img-service fade-box">
                  <a href="<?= base_url() ?>/pages/read/dich-vu" aria-label="Nextcompany  thiết kế kiến trúc  Sáng tạo - Đậm chất phương Tây" class="banner-hover-effect">
                    <img class=" lazyloaded" data-src="//theme.hstatic.net/1000387172/1000670825/14/h-service_item_3.jpg?v=138" src="//theme.hstatic.net/1000387172/1000670825/14/h-service_item_3.jpg?v=138" alt="Nextcompany  thiết kế kiến trúc  Sáng tạo - Đậm chất phương Tây">
                  </a>
                </div>
                <div class="desc-service">
                    <h3><a href="<?= base_url() ?>/pages/read/dich-vu">Nextcompany  thiết kế kiến trúc  Sáng tạo - Đậm chất phương Tây</a></h3>							<a href="<?= base_url() ?>/pages/read/dich-vu" class="site-button black"> <span>Xem thêm</span><em></em></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- End Featured Services Section -->

    <!-- who is we-->
    <section class="section section-about bg-gray">
      <div class="container">
        <div class="wrapper-home-about">
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-4 col-left">
              <div class="s-banner fade-box">
                <img class=" lazyloaded" data-src="//theme.hstatic.net/1000387172/1000670825/14/h-about_banner.jpg?v=138" src="//theme.hstatic.net/1000387172/1000670825/14/h-about_banner.jpg?v=138" alt="Chúng tôi là ai?">
              </div>
            </div>
            <div class="col-xs-12 col-sm-7 col-md-8 col-right">
              <div class="s-title">
                <h2>
                  Chúng tôi là ai?
                </h2>
              </div>
              <div class="s-content">
                <?= $config['description'] ?>
                <a class="site-button black" href="/">
                  <span>Xem thêm</span><em></em>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End who is we -->

    <!-- parallax -->
    <section class="section section-parallax prl-one lazyloaded">
      <div class="container">
        <div class="row-flex">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 some-facts-counter ">

              <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="icon-box-wraper p-a10 text-white m-b30">
                <span class="counter" data-counter="127">127</span>						
                <div class="ic-separator"></div>	
                <span class="text">Khách hàng hài lòng</span>					
              </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="icon-box-wraper p-a10 text-white m-b30">
                  <span class="counter" data-counter="150">150</span>						
                  <div class="ic-separator"></div>	
                  <span class="text">Dự án hoàn thành</span>					
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="icon-box-wraper p-a10 text-white m-b30">
                  <span class="counter" data-counter="10">10</span>						
                  <div class="ic-separator"></div>	
                  <span class="text">Chứng nhận</span>					
                </div>
              </div>

          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
            <div class="some-facts">
              <div class="s-title text-white">
                <span>Một vài</span>
                <h2 class="text-white">điều thú vị về công ty</h2>
                <p>Chúng tôi mong muốn trở thành nhà cung cấp dịch vụ xây dựng dân dụng giá trị gia tăng, hướng đến trở thành một mô hình chuẩn mực và tiên phong trong lĩnh vực xây dựng tại thị trường Việt Nam.</p>					
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end parallax-->


    <!-- section policy -->
    <section class="section section-policy">
      <div class="container">
        <div class="flexMargin">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="box-policy text-center">
              <div class="icon-policy fade-box">
                <img data-src="//theme.hstatic.net/1000387172/1000670825/14/h-policy_1.png?v=138" src="//theme.hstatic.net/1000387172/1000670825/14/h-policy_1.png?v=138" class=" lazyloaded" alt="Hỗ trợ">
              </div>
              <div class="desc-policy">
    <h3>Hỗ trợ</h3><p>Chúng tôi luôn sẵn sàng hỗ trợ trực tuyến 24/7. Hãy liên hệ với chúng tôi để giải đáp mọi thắc mắc.</p>					</div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="box-policy text-center">
              <div class="icon-policy fade-box">
                <img data-src="//theme.hstatic.net/1000387172/1000670825/14/h-policy_2.png?v=138" src="//theme.hstatic.net/1000387172/1000670825/14/h-policy_2.png?v=138" class=" lazyloaded" alt="Liên hệ">
              </div>
              <div class="desc-policy">
    <h3>Liên hệ</h3><p>Liên hệ đường dây nóng hoặc gửi mail vào hộp thư của chúng tôi nếu bạn có bất cứ đề nghị hay thắc mắc gì.</p>					</div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="box-policy text-center">
              <div class="icon-policy fade-box">
                <img data-src="//theme.hstatic.net/1000387172/1000670825/14/h-policy_3.png?v=138" src="//theme.hstatic.net/1000387172/1000670825/14/h-policy_3.png?v=138" class=" lazyloaded" alt="Đối tác">
              </div>
              <div class="desc-policy">
    <h3>Đối tác</h3><p>NextCompany rất vui khi được hợp tác cùng các bạn. Hãy liên lạc với chúng tôi nếu các bạn có ý định cộng tác nhé.</p>					</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- end section policy-->

    <!-- what we do -->
    <section class="section section-whatwedo bg-gray">
      <div class="container">
        <div class="row">

        <div class="col-md-5 col-sm-12 col-xs-12 col-left">
            <div class="jet-progress-bar" data-percent="95">
              <div class="jet-progress-bar__inner">
                <div class="jet-progress-bar__title">
                  <span class="jet-progress-bar__title-text">Dịch vụ CSKH thân thiện</span>
                </div>
                <div class="jet-progress-bar__wrapper">
                  <div class="jet-progress-bar__status-bar" style="width: 95%;">
                    <div class="jet-progress-bar__percent">
                      <span class="jet-progress-bar__percent-value">95</span>
                      <span class="jet-progress-bar__percent-suffix">%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="jet-progress-bar" data-percent="80">
              <div class="jet-progress-bar__inner">
                <div class="jet-progress-bar__title">
                  <span class="jet-progress-bar__title-text">Áp dụng công nghệ mới</span>
                </div>
                <div class="jet-progress-bar__wrapper">
                  <div class="jet-progress-bar__status-bar" style="width: 80%;">
                    <div class="jet-progress-bar__percent">
                      <span class="jet-progress-bar__percent-value">80</span>
                      <span class="jet-progress-bar__percent-suffix">%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="jet-progress-bar" data-percent="75">
              <div class="jet-progress-bar__inner">
                <div class="jet-progress-bar__title">
                  <span class="jet-progress-bar__title-text">Khách hàng hài lòng 100%</span>
                </div>
                <div class="jet-progress-bar__wrapper">
                  <div class="jet-progress-bar__status-bar" style="width: 75%;">
                    <div class="jet-progress-bar__percent">
                      <span class="jet-progress-bar__percent-value">75</span>
                      <span class="jet-progress-bar__percent-suffix">%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="jet-progress-bar" data-percent="60">
              <div class="jet-progress-bar__inner">
                <div class="jet-progress-bar__title">
                  <span class="jet-progress-bar__title-text">Đảm bảo chất lượng</span>
                </div>
                <div class="jet-progress-bar__wrapper">
                  <div class="jet-progress-bar__status-bar" style="width: 60%;">
                    <div class="jet-progress-bar__percent">
                      <span class="jet-progress-bar__percent-value">60</span>
                      <span class="jet-progress-bar__percent-suffix">%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-7 col-sm-12 col-xs-12 col-right pull-right">
            <div class="s-title">
              <h2 class="hTitle">
                Chúng tôi làm gì?
              </h2>
            </div>
            <div class="s-content">
              <p class="desc"><?= $config['whatwedo']?></p>
            </div>
          </div>

          

        </div>
      </div>
    </section>
    <!-- end what we do -->

    
    <?php include 'news.php'?>
    

    <!-- section video -->

    <section class="section section-video bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-5 col-xs-12">
            <div class="fancybox-video fade-box" style="height:460px">
              <a data-fancybox="" href="https://www.youtube.com/watch?v=aRh_eUQSmIg">
                <img class=" lazyloaded" data-src="//theme.hstatic.net/1000387172/1000670825/14/h-video_banner.jpg?v=138" alt="Văn hoá và hoạt động" src="//theme.hstatic.net/1000387172/1000670825/14/h-video_banner.jpg?v=138">
                <div class="video-btn">
                  <svg height="108" width="108" xmlns="http://www.w3.org/2000/svg">
                    <circle stroke-opacity="0.1" fill="#FFFFFF" stroke-width="5" cx="54" cy="54" r="48" class="circleanim-svg__circle-back"></circle>
                    <circle stroke-width="5" fill="#FFFFFF" cx="54" cy="54" r="48" class="circleanim-svg__circle-front" transform="rotate(50 54 54) "></circle>
                    <path d="M62.1556183,56.1947505 L52,62.859375 C50.6192881,63.7654672 49.5,63.1544098 49.5,61.491212 L49.5,46.508788 C49.5,44.8470803 50.6250889,44.2383396 52,45.140625 L62.1556183,51.8052495 C64.0026693,53.0173767 63.9947588,54.9878145 62.1556183,56.1947505 Z" fill="#FFFFFF"></path>
                  </svg>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-7 col-sm-7 col-xs-12 col-right d-flex align-items-center">
            <div>
              <div class="s-title">
                <h2>
                  Văn hoá - Hoạt động
                </h2>
              </div>
              <div class="s-content">
                <p><?= $config['cultura_activiti']?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end section video -->


    <!-- parallax 2 -->
    <section class="section section-parallax prl-two lazyloaded">
      <div class="container">
        <div class="s-title text-center">
          <h2 class="text-white">Hãy liên hệ ngay với chúng tôi! <br>
          <?= $config['slogan']?></h2>
        </div>
      </div>
    </section>
    <!-- end parallax 2 -->

    <!-- section project -->
    <section class="section section-project bg-white">
	<div class="container">
		<div class="s-title">
			<h2>
				<a href="/collections/hot-products">
					Dự án
				</a>
			</h2>
		</div>
		<div class="s-content">
			<div class="cbr-gallery row wrapper-project-1">
				<div class="col-md-3 col-sm-6 col-xs-6 pd-0 col-pj">



            <?php foreach($project as $item) {?>


              <div class="gallery-box fade-box product-resize" style="height: 295px">
                <div class="overlay">
                  <a href="<?= base_url().'/news/read/'.$item['slug_news']?>" title="<?= $item['title_news'] ?>" class="image-resize">			
                    <picture>
                      <source media="(max-width: 480px)" data-srcset="<?= base_url('assets/upload/image/' . $item['picture']) ?>" srcset="//product.hstatic.net/1000387172/product/project-preview10_4da8b8de4cc74dceb71e0df8b60ef2c0_medium.jpg">
                      <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="<?= base_url('assets/upload/image/' . $item['picture']) ?>" srcset="<?= base_url('assets/upload/image/' . $item['picture']) ?>">
                      <source media="(min-width: 768px)" data-srcset="<?= base_url('assets/upload/image/' . $item['picture']) ?>" srcset="<?= base_url('assets/upload/image/' . $item['picture']) ?>">
                      <img data-src="<?= base_url('assets/upload/image/' . $item['picture']) ?>" src="<?= base_url('assets/upload/image/' . $item['picture']) ?>" class=" lazyloaded" alt=" Incredible House In Scottish Highland ">
                    </picture>
                  </a>
                  <div class="hover-effect"></div>
                  <div class="text-wrap-title">
                    <h3 class="pro-title"><a href="<?= base_url().'/news/read/'.$item['slug_news']?>" title="<?= $item['title_news'] ?>"><?= $item['title_news'] ?></a></h3>
                    <div class="text-wrap-price">
                      <p class="pro-price">
                        <span class="pro-contact">Liên hệ</span>
                      </p>
                    </div>
                    <div class="text-wrap-link">
                      <a class="site-button black" href="<?= base_url().'/news/read/'.$item['slug_news']?>">
                        <span>Xem chi tiết</span><em></em>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 pd-0 col-pj">

            <?php }?>

            </div>
          </div>
        </div>
        <div class="hilite-title text-right bdr-gray bdr-right">
          <strong>Công trình</strong>
          <span class="text-black">Tiêu biểu</span>
        </div>
      </div>
    </section>
    <!-- end of section project -->

    <!-- section clients -->
    <section class="section section-clients bg-gray">
      <div class="container">
        <div class="list-client owl-carousel owl-loaded owl-drag" id="owl-partner-logo">
          <?php foreach($client as $client){
          ?>
          <div class="box-client fade-box">
            <img class="image-boxes lazyloaded" style="max-width:200px;max-height: 60px"
            data-src="<?php echo base_url().'/assets/upload/client/'.$client['picture']?>" 
            alt="<?= $client['name']?>" src="<?php echo  base_url().'/assets/upload/client/'.$client['picture']?>">
          </div>
          <?php } ?>
          
        </div>
      </div>
    </section>
    <!-- end section clients -->

    
</main><!-- End #main -->
