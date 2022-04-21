<?php 
use App\Models\news_model;

$m_news = new news_model();
$relate  = $m_news->relate();
?>

<main class="main-content-theme">
	<div id="product" class="productDetail-page">
	<section class="section-parallax section-parallax-breadcrumb bg-top">
		<div class="overlay-main"></div>
		<div class="banner-title-outer">
			<div class="container">
				<div class="banner-title-name">
					<span class="text-white">Dự án</span>
				</div>
				<div class="row"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
	<ol class="breadcrumb breadcrumb-arrows" itemscope="" itemtype="http://schema.org/BreadcrumbList">
		<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
			<a href="/" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
			<meta itemprop="position" content="1">		
		</li>
		
		
		<li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
			<span itemprop="item" content="https://nextcompany.myharavan.com/products/sunshinecuty-nextcompany">
				<span itemprop="name"><?= $news['title_news']?></span>
			</span>
			<meta itemprop="position" content="3">
		</li>
		
	</ol>
</div></div>
			</div>
		</div>
	</section>
	<div class="product-detail-wrapper ">
		<div class="container">
			
			<div class="row product-detail-main productDetail_style_01 stickem-container">

				<div class="col-md-7 col-sm-12 col-xs-12 pull-right">
					<div class="product-gallery">
						<div class="productGallery_image product-image-detail box__product-gallery">
							<div id="lightSlider" class="site-box-content slide_product ">
								<?php 
									$arr = explode(",",$news['list_image']);
									//print_r($arr);die();
									foreach($arr as $item){
								?>
								<div id="gallery-scroll-1" data-thumb="<?= base_url().'/assets/upload/image/'.$item?>"  class="product-gallery-item gallery-item" data-image="<?= base_url().'/assets/upload/image/'.$item?>">
									<a data-fancybox="gallery" href="<?= base_url().'/assets/upload/image/'.$item?>">
										<img class="product-image-feature" src="<?= base_url().'/assets/upload/image/'.$item?>" alt="<?= $news['title_news']?>">
									</a>										
								</div>	
								<?php } ?>
								
							</div>
						</div>
					</div>							
				</div>

				<div class="col-md-5 col-sm-12 col-xs-12 product-content-desc sticky-product-detail stickem" id="detail-product">

					<div class="product-title">
						<h1><?= $news['title_news']?></h1>
						<!-- <span id="pro_sku"><strong>SKU: </strong>DA-004</span>
						<span class="pro-soldold hidden">Hết hàng</span> -->
					</div>
					<div class="product-options">
						<div class="product-price" id="price-preview">
							<!-- <span class="pro-contact">Liên hệ</span> -->
						</div>
						<div class="product-variants" id="contact-item-checkout">

							<div class="select clearfix hidden">
								<div class="selector-wrapper"><label for="product-select-option-0">Khu vực</label><span class="custom-dropdown custom-dropdown--white"><select class="single-option-selector custom-dropdown__select custom-dropdown__select--white" data-option="option1" id="product-select-option-0"><option value="Quận 1">Quận 1</option><option value="Quận 7">Quận 7</option><option value="Quận 9">Quận 9</option><option value="Quận 4">Quận 4</option></select></span></div><div class="selector-wrapper"><label for="product-select-option-1">Diện tích</label><span class="custom-dropdown custom-dropdown--white"><select class="single-option-selector custom-dropdown__select custom-dropdown__select--white" data-option="option2" id="product-select-option-1"><option value="42 m2">42 m2</option><option value="50 m2">50 m2</option><option value="100 m2">100 m2</option></select></span></div><select id="product-select" name="id" style="display:none;">
									
									<option value="1065147547">Quận 1 / 42 m2 - 20,000,000₫</option>
									
									<option value="1065147548">Quận 7 / 42 m2 - 15,000,000₫</option>
									
									<option value="1065147549">Quận 9 / 42 m2 - 0₫</option>
									
									<option value="1065147550">Quận 4 / 42 m2 - 0₫</option>
									
									<option value="1065148196">Quận 1 / 50 m2 - 20,000,000₫</option>
									
									<option value="1065148212">Quận 7 / 50 m2 - 0₫</option>
									
									<option value="1065148228">Quận 9 / 50 m2 - 26,000,000₫</option>
									
									<option value="1065148244">Quận 4 / 50 m2 - 25,000,000₫</option>
									
									<option value="1065148264">Quận 1 / 100 m2 - 20,000,000₫</option>
									
									<option value="1065148277">Quận 7 / 100 m2 - 15,000,000₫</option>
									
									<option value="1065148286">Quận 9 / 100 m2 - 0₫</option>
									
									<option value="1065148296">Quận 4 / 100 m2 - 25,000,000₫</option>
									
								</select>
							</div>
						<div class="select-swatch clearfix">

							<div id="variant-swatch-0" class="swatch clearfix" data-option="option1" data-option-index="0">
								<div class="header-swatch">
									Khu vực:	</div>
								<div class="select-swap clearfix">
		
							<div data-value="Quận 1" class="n-sd swatch-element  quan-1  ">
								<input class="variant-0" id="swatch-0-quan-1" type="radio" name="option1" value="Quận 1" data-vhandle="quan-1" checked="">
								<label for="swatch-0-quan-1" class="">
									<span>Quận 1</span>
								</label>
							</div>
		
							<div data-value="Quận 7" class="n-sd swatch-element  quan-7  ">
								<input class="variant-0" id="swatch-0-quan-7" type="radio" name="option1" value="Quận 7" data-vhandle="quan-7">
								<label for="swatch-0-quan-7" class="">
									<span>Quận 7</span>
								</label>
							</div>

							<div data-value="Quận 9" class="n-sd swatch-element  quan-9  ">
								<input class="variant-0" id="swatch-0-quan-9" type="radio" name="option1" value="Quận 9" data-vhandle="quan-9">
								<label for="swatch-0-quan-9" class="">
									<span>Quận 9</span>
								</label>
							</div>
		
							<div data-value="Quận 4" class="n-sd swatch-element  quan-4  ">
								<input class="variant-0" id="swatch-0-quan-4" type="radio" name="option1" value="Quận 4" data-vhandle="quan-4">
								<label for="swatch-0-quan-4" class="sd">
									<span>Quận 4</span>
								</label>
							</div>
						</div>
					</div>

					<div id="variant-swatch-1" class="swatch clearfix" data-option="option2" data-option-index="1">
						<div class="header-swatch">
							Diện tích:	</div>
						<div class="select-swap clearfix">
		
					<div data-value="42 m2" class="n-sd swatch-element  42-m2">
						<input class="variant-1" id="swatch-1-42-m2" type="radio" name="option2" value="42 m2" data-vhandle="42-m2" checked="">
						<label for="swatch-1-42-m2" class="sd">
							<span>42 m2</span>
						</label>
					</div>

					<div data-value="50 m2" class="n-sd swatch-element  50-m2 soldout">
						<input class="variant-1" id="swatch-1-50-m2" type="radio" name="option2" value="50 m2" data-vhandle="50-m2" disabled="">
						<label for="swatch-1-50-m2" class="">
							<span>50 m2</span>
						</label>
					</div>

					<div data-value="100 m2" class="n-sd swatch-element  100-m2">
						<input class="variant-1" id="swatch-1-100-m2" type="radio" name="option2" value="100 m2" data-vhandle="100-m2">
						<label for="swatch-1-100-m2" class="">
							<span>100 m2</span>
						</label>
					</div>
					</div>
				</div>

			</div>

		</div>
	</div>
					<div class="product-action">
						<a href="javascript:;" class="btn-showModal site-button black js-show-modal-contact">Gửi thông tin liên hệ</a>
					</div>
					<div class="product-description">	
						<h2>Mô tả dự án</h2>
						<div class="description-content expandable-toggle opened">
							<div class="description-productdetail" style="height: 130px; overflow: hidden;">
							<p><?= $news['content']?></p>
							</div>
							<button class="expandable-content_toggle js_expandable_content btn-viewmore">
								<span class="expandable-content_toggle-icon"></span>
								<span class="expandable-content_toggle-text">Xem thêm nội dung</span>
							</button>
						</div>
					</div>
				</div>
			</div>

			
<div class="related-projects">
	<div class="s-title">
		<h2>Dự án liên quan</h2>
	</div>
	<div class="s-content wrapper-project-1 row cbr-gallery">

	<?php foreach($relate as $item){?>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-12 col-pj">
		<div class="gallery-box fade-box product-resize fixheight" style="height: 295px;">
			<div class="overlay">
				<a href="<?= base_url().'/news/read/'.$item['slug_news']?>" title="<?= $item['title_news'] ?>" class="image-resize" style="height: 295px;">			
					<picture>
						<source media="(max-width: 480px)" data-srcset="<?= base_url().'/assets/upload/image/'.$item['picture']?>" srcset="<?= base_url().'/assets/upload/image/'.$item['picture']?>">
						<source media="(min-width: 481px) and (max-width: 767px)" data-srcset="<?= base_url().'/assets/upload/image/'.$item['picture']?>" srcset="<?= base_url().'/assets/upload/image/'.$item['picture']?>">
						<source media="(min-width: 768px)" data-srcset="<?= base_url().'/assets/upload/image/'.$item['picture']?>" srcset="<?= base_url().'/assets/upload/image/'.$item['picture']?>">
						<img data-src="<?= base_url().'/assets/upload/image/'.$item['picture']?>" src="<?= base_url().'/assets/upload/image/'.$item['picture']?>" class=" lazyloaded" alt=" <?= $item['title_news'] ?> ">
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
	<?php } ?>

			</div>
		</div>
	</div>
</div>
<div id="modal-contact" class="modal fade modal-contactform-pr" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn close" data-dismiss="modal">×</button>
				<h4 class="modal-title">Thông tin liên hệ</h4>
			</div>
			<div class="modal-body content_product_form">
				<div class="contact_form_pr">
					<form accept-charset="UTF-8" action="/contact" class="contact-form" method="post">
						<input name="form_type" type="hidden" value="contact">
						<input name="utf8" type="hidden" value="✓">
						<div class="row">
							<div class="col-sm-6 col-xs-12">
								<div class="input-group">
									<label>Họ và Tên <span class="required">*</span></label>
									<input required="required" type="text" name="contact[name]" class="form-control" placeholder="Họ và tên" aria-describedby="basic-addon1">
								</div>
								<div class="input-group">
									<label>Email <span class="required">*</span></label>
									<input required="required" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="contact[email]" class="form-control" placeholder="Nhập email của bạn" aria-describedby="basic-addon1">
								</div>
								<div class="input-group">
									<label>Điện thoại <span class="required">*</span></label>
									<input pattern="[0-9]{10,12}" required="required" type="text" name="contact[phone]" class="form-control" placeholder="Số điện thoại của bạn" aria-describedby="basic-addon1">
								</div>
							</div>
							<div class="col-sm-6 col-xs-12">
								<div class="input-group">
									<label>Nội dung</label>
									<textarea class="product-body-val" rows="4" cols="50" name="content" placeholder="Nội dung" value=""></textarea>
									<input class="detailPr" name="contact[body]" type="hidden" value="Tên dự án: Sunshinecuty Nextcompany">
								</div>
							</div>
							<div class="col-sm-12 col-xs-12 text-center">
								<div class="alert alert-success success-form-pr-contact hidden">
									<p>Cảm ơn bạn đã liên hệ với chúng tôi!!</p>
								</div>
								<button type="submit" class="site-button black btn-submit-contact-pr">Gửi liên hệ ngay</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="modal-contact-checkout" class="modal fade modal-contactform-pr" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn close" data-dismiss="modal">×</button>
				<h4 class="modal-title">Thông tin liên hệ</h4>
			</div>
			<div class="modal-body content_product_form">
				<div id="form-contact" class="contact_form_pr">
					<form class="contact--form" id="form_product">
						<input type="hidden" name="id" value="1065147547">
						<input type="hidden" name="quantity" value="1">
						<div class="pr-contact-form">
							<div class="row">
								<div class="col-sm-6 col-xs-12">
									<div class="input-group">
										<label>Họ và Tên <span class="required">*</span></label>
										<input required="" id="pr_contact_name" type="text" name="name" class="form-control" placeholder="Họ và tên" aria-describedby="basic-addon1">
									</div>
									<div class="input-group">
										<label>Email <span class="required">*</span></label>
										<input required="" id="pr_contact_email" type="email" name="email" class="form-control" placeholder="Nhập email của bạn" aria-describedby="basic-addon1">
									</div>
									<div class="input-group">
										<label>Điện thoại <span class="required">*</span></label>
										<input required="" id="pr_contact_phone" pattern="[0-9]{10,15}" type="text" name="phone" class="form-control" placeholder="Số điện thoại của bạn" aria-describedby="basic-addon1">
									</div>
								</div>
								<div class="col-sm-6 col-xs-12">
									<div class="input-group">
										<label>Ghi chú</label>
										<textarea id="pr_contact_note" rows="4" cols="50" name="note" placeholder="Ghi chú" value=""></textarea>
									</div>
								</div>
								<div class="col-sm-12 col-xs-12 text-center"><button type="submit" class="site-button black contact_now">Gửi liên hệ ngay</button></div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</main>

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
<script>
	jQuery(document).ready(function(){
		$(document).on('click','#price-preview .pro-contact', function(){
			$('.js-show-modal-contact').trigger('click');
		});
		/* show modal contact*/
		$(document).on('click','.js-show-modal-contact', function(e){
			e.preventDefault();
			$('#modal-contact').modal('show');
		}); 
		$('#modal-contact form.contact-form').submit(function(e){
			e.preventDefault();
			var self = $(this);
			var vlTextbody = 'Nội dung: '+$('textarea.product-body-val').val();
			var handlePr = window.location.href;
			var vlTextPr = $('input.detailPr').val() + '\n' + 'Link dự án: '+handlePr;		
			var swatchSize = parseInt($('#contact-item-checkout .select-swatch').children().size());
			if(swatchSize == 1){
				var vlVariant = 'Biến thể: '+$('.select-swatch .swatch').find('label.sd span').html();				
			}
			else if(swatchSize == 2){
				var vlVariant = 'Biến thể: '+$('.select-swatch .swatch').find('label.sd span').html()+' | '+
						$('.select-swatch .swatch').next().find('label.sd span').html();
			}
			else if(swatchSize == 3){
				var vlVariant = 'Biến thể: '+$('.select-swatch .swatch').find('label.sd span').html()+' | '+
						$('.select-swatch .swatch').next().find('label.sd span').html()+' | '+
						$('.select-swatch .swatch').next().next().find('label.sd span').html();				
			}
			else{
				var vlVariant = '';
			}
			grecaptcha.ready(function() {
				grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action: 'submit'}).then(function(token) {
					self.prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
					$('input.detailPr').val(vlTextPr+'\n'+vlVariant+'\n'+vlTextbody);
					$.ajax({
						type: 'POST',
						url:'/contact',
						data: $('#modal-contact form.contact-form').serialize(),			 
						success:function(data){		
							$('.success-form-pr-contact').removeClass('hidden');
							setTimeout(function(){
								$('#modal-contact').modal('hide');
								location.reload();
							},2500)
						}			
					})
				});
			});
		});
		/* show modal contact checkout */
		$(document).on('click','.js-show-modal', function(e){
			e.preventDefault();
			$('#modal-contact-checkout').modal('show');
		}); 
		$('#modal-contact-checkout form#form_product').submit(function(e){
			e.preventDefault();
			if($('form#form_product')[0].checkValidity()){
				var productData = {
					"name": $('input#pr_contact_name').val(),
					"email": $('input#pr_contact_email').val(),
					"phone": $('input#pr_contact_phone').val()
				};
				var productId = {
					"id": $('#product-select').val(),
					"quantity": $('input[name="quantity"]').val(),
				};
				var getCart = null;
				$.ajax({
					url: '/cart/add.js',
					type: 'POST',
					data: productId,
					success: function(data){
						$.ajax({
							url: '/cart/update.js',
							type: 'POST',
							data: {
								"note": $('textarea#pr_contact_note').val(),
								"properties": productData
							},
							dataType: 'json',
							success: function(b){
								window.location = "/checkout?full_name=" + productData.name + "&email=" + productData.email + "&phone=" + productData.phone;
								//console.log(b)
								$.getJSON('/cart.js', function(datas){
									getCart = datas;
									//console.log(getCart)
									$.ajax({
										url: '/cart/update.js',
										type: 'POST',
										data: productData,
										dataType: 'json',
										success: function(){
											window.location = "/checkout?full_name=" + productData.name + "&email=" + productData.email + "&phone=" + productData.phone;
										}
									});
								});
							}
						});
					},
					error: function(XMLHttpRequest, textStatus) {
						alert('Dự án bạn vừa mua đã vượt quá tồn kho');
					}
				});
			}
		});
		/* show desc product short*/
		var expandable_content_height = $('.expandable-toggle .description-productdetail').height();
		if(expandable_content_height > 130){
			$('.expandable-toggle .description-productdetail').css({
				"height": "130px",
				"overflow": "hidden"
			});
		}else{
			$('.expandable-content_toggle').addClass('hidden');
		}
		$('body').on('click', '.js_expandable_content', function (e) {
			if (!$('.expandable-toggle').hasClass('opened')) {		
				$('.expandable-content_toggle').removeClass('btn-closemore').addClass('btn-viewmore').find('.expandable-content_toggle-text').html('Xem thêm nội dung');
				var curHeight = $('.expandable-toggle .description-productdetail').height();
				expandable_content_height = 130;
				$('.expandable-toggle .description-productdetail').height(curHeight).animate({
					height: expandable_content_height
				}, 300,  function () {
					$(this).parent().addClass('opened');
				});
				if ($(window).width() < 992) {
					$('html, body').animate({
						scrollTop: $(".product-content-desc").offset().top - 45
					}, 250);
				}
			} 
			else {
				$('.expandable-toggle .description-productdetail').css('height', 'auto');
				$('.expandable-toggle').removeClass('opened');
				$('.expandable-content_toggle').removeClass('btn-viewmore').addClass('btn-closemore').find('.expandable-content_toggle-text').html('Rút gọn nội dung');
			}
		}); 
		if($(window).width() > 991){
			$('.product-gallery [data-fancybox="gallery"]').fancybox({
				hash : false,
				infobar : false,
			});
		}
		else{
			var ttALt = $('.product-gallery [data-fancybox="gallery"]').find('img').attr('alt')
			$('.product-gallery [data-fancybox="gallery"]').removeAttr("data-fancybox").removeAttr("href").attr('title',ttALt );
		}
		if (jQuery(window).width() < 992) {
			jQuery('#sliderproduct').owlCarousel({
				loop:false,
				autoplay:false,
				autoplayTimeout:3000,
				margin:0,
				nav:false,
				touchDrag: true,
				items:1,
				dots:true,
			});
		}
	});
</script>
<script>
	var check_variant = true;
	var fIndex = false;
	var checkImgVariant = '';
	var selectCallback = function(variant, selector) {
		if (variant) {
			if(variant.featured_image != null) {
				checkImgVariant = Haravan.resizeImage(variant.featured_image.src,'master').replace('https:','');
				if($(window).width() < 992){
					var indeximg_mb = $(".slide_product .gallery-item[data-image='"+Haravan.resizeImage(variant.featured_image.src,'master').replace('https:','')+"']").parent().index();
					$('.slide_product').trigger('to.owl.carousel', [indeximg_mb, 500]);
				}
			}
			if (variant.sku != null ){
				jQuery('#pro_sku').html('<strong>SKU: </strong>' +variant.sku);
			}
			if(variant.price < variant.compare_at_price){
				var pro_sold = variant.price ;
				var pro_comp = variant.compare_at_price / 100;
				var sale = 100 - (pro_sold / pro_comp) ;
				var kq_sale = Math.round(sale);
				var html = '<span class="pro-sale">-' + kq_sale + '%</span>';									
				html += '<span class="pro-price">' + Haravan.formatMoney(pro_sold, "{{amount}}₫") + '</span>';
				html += '<del>' + Haravan.formatMoney(variant.compare_at_price, "{{amount}}₫") + '</del>';
				jQuery('#detail-product #price-preview').html(html);
			} 
			else {
				jQuery('#detail-product #price-preview').html("<span class='pro-price'>" + Haravan.formatMoney(variant.price, "{{amount}}₫" + "</span>"));
			}
			if(variant.available){
				if(variant.price == 0){
					jQuery('#detail-product .btn-showModal').removeClass('js-show-modal').addClass('js-show-modal-contact').html("Gửi thông tin liên hệ");
					jQuery('#detail-product #price-preview').html("<span class='pro-contact'>Liên hệ</span>");
				}
				else{
					jQuery('#detail-product .btn-showModal').removeClass('js-show-modal-contact').addClass('js-show-modal').html("Gửi thông tin liên hệ");;
					jQuery('#detail-product #price-preview').html(html);
				}
				jQuery('#detail-product .pro-soldold').addClass('hidden');
				check_variant = true;
			}
			else{
				jQuery('#detail-product .btn-showModal').removeClass('js-show-modal').addClass('js-show-modal-contact').html("Gửi thông tin liên hệ");
				var message = variant ? "Hết hàng" : "Không có hàng";
				jQuery('#detail-product .pro-soldold').removeClass('hidden');
				jQuery('#detail-product .pro-soldold').text(message);
				check_variant = false;
			}
		}
		else {
			jQuery('#detail-product .btn-showModal').removeClass('js-show-modal').addClass('js-show-modal-contact').html("Gửi thông tin liên hệ");
			var message = variant ? "Hết hàng" : "Không có hàng";
			jQuery('#detail-product .pro-soldold').removeClass('hidden');
			jQuery('#detail-product .pro-soldold').text(message);
			check_variant = false;
		}
		return check_variant;
	};
	jQuery(document).ready(function($){
		
		new Haravan.OptionSelectors("product-select", { product: {"available":true,"compare_at_price_max":3000000000.0,"compare_at_price_min":0.0,"compare_at_price_varies":true,"compare_at_price":3000000000.0,"content":null,"description":"<p><em><strong>Sunshinecuty&nbsp;Nextcompany &nbsp;</strong></em>&nbsp;mang dấu ấn của một tổ hợp căn hộ hạng sang được quy hoạch bài bản theo mô hình smart compound bên sông Sài Gòn. Gói trọn tiện ích đắng cấp quốc tế cùng tinh hoa của xu hướng sống thông minh trong một quần thể,&nbsp;<strong>Sunshinecuty&nbsp;</strong>&nbsp;<strong>Nextcompany </strong>tiên phong xây dựng một tiêu chuẩn sống thông minh, thời thượng tại Nam Sài Gòn, là xứ sở của cuộc sống hiện đại, dẫn dầu xu hướng tương lai. Dịch vụ chuẩn 5 sao quốc tế cùng hệ thống quản lý – vận hành ứng dụng công nghệ thông minh được khai thác hoàn hảo tài, nơi hội tụ trọn vẹn của những chuẩn mực giá trị sống.</p><h4>KIẾN TRÚC XANH ẤN TƯỢNG</h4><div>&nbsp;- Có hai điều rất dễ nhận thấy ở các công dân toàn cầu – mà người Sài Gòn trẻ cũng là một đại diện tiêu biểu. Đó là khả năng cập nhật và làm chủ công nghệ, mong muốn đưa công nghệ gắn liền với cuộc sống. Điều còn lại là một ý thức và mong muốn dành cho một cuộc sống xanh. Hiểu được điều này,&nbsp;<strong>Sunshinecuty&nbsp;</strong>&nbsp;<strong>Nextcompany&nbsp;</strong>&nbsp;đã mang tới cho người dân của thành phố một lựa chọn vượt lên mọi chuẩn xanh đang được áp dụng cho các dự án bất động sản. Có đến trên 70% diện tích của dự án là dành cho các khu công viên, cây xanh, hồ bơi (hồ cảnh quan liên tòa, bể bơi vô cực, thác tràn nghệ thuật,…), sân thể thao đa năng với bóng râm rợp mát.</div><div> </div><div>CHUẨN MỰC THƯỢNG LƯU</div><div><p>&nbsp;- Được tư vấn thiết kế bởi đội ngũ kiến trúc sư chuyên nghiệp, Sunshine City Sài Gòn là sự giao hòa của không gian sống và các dịch vụ, tiện ích thương mại, nơi những giá trị tinh hoa nâng tầm đẳng cấp cho chuẩn mực sống thượng lưu.</p><p>&nbsp;- Đẳng cấp thượng lưu thể hiện trong những chi tiết nhấn nhá đầy dụng ý của thiết kế, sự tỉ mỉ, tinh tế của nội thất cao cấp mạ vàng đến từ những thương hiệu lừng danh thế giới.</p><p>&nbsp;- Một sự xa hoa xứng đáng dành cho những chủ nhân đích thực, nơi căn hộ không chỉ là tổ ấm, mà còn là một chỉ dấu của cuộc sống thành đạt, vương giả.</p></div><h4>TỔNG QUAN SUNSHINE CITY SÀI GÒN</h4><div><p>&nbsp; - Diện tích khu đất: 42.548,8 m2</p><p>&nbsp; - Số block cao tầng 9</p><p>&nbsp; - Tầng cao 26 – 38</p><p>&nbsp; - Loại hình căn hộ Văn phòng đa năng, căn hộ hạng sang, Sky villas</p><p>&nbsp; - &nbsp;Mật độ xây dựng 100%</p></div>","featured_image":"https://product.hstatic.net/1000387172/product/project-04_1a48ffaf2e8349d28794bc1a3d8ff73b.jpg","handle":"sunshinecuty-nextcompany","id":1029342687,"images":["https://product.hstatic.net/1000387172/product/project-04_1a48ffaf2e8349d28794bc1a3d8ff73b.jpg","https://product.hstatic.net/1000387172/product/project-03_7ac95dd40d814927b13758bc899ec84b.jpg","https://product.hstatic.net/1000387172/product/project-01_13f7037ab5c94e1f9f7be71fa49f22fa.jpg","https://product.hstatic.net/1000387172/product/project-02_bf133a1a35f6471a9905e3e03d9dea15.jpg"],"options":["Khu vực","Diện tích"],"price":2000000000.0,"price_max":2600000000.0,"price_min":0.0,"price_varies":true,"tags":[],"template_suffix":null,"title":"Sunshinecuty Nextcompany","type":"Khác","url":"/products/sunshinecuty-nextcompany","pagetitle":"Sunshinecuty  Nextcompany","metadescription":"Sunshinecuty  Nextcompany mang dấu ấn của một tổ hợp căn hộ hạng sang được quy hoạch bài bản theo mô hình smart compound bên sông Sài Gòn. Gói trọn tiện ích đắng cấp quốc tế cùng tinh hoa của xu hướng sống thông minh trong một quần thể","variants":[{"id":1065147547,"barcode":null,"available":true,"price":2000000000.0,"sku":"DA-001","option1":"Quận 1","option2":"42 m2","option3":"","options":["Quận 1","42 m2"],"inventory_quantity":1,"old_inventory_quantity":1,"title":"Quận 1 / 42 m2","weight":0.0,"compare_at_price":2500000000.0,"inventory_management":null,"inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1175113000,"created_at":"0001-01-01T00:00:00","position":1,"product_id":1029342687,"updated_at":"0001-01-01T00:00:00","src":"https://product.hstatic.net/1000387172/product/project-04_1a48ffaf2e8349d28794bc1a3d8ff73b.jpg","variant_ids":[1065147547,1065148196,1065148264]}},{"id":1065147548,"barcode":null,"available":true,"price":1500000000.0,"sku":"DA-002","option1":"Quận 7","option2":"42 m2","option3":"","options":["Quận 7","42 m2"],"inventory_quantity":1,"old_inventory_quantity":1,"title":"Quận 7 / 42 m2","weight":0.0,"compare_at_price":2000000000.0,"inventory_management":null,"inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1174836732,"created_at":"0001-01-01T00:00:00","position":2,"product_id":1029342687,"updated_at":"0001-01-01T00:00:00","src":"https://product.hstatic.net/1000387172/product/project-03_7ac95dd40d814927b13758bc899ec84b.jpg","variant_ids":[1065147548,1065148212,1065148277]}},{"id":1065147549,"barcode":null,"available":false,"price":0.0,"sku":"DA-003","option1":"Quận 9","option2":"42 m2","option3":"","options":["Quận 9","42 m2"],"inventory_quantity":0,"old_inventory_quantity":0,"title":"Quận 9 / 42 m2","weight":0.0,"compare_at_price":0.0,"inventory_management":"haravan","inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1174836733,"created_at":"0001-01-01T00:00:00","position":3,"product_id":1029342687,"updated_at":"0001-01-01T00:00:00","src":"https://product.hstatic.net/1000387172/product/project-01_13f7037ab5c94e1f9f7be71fa49f22fa.jpg","variant_ids":[1065147549,1065148228,1065148286]}},{"id":1065147550,"barcode":null,"available":true,"price":0.0,"sku":"DA-004","option1":"Quận 4","option2":"42 m2","option3":"","options":["Quận 4","42 m2"],"inventory_quantity":1,"old_inventory_quantity":1,"title":"Quận 4 / 42 m2","weight":0.0,"compare_at_price":0.0,"inventory_management":null,"inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1174836734,"created_at":"0001-01-01T00:00:00","position":4,"product_id":1029342687,"updated_at":"0001-01-01T00:00:00","src":"https://product.hstatic.net/1000387172/product/project-02_bf133a1a35f6471a9905e3e03d9dea15.jpg","variant_ids":[1065147550,1065148244,1065148296]}},{"id":1065148196,"barcode":null,"available":false,"price":2000000000.0,"sku":"DA-001","option1":"Quận 1","option2":"50 m2","option3":"","options":["Quận 1","50 m2"],"inventory_quantity":0,"old_inventory_quantity":0,"title":"Quận 1 / 50 m2","weight":0.0,"compare_at_price":0.0,"inventory_management":"haravan","inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1175113000,"created_at":"0001-01-01T00:00:00","position":1,"product_id":1029342687,"updated_at":"0001-01-01T00:00:00","src":"https://product.hstatic.net/1000387172/product/project-04_1a48ffaf2e8349d28794bc1a3d8ff73b.jpg","variant_ids":[1065147547,1065148196,1065148264]}},{"id":1065148212,"barcode":null,"available":true,"price":0.0,"sku":"DA-002","option1":"Quận 7","option2":"50 m2","option3":"","options":["Quận 7","50 m2"],"inventory_quantity":1,"old_inventory_quantity":1,"title":"Quận 7 / 50 m2","weight":0.0,"compare_at_price":0.0,"inventory_management":null,"inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1174836732,"created_at":"0001-01-01T00:00:00","position":2,"product_id":1029342687,"updated_at":"0001-01-01T00:00:00","src":"https://product.hstatic.net/1000387172/product/project-03_7ac95dd40d814927b13758bc899ec84b.jpg","variant_ids":[1065147548,1065148212,1065148277]}},{"id":1065148228,"barcode":null,"available":true,"price":2600000000.0,"sku":"DA-003","option1":"Quận 9","option2":"50 m2","option3":"","options":["Quận 9","50 m2"],"inventory_quantity":1,"old_inventory_quantity":1,"title":"Quận 9 / 50 m2","weight":0.0,"compare_at_price":3000000000.0,"inventory_management":null,"inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1174836733,"created_at":"0001-01-01T00:00:00","position":3,"product_id":1029342687,"updated_at":"0001-01-01T00:00:00","src":"https://product.hstatic.net/1000387172/product/project-01_13f7037ab5c94e1f9f7be71fa49f22fa.jpg","variant_ids":[1065147549,1065148228,1065148286]}},{"id":1065148244,"barcode":null,"available":false,"price":2500000000.0,"sku":"DA-004","option1":"Quận 4","option2":"50 m2","option3":"","options":["Quận 4","50 m2"],"inventory_quantity":0,"old_inventory_quantity":0,"title":"Quận 4 / 50 m2","weight":0.0,"compare_at_price":0.0,"inventory_management":"haravan","inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1174836734,"created_at":"0001-01-01T00:00:00","position":4,"product_id":1029342687,"updated_at":"0001-01-01T00:00:00","src":"https://product.hstatic.net/1000387172/product/project-02_bf133a1a35f6471a9905e3e03d9dea15.jpg","variant_ids":[1065147550,1065148244,1065148296]}},{"id":1065148264,"barcode":null,"available":true,"price":2000000000.0,"sku":"DA-001","option1":"Quận 1","option2":"100 m2","option3":"","options":["Quận 1","100 m2"],"inventory_quantity":1,"old_inventory_quantity":1,"title":"Quận 1 / 100 m2","weight":0.0,"compare_at_price":0.0,"inventory_management":null,"inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1175113000,"created_at":"0001-01-01T00:00:00","position":1,"product_id":1029342687,"updated_at":"0001-01-01T00:00:00","src":"https://product.hstatic.net/1000387172/product/project-04_1a48ffaf2e8349d28794bc1a3d8ff73b.jpg","variant_ids":[1065147547,1065148196,1065148264]}},{"id":1065148277,"barcode":null,"available":false,"price":1500000000.0,"sku":"DA-002","option1":"Quận 7","option2":"100 m2","option3":"","options":["Quận 7","100 m2"],"inventory_quantity":0,"old_inventory_quantity":0,"title":"Quận 7 / 100 m2","weight":0.0,"compare_at_price":2000000000.0,"inventory_management":"haravan","inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1174836732,"created_at":"0001-01-01T00:00:00","position":2,"product_id":1029342687,"updated_at":"0001-01-01T00:00:00","src":"https://product.hstatic.net/1000387172/product/project-03_7ac95dd40d814927b13758bc899ec84b.jpg","variant_ids":[1065147548,1065148212,1065148277]}},{"id":1065148286,"barcode":null,"available":true,"price":0.0,"sku":"DA-003","option1":"Quận 9","option2":"100 m2","option3":"","options":["Quận 9","100 m2"],"inventory_quantity":1,"old_inventory_quantity":1,"title":"Quận 9 / 100 m2","weight":0.0,"compare_at_price":0.0,"inventory_management":null,"inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1174836733,"created_at":"0001-01-01T00:00:00","position":3,"product_id":1029342687,"updated_at":"0001-01-01T00:00:00","src":"https://product.hstatic.net/1000387172/product/project-01_13f7037ab5c94e1f9f7be71fa49f22fa.jpg","variant_ids":[1065147549,1065148228,1065148286]}},{"id":1065148296,"barcode":null,"available":true,"price":2500000000.0,"sku":"DA-004","option1":"Quận 4","option2":"100 m2","option3":"","options":["Quận 4","100 m2"],"inventory_quantity":1,"old_inventory_quantity":1,"title":"Quận 4 / 100 m2","weight":0.0,"compare_at_price":0.0,"inventory_management":null,"inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1174836734,"created_at":"0001-01-01T00:00:00","position":4,"product_id":1029342687,"updated_at":"0001-01-01T00:00:00","src":"https://product.hstatic.net/1000387172/product/project-02_bf133a1a35f6471a9905e3e03d9dea15.jpg","variant_ids":[1065147550,1065148244,1065148296]}}],"vendor":"Khác","published_at":"2020-12-07T04:38:35.855Z","created_at":"2020-12-07T04:47:24.759Z","not_allow_promotion":false}, onVariantSelected: selectCallback });
		 // Add label if only one product option and it isn't 'Title'.
		  
			// Auto-select first available variant on page load.
			
			
			
			
			
			$('#detail-product .single-option-selector:eq(0)').val("Quận 1").trigger('change');
			 
			$('#detail-product .single-option-selector:eq(1)').val("42 m2").trigger('change');
			 
			 
			 $('#detail-product .selector-wrapper select').each(function(){
				 $(this).wrap( '<span class="custom-dropdown custom-dropdown--white"></span>');
				 $(this).addClass("custom-dropdown__select custom-dropdown__select--white");
			 });
				
				});
</script>
<script>
	var swatch_size = parseInt($('#contact-item-checkout .select-swatch').children().size());
	jQuery(document).on('click','#contact-item-checkout .swatch input', function(e) {  
		e.preventDefault();
		var $this = $(this);
		var _available = '';
		$this.parent().siblings().find('label').removeClass('sd');
		$this.next().addClass('sd');
		var name = $this.attr('name');
		var value = $this.val();
		$('#contact-item-checkout select[data-option='+name+']').val(value).trigger('change');
		if(swatch_size == 2){
			if(name.indexOf('1') != -1){
				$('#contact-item-checkout #variant-swatch-1 .swatch-element').find('input').prop('disabled', false);
				$('#contact-item-checkout #variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
				$('#contact-item-checkout #variant-swatch-1 .swatch-element label').removeClass('sd');
				$('#contact-item-checkout #variant-swatch-1 .swatch-element').removeClass('soldout');
				$('#contact-item-checkout .selector-wrapper .single-option-selector').eq(1).find('option').each(function(){
					var _tam = $(this).val();
					$(this).parent().val(_tam).trigger('change');
					if(check_variant){
						if(_available == '' ){
							_available = _tam;
						}
					}
					else{
						$('#contact-item-checkout #variant-swatch-1 .swatch-element[data-value="'+_tam+'"]').addClass('soldout');
						$('#contact-item-checkout #variant-swatch-1 .swatch-element[data-value="'+_tam+'"]').find('input').prop('disabled', true);
					}
				})
				$('#contact-item-checkout .selector-wrapper .single-option-selector').eq(1).val(_available).trigger('change');
				$('#contact-item-checkout #variant-swatch-1 .swatch-element[data-value="'+_available+'"] label').addClass('sd');
			}
		}
		else if (swatch_size == 3){
			var _count_op2 = $('#contact-item-checkout #variant-swatch-1 .swatch-element').size();
			var _count_op3 = $('#contact-item-checkout #variant-swatch-2 .swatch-element').size();
			if(name.indexOf('1') != -1){
				$('#contact-item-checkout #variant-swatch-1 .swatch-element').find('input').prop('disabled', false);
				$('#contact-item-checkout #variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
				$('#contact-item-checkout #variant-swatch-1 .swatch-element label').removeClass('sd');
				$('#contact-item-checkout #variant-swatch-1 .swatch-element').removeClass('soldout');
				$('#contact-item-checkout #variant-swatch-2 .swatch-element label').removeClass('sd');
				$('#contact-item-checkout #variant-swatch-2 .swatch-element').removeClass('soldout');
				var _avi_op1 = '';
				var _avi_op2 = '';
				$('#contact-item-checkout #variant-swatch-1 .swatch-element').each(function(ind,value){
					var _key = $(this).data('value');
					var _unavi = 0;
					$('#contact-item-checkout .single-option-selector').eq(1).val(_key).change();
					$('#contact-item-checkout #variant-swatch-2 .swatch-element label').removeClass('sd');
					$('#contact-item-checkout #variant-swatch-2 .swatch-element').removeClass('soldout');
					$('#contact-item-checkout #variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
					$('#contact-item-checkout #variant-swatch-2 .swatch-element').each(function(i,v){
						var _val = $(this).data('value');
						$('#contact-item-checkout .single-option-selector').eq(2).val(_val).change();
						if(check_variant == true){
							if(_avi_op1 == ''){
								_avi_op1 = _key;
							}
							if(_avi_op2 == ''){
								_avi_op2 = _val;
							}
							//console.log(_avi_op1 + ' -- ' + _avi_op2)
						}else{
							_unavi += 1;
						}
					})
					if(_unavi == _count_op3){
						$('#contact-item-checkout #variant-swatch-1 .swatch-element[data-value = "'+_key+'"]').addClass('soldout');
						setTimeout(function(){
							$('#contact-item-checkout #variant-swatch-1 .swatch-element[data-value = "'+_key+'"] input').attr('disabled','disabled');
						})
					}
				})
				$('#contact-item-checkout #variant-swatch-1 .swatch-element[data-value="'+_avi_op1+'"] input').click();
			}
			else if(name.indexOf('2') != -1){
				$('#contact-item-checkout #variant-swatch-2 .swatch-element label').removeClass('sd');
				$('#contact-item-checkout #variant-swatch-2 .swatch-element').removeClass('soldout');
				$('#contact-item-checkout #variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
				$('#contact-item-checkout .selector-wrapper .single-option-selector').eq(2).find('option').each(function(){
					var _tam = $(this).val();
					$(this).parent().val(_tam).trigger('change');
					if(check_variant){
						if(_available == '' ){
							_available = _tam;
						}
					}else{
						$('#contact-item-checkout #variant-swatch-2 .swatch-element[data-value="'+_tam+'"]').addClass('soldout');
						$('#contact-item-checkout #variant-swatch-2 .swatch-element[data-value="'+_tam+'"]').find('input').prop('disabled', true);
					}
				})
				$('#contact-item-checkout .selector-wrapper .single-option-selector').eq(2).val(_available).trigger('change');
				$('#contact-item-checkout #variant-swatch-2 .swatch-element[data-value="'+_available+'"] label').addClass('sd');
			}
		}
		if(checkImgVariant != '' && $(window).width() > 991 && fIndex == true){
			var indexVariant = $(".slide_product .gallery-item[data-image='"+checkImgVariant+"']").index();
			$('html, body').animate({
				scrollTop: $('.product-gallery-item:eq('+ indexVariant +')').offset().top - 20
			}, 800);	
		}
	})
	jQuery(document).ready(function(){
		var _chage = '';
		$('#contact-item-checkout .swatch-element[data-value="'+$('#contact-item-checkout .selector-wrapper .single-option-selector').eq(0).val()+'"]').find('input').click();
		$('#contact-item-checkout .swatch-element[data-value="'+$('#contact-item-checkout .selector-wrapper .single-option-selector').eq(1).val()+'"]').find('input').click();
		if(swatch_size == 2){
			var _avi_op1 = '';
			var _avi_op2 = '';
			var _count = $('#contact-item-checkout #variant-swatch-1 .swatch-element').size();
			$('#contact-item-checkout #variant-swatch-0 .swatch-element').each(function(ind,value){
				var _key = $(this).data('value');
				var _unavi = 0;
				$('#contact-item-checkout .single-option-selector').eq(0).val(_key).change();
				$('#contact-item-checkout #variant-swatch-1 .swatch-element').each(function(i,v){
					var _val = $(this).data('value');
					$('#contact-item-checkout .single-option-selector').eq(1).val(_val).change();
					if(check_variant == true){
						if(_avi_op1 == ''){
							_avi_op1 = _key;
						}
						if(_avi_op2 == ''){
							_avi_op2 = _val;
						}
					}else{
						_unavi += 1;
					}
				})
				if(_unavi == _count){
					$('#contact-item-checkout #variant-swatch-0 .swatch-element[data-value = "'+_key+'"]').addClass('soldout');
					//$('#contact-item-checkout #variant-swatch-0 .swatch-element[data-value = "'+_key+'"]').find('input').attr('disabled','disabled');
				}
			})
			$('#contact-item-checkout #variant-swatch-1 .swatch-element[data-value = "'+_avi_op2+'"] input').click();
			$('#contact-item-checkout #variant-swatch-0 .swatch-element[data-value = "'+_avi_op1+'"] input').click();
		}
		else if(swatch_size == 3){
			var _avi_op1 = '';
			var _avi_op2 = '';
			var _avi_op3 = '';
			var _size_op2 = $('#contact-item-checkout #variant-swatch-1 .swatch-element').size();
			var _size_op3 = $('#contact-item-checkout #variant-swatch-2 .swatch-element').size();

			$('#contact-item-checkout #variant-swatch-0 .swatch-element').each(function(ind,value){
				var _key_va1 = $(this).data('value');
				var _count_unavi = 0;
				$('#contact-item-checkout .single-option-selector').eq(0).val(_key_va1).change();
				$('#contact-item-checkout #variant-swatch-1 .swatch-element').each(function(i,v){
					var _key_va2 = $(this).data('value');
					var _unavi_2 = 0;
					$('#contact-item-checkout .single-option-selector').eq(1).val(_key_va2).change();
					$('#contact-item-checkout #variant-swatch-2 .swatch-element').each(function(j,z){
						var _key_va3 = $(this).data('value');
						$('#contact-item-checkout .single-option-selector').eq(2).val(_key_va3).change();
						if(check_variant == true){
							if(_avi_op1 == ''){
								_avi_op1 = _key_va1;
							}
							if(_avi_op2 == ''){
								_avi_op2 = _key_va2;
							}
							if(_avi_op3 == ''){
								_avi_op3 = _key_va3;
							}
						}else{
							_unavi_2 += 1;
						}
					})
					if(_unavi_2 == _size_op3){
						_count_unavi += 1;
					}
				})
				if(_size_op2 == _count_unavi){
					$('#contact-item-checkout #variant-swatch-0 .swatch-element[data-value = "'+_key_va1+'"]').addClass('soldout');
					//	$('#contact-item-checkout #variant-swatch-0 .swatch-element[data-value = "'+_key_va1+'"]').find('input').attr('disabled','disabled');
				}
			})
			$('#contact-item-checkout #variant-swatch-0 .swatch-element[data-value = "'+_avi_op1+'"] input').click();
		}
		fIndex = true;
		if(checkImgVariant != '' && $(window).width() > 991){
			var indexVariant = $(".slide_product .gallery-item[data-image='"+checkImgVariant+"']").index();
			if($(window).scrollTop() > $('.product-detail-wrapper').offset().top){
				$('html, body').animate({
					scrollTop: $('.product-gallery-item:eq('+ indexVariant +')').offset().top - 20
				}, 800);	
			}
		}
		/* hover header-text-swatch */
		var vl = $('#contact-item-checkout .swatch .color input').val();
		$('#contact-item-checkout .swatch .color input').parents(".swatch").find(".header-swatch span").html(vl);
		$("#contact-item-checkout .select-swap .color" ).hover(function() { 
			var value = $( this ).data("value");
			$(this).parents(".swatch").find(".header-swatch span").html( value );
		},function(){
			var value = $("#contact-item-checkout .select-swap .color label.sd span").html();
			$(this).parents(".swatch").find(".header-swatch span").html( value );
		});
	});
</script>
