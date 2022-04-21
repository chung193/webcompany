<?php
use App\Models\News_model;
$m_news = new News_model();
$sidebar = $m_news->category(3);
// $footer_intro = $m_news->beranda_intro();
?>

<main class="main-content-theme">
						
<div id="blog">	
	<section class="section-parallax section-parallax-breadcrumb bg-top">
		<div class="overlay-main"></div>
		<div class="banner-title-outer">
			<div class="container">
				<div class="banner-title-name">
					<h1 class="text-white">Tin tức</h1>
				</div>
				<div class="row"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
	<ol class="breadcrumb breadcrumb-arrows" itemscope="" itemtype="http://schema.org/BreadcrumbList">
		<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
			<a href="/" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
			<meta itemprop="position" content="1">		
		</li>
				
		
		<li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
			<span itemprop="item" content="https://nextcompany.myharavan.com/blogs/news"><span itemprop="name">Tin tức</span></span>
			<meta itemprop="position" content="2">
		</li>
		
		
	</ol>
</div></div>
			</div>
		</div>
	</section>
	<section class="section section-list-blog">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 blog-area">
					<div class="row news-masonry">
						
						<!-- Begin: Nội dung blog -->      
						
            <?php foreach ($news as $news) { ?>
						
						<div class="masonry-item col-md-6 col-sm-6 col-xs-12">
							<div class="blog-post blog-grid date-style-1 Leading">
								<div class="wt-post-media wt-img-effect zoom-slow">
									<a href="<?= base_url('news/read/' . $news['slug_news']) ?>" title="<?= $news['title_news'] ?>">
										<img src="<?= base_url('assets/upload/image/' . $news['picture']) ?>" alt="<?= $news['title_news'] ?>">
									</a>
								</div>
								<div class="wt-post-info p-t30 text-black">
									<div class="wt-post-title">
										<h3 class="post-title">
											<a href="<?= base_url('news/read/' . $news['slug_news']) ?>" title="<?= $news['title_news'] ?>"><?= $news['title_news'] ?></a>
										</h3>
									</div>
									<div class="wt-post-meta ">
										<ul>
											<li class="post-date">
												<span><?= $news['date']?></span>
											</li>
											<li class="post-author">
												<span>	Người viết: <?= $news['name']?></span>
											</li>
										</ul>
									</div>
									<div class="wt-post-text">
										<p><?= $news['summary'] ?></p>
									</div>
									<a href="<?= base_url('news/read/' . $news['slug_news']) ?>" class="site-button black"><span>Đọc thêm</span><em></em></a>
								</div>
							</div>
						</div>
						
						<?php } ?>
						
					</div>
					<div class="row">
						
	
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
										<span class="cate-blog"><a href="<?= base_url('news/category/' . $news['slug_category']) ?>"><?= $news['name_category']?></a></span>
										<h3><a href="<?= base_url('news/read/' . $news['slug_news']) ?>"><?= $news['title_news']?></a></h3>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
						
						
						<div class="menu-blog">
							<div class="group-menu">
								<div class="sidebarblog-title title_block">
									<h2>Danh mục</h2>
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
													
													<?php foreach($sidebar as $item){?>
													<li>
														<a href="<?= base_url().'/news/read/'.$item['slug_news'] ?>" title="<?= $item['title_news'] ?>"><?= $item['title_news'] ?></a>
													</li>
													<?php } ?>
												</ul>
											</li>
											
											
											
											<li class="">
												<a href="<?= base_url().'/news/category/du-an'?>" title="Dự án" target="_self">
													Dự án
												</a>
											</li>
											
											
											<li class="active">
												<a href="<?= base_url().'news/category/tin-tuc'?>" title="Tin tức" target="_self">
													Tin tức
												</a>
											</li>
											
											
											
											<li class="">
												<a href="<?= base_url().'/news/read/lien-he'?>" title="Liên hệ" target="_self">
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
</div></main>

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