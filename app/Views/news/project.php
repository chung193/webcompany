<?php use App\Models\Menu_model;

$menu    = new Menu_model();
// $news  = $menu->news();
$profil  = $menu->profil();
$service = $menu->service();
?>
<main class="main-content-theme">
						
<div id="collection" class="collection-page">
	<section class="section-parallax bg-top" style="background-image: url(//theme.hstatic.net/1000387172/1000670825/14/collection_banner.jpg?v=138)">
		<div class="overlay-main"></div>
		<div class="banner-title-outer">
			<div class="container">
				<div class="banner-title-name">
					<h1 class="text-white">Tất cả dự án</h1>
				</div>
				<div class="row"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
	<ol class="breadcrumb breadcrumb-arrows">
		<li>
			<a href="/" target="_self" ><span style="color:white">Trang chủ</span></a>
		</li>
		
		<li>
			<a href="/collections" target="_self" >
				<span >Danh mục</span>
			</a>
		</li>
		
		
		<li class="active">
			<span content="https://nextcompany.myharavan.com/collections/all"><span>Dự án</span></span>
		</li>
		
		
		
	</ol>
</div></div>
			</div>
		</div>
	</section>
	<div id="collection-body" class="">
		<section class="flat-row image-box">
			<div class="container">
				<div class="cbr-gallery row wrapper-project-1">
					
					
					
						



                    <?php foreach ($news as $value) {  ?>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-12 col-pj">
                        <div class="gallery-box fade-box product-resize fixheight" style="height: 295px;">
                            <div class="overlay">
                                <a href="<?= base_url('news/read/' . $value['slug_news']) ?>" title="Apartment Lumiere Riverside" class="image-resize" style="height: 295px;">			
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="<?= base_url('assets/upload/image/' . $value['picture']) ?>" srcset="<?= base_url('assets/upload/image/' . $value['picture']) ?>">
                                        <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="<?= base_url('assets/upload/image/' . $value['picture']) ?>" srcset="<?= base_url('assets/upload/image/' . $value['picture']) ?>">
                                        <source media="(min-width: 768px)" data-srcset="<?= base_url('assets/upload/image/' . $value['picture']) ?>" srcset="<?= base_url('assets/upload/image/' . $value['picture']) ?>">
                                        <img data-src="<?= base_url('assets/upload/image/' . $value['picture']) ?>" src="<?= base_url('assets/upload/image/' . $value['picture']) ?>" class=" lazyloaded" alt=" <?= $value['title_news'] ?> ">
                                    </picture>
                                </a>
                                <div class="hover-effect"></div>
                                <div class="text-wrap-title">
                                    <h3 class="pro-title"><a href="<?= base_url('news/read/' . $value['slug_news']) ?>" title="<?= $value['title_news'] ?>"><?= $value['title_news'] ?></a></h3>
                                    <div class="text-wrap-price">
                                        <p class="pro-price">
                                            <span class="pro-contact">Liên hệ</span>
                                        </p>
                                    </div>
                                    <div class="text-wrap-link">
                                        <a class="site-button black" href="<?= base_url('news/read/' . $value['slug_news']) ?>">
                                            <span>Xem chi tiết</span><em></em>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
					
					
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-12 col-pj">
						

					</div>
					
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						<div class="row sortpagibar pagi text-center">
							

						</div>
					</div>
					
				</div>
			</div>
		</section>
	</div>
</div>
</main>