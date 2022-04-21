<main class="main-content-theme">
						<div class="layout-pageContact">
	<section class="section-parallax section-parallax-breadcrumb bg-top">
		<div class="overlay-main"></div>
		<div class="banner-title-outer">
			<div class="container">
				<div class="banner-title-name">
					<span class="text-white">Liên hệ</span>
				</div>
				<div class="row"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
	<ol class="breadcrumb breadcrumb-arrows" itemscope="" itemtype="http://schema.org/BreadcrumbList">
		<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
			<a href="/" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
			<meta itemprop="position" content="1">		
		</li>
		
		<li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
			<span itemprop="item" content="https://nextcompany.myharavan.com/pages/lien-he"><span itemprop="name">Liên hệ</span></span>
			<meta itemprop="position" content="2">
		</li>
		
	</ol>
</div></div>
			</div>
		</div>
	</section>
	<section class="section section-content-page-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12 box-heading-contact">
					
					<div class="box-map">
                    <?= $config['google_map']?>
					</div>
					
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12  wrapbox-content-page-contact">
					<div class="header-page-contact clearfix">
						<h1>Liên hệ</h1>
					</div>
					<div class="box-info-contact">
                        <p><strong><?= $pages['summary']?></strong></p>
                        <p><?= $pages['content']?></p>
						<ul class="list-info">
							<li>
								<p>Địa chỉ chúng tôi</p>
								<p><strong><?= $config['address']?></strong></p>
							</li>
							<li>
								<p>Email chúng tôi</p>
								<p><strong><?= $config['email']?></strong></p>
							</li>
							<li>
								<p>Điện thoại</p>
								<p><strong><?= $config['phone']?></strong></p>
							</li>
							<li>
								<p>Thời gian làm việc</p>
								<p><strong>Thứ 2 đến Thứ 6 từ 8h đến 18h</strong></p>
							</li>
						</ul>
					</div>
					<div class="box-send-contact">
						<h2>Gửi thắc mắc cho chúng tôi</h2>
						<div id="col-left contactFormWrapper">
							<form accept-charset="UTF-8" action="/contact" class="contact-form" method="post">
                            <input name="form_type" type="hidden" value="contact">
                            <input name="utf8" type="hidden" value="✓">

							
							<div class="contact-form">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="input-group">
											<input required="" type="text" name="contact[name]" class="form-control" placeholder="Tên của bạn" aria-describedby="basic-addon1">
										</div>
									</div>
									<div class="col-sm-6 col-xs-12">
										<div class="input-group">
											<input required="" type="text" name="contact[email]" class="form-control" placeholder="Email của bạn" aria-describedby="basic-addon1">
										</div>
									</div>
									<div class="col-sm-6 col-xs-12">
										<div class="input-group">
											<input pattern="[0-9]{10,12}" required="" type="text" name="contact[phone]" class="form-control" placeholder="Số điện thoại của bạn" aria-describedby="basic-addon1">
										</div>
									</div>
									<div class="col-sm-12 col-xs-12">
										<div class="input-group">
											<textarea name="contact[body]" placeholder="Nội dung"></textarea>
										</div>
										<div class="sitebox-recaptcha">
											This site is protected by reCAPTCHA and the Google
											<a href="https://policies.google.com/privacy" target="_blank" rel="noreferrer">Privacy Policy</a> 
											and <a href="https://policies.google.com/terms" target="_blank" rel="noreferrer">Terms of Service</a> apply.
										</div>
									</div>
									<div class="col-xs-12">
										<button class="site-button black"><span>Gửi cho chúng tôi</span><em></em></button>
									</div>
								</div>
							</div>
							
<input id="74a91f94e9324be9af4800c53259a994" name="g-recaptcha-response" type="hidden" value="03AGdBq278hWmARuIG8S8tttGeM_K9xQOzBl6DuW2gmZE9boKQIHPdele_53_DEU_WJ5I0MYoJW0dc4cE3CRst3Eokwoyqw9CHfVsLsqQw3CzESSIiRx0LsqRApsdZywAQfL3g8WWAVt-v9ZYWncvd3MEyBINqkGRq0FzETnRw_wL2_g73UAQN_7AfuS3xZlFarzWLh_oVwFkEiFpOAYCdJiS54-oE4ExjotJQzV1qFOzLXm-uVVz2ENZzM7iuLYGy4LGgHb7ReJv2WhFawvVgNlSO7S2X0UtDfcrk-ME9lBWSK588gDU9RAUupQRtk1uwCw8Xek9pj3edmkPITLvX3oG_SRTAc0hBcl0MVSalXyHL9urMvwQ97qrukiDMZljd3JMHPbUMpd5NeCpWXPgxBn7FQz4jrbyaZ24O5TZYGCJgk-SCoY10DUr0JQc2aDsamvGymu4mBhBnhrIAiLECTYnjTR-rxI-Muw"><script src="https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-"></script><script>grecaptcha.ready(function() {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action: 'submit'}).then(function(token) {document.getElementById('74a91f94e9324be9af4800c53259a994').value = token;});});</script></form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

					</main>