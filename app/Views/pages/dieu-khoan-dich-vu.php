<main class="main-content-theme">
						<div class="pageAbout-us page-layout">
	<section class="section-parallax section-parallax-breadcrumb bg-top">
		<div class="overlay-main"></div>
		<div class="banner-title-outer">
			<div class="container">
				<div class="banner-title-name">
					<span class="text-white"><?= $pages['title_pages'] ?></span>
				</div>
				<div class="row"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
	<ol class="breadcrumb breadcrumb-arrows" itemscope="" itemtype="http://schema.org/BreadcrumbList">
		<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
			<a href="/" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
			<meta itemprop="position" content="1">		
		</li>
		
		<li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
			<span itemprop="item" content="https://nextcompany.myharavan.com/pages/dieu-khoan-dich-vu"><span itemprop="name"><?= $pages['title_pages'] ?></span></span>
			<meta itemprop="position" content="2">
		</li>
		
	</ol>
</div></div>
			</div>
		</div>
	</section>
	<section class="section section-content-page">
		<div class="container">
			<div class="row wrapper-row pd-page">
				<div class="col-md-9 col-sm-12 col-xs-12 col-md-push-3">
					<div class="page-wrapper">
						<div class="heading-page">
							<h1><?= $pages['title_pages'] ?></h1>
						</div>
						<div class="wrapbox-content-page">
							<div class="content-page ">
								<p>
									<span class="wysiwyg-font-size-medium"><strong><?= $pages['summary'] ?></strong></span>
								</p>
								<?= $pages['content'] ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-12 col-xs-12 col-md-pull-9">
					<div class="sidebar-page">
						
						<div class="group-menu">
							<div class="page_menu_title title_block">
								<h2>Danh mục trang<span class="fa fa-angle-down"></span></h2>
							</div>
							<div class="layered layered-category">
								<div class="layered-content">
									<ul class="tree-menu">
										
										
										<li class="">
											<a href="/search" title="Tìm kiếm" target="_self">
												Tìm kiếm
											</a>
										</li>
										
										<?php foreach($list_page as $page){ ?>
										
										<li class="">
											<a href="<?= base_url().'/pages/read/'.$page['slug_pages']?>" title="<?= $page['title_pages']?>" target="_self">
												<?= $page['title_pages']?>
											</a>
										</li>

										<?php } ?>
										
									</ul>
								</div>
							</div>
						</div>
						
						
						<div class="box_image visible-lg visible-md">
							<div class="banner">
								<a href="/collections/all" class="banner-hover-effect" aria-label="NextCompany">
									<img src="//theme.hstatic.net/1000387172/1000670825/14/page_banner.jpg?v=138" alt="NextCompany">
								</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
</div>



					</main>