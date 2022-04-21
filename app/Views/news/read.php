<?php use App\Models\news_model;

$m_news = new news_model();
$sidebar  = $m_news->sidebar();
?>

<main class="main-content-theme">
						<div id="article">
	<section class="section-parallax section-parallax-breadcrumb bg-top">
		<div class="overlay-main"></div>
		<div class="banner-title-outer">
			<div class="container">
				<div class="banner-title-name">
					<span class="text-white">Tin tức</span>
				</div>

				<div class="row"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5 ">
          <ul class="breadcrumb breadcrumb-arrows">
            <li>
              <a href="/" target="_self" ><span>Trang chủ</span></a>
            </li>
            
            <li>
              <a href="/blogs/news" >
                Tin tức
              </a>
            </li>
            <li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
              <span ><span ><?= $title ?></span></span>
            </li>
            
          </ul>
        </div>
        </div>
			</div>
		</div>
	</section>
	<section class="section section-content-article">
		<div class="container">
			<div class="row wrapper-row pd-page">  
				<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 article-area">
					<div class="content-page">
						<div class="article-content">
							<div class="box-article-heading clearfix">		
								
								
								
								
								
								<div class="background-img">
									<img src="<?= base_url('assets/upload/image/' . $news['picture']) ?>" alt="<?= $news['title_news'] ?>">
								</div>
								<h1 class="sb-title-article"><?= $news['title_news'] ?></h1>
								<ul class="article-info-more">
									<li> Người viết: <?= $news['name'] ?> lúc <time pubdate="" datetime="<?= $news['date'] ?>"><?= $news['date'] ?></time></li>
									<li><i class="fa fa-file-text-o"></i><a href="<?= base_url().'news/category/tin-tuc'?>"> <?= $news['name_category'] ?></a> </li>
										
								</ul>								
							</div>
							<div class="article-pages"><p><?= $news['content'] ?></p></div>
							
							<div class="post-navigation">							
								
								<span class="left">
									<svg class="arrow-left" role="presentation" viewBox="0 0 11 18">
										<path d="M9.5 1.5L1.5 9l8 7.5" stroke-width="2" stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="square"></path>
									</svg>
									<a href="/blogs/news/triangle-concrete-house-on-lake" title="">Bài trước</a>
								</span>
								
															
							</div>
						</div>
						
					</div>
				</div> 
				<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar-area">
					<div class="sidebar-blog">
						
						
						
						
						
						<div class="news-latest clearfix">
							<div class="sidebarblog-title title_block">
								<h2>
									Bài viết mới nhất
								</h2>
							</div>
							<div class="list-news-latest layered">
								
								<?php foreach($news_last as $news){?>
								<div class="item-article clearfix">
									<div class="number"></div>
									<div class="post-content">
										<span class="cate-blog"><a href=""><?= $news['name_category']?></a></span>
										<h3><a href="<?= base_url('news/read/' . $news['slug_news']) ?>"><?= $news['title_news']?></a></h3>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
						
						
						<div class="menu-blog">
							<div class="group-menu">
								<div class="sidebarblog-title title_block">
									<h2>Danh mục blog</h2>
								</div>
								<div class="layered layered-category">
									<div class="layered-content">
										<ul class="tree-menu">
											
											
											<li class=" has-child level0 lv active">
												<a class="tree-menu-link icon-subnav" href="<?= base_url() ?>" title="Trang chủ" target="_self">
													<span class="">Trang chủ</span>
												</a>
											</li>
											
											
											
											<li class=" has-child level0 lv ">
												<a class="tree-menu-link icon-subnav" href="/pages/about-us" title="Giới thiệu" target="_self">
													<span class="">Giới thiệu</span>
													<span class="icon-control icon-plus-submenu"></span>
												</a>
												<ul class="tree-menu-sub">
													
													
													<li>
														<a href="/pages/dich-vu" title="Tầm nhìn sứ mệnh">Tầm nhìn sứ mệnh</a>
													</li>
													
													
													
													<li>
														<a href="/pages/about-us" title="Lịch sử hình thành">Lịch sử hình thành</a>
													</li>
													
													
													
													<li>
														<a href="/pages/dieu-khoan-dich-vu" title="Điều khoản dịch vụ">Điều khoản dịch vụ</a>
													</li>
													
													
													
													<li>
														<a href="/pages/chinh-sach-bao-mat" title="Chính sách bảo mật">Chính sách bảo mật</a>
													</li>
													
													
												</ul>
											</li>
											
											
											
											<li class="">
												<a href="/collections/all" title="Dự án" target="_self">
													Dự án
												</a>
											</li>
											
											
											<li class="active">
												<a href="<?= base_url().'news/category/tin-tuc'?>" title="Tin tức" target="_self">
													Tin tức
												</a>
											</li>
											
											
											
											<li class="">
												<a href="/pages/lien-he" title="Liên hệ" target="_self">
													Liên hệ
												</a>
											</li>
											
											
										</ul>
									</div>
								</div>
							</div>
						</div>
						 
					</div>
				</div>

			</div>
		</div>
	</section>
</div>
</main>

<script>
  $(document).on("click", ".tree-menu .tree-menu-link .icon-control", function(e){
	e.preventDefault();
	if ($(this).parent().parent().hasClass('active')) {
		$(this).parent().parent().removeClass('active');
		$(this).parent().siblings('ul').slideUp();
	}
	else {
		if( $(this).parent().parent().hasClass("level0") || $(this).parent().parent().hasClass("level1")){
			$(this).parent().parent().siblings().find("ul").slideUp();
			$(this).parent().parent().siblings('li.lv').removeClass("active");
		}
		$(this).parent().parent().addClass('active');
		$(this).parent().siblings('ul').slideDown();
	}
});
</script>