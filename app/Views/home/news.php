<!-- section blog -->
<section class="section section-blog lazyloaded">
      <div class="container">
        <div class="s-title">
          <h2 class="hTitle">
              
              Bài viết mới nhất
              
          </h2>
        </div>
        <div class="s-content">
          <div class="row">
          

          <?php foreach ($news2 as $news2) { ?>
            <div class="col-md-6 col-sm-6 col-xs-6 col-blog">
              <div class="overlay-wraper latest-blog-dark-outer">
                <a href="<?= base_url('news/read/' . $news2['slug_news']) ?>" title="Căn hộ Flora Apartments" class="fade-box">
                  <picture>
                    <source data-srcset="<?= base_url('assets/upload/image/' . $news2['picture']) ?>" media="(max-width: 480px)" srcset="<?= base_url('assets/upload/image/' . $news2['picture']) ?>">
                    <source data-srcset="<?= base_url('assets/upload/image/' . $news2['picture']) ?>" media="(min-width: 481px) and (max-width: 767px)" srcset="<?= base_url('assets/upload/image/' . $news2['picture']) ?>">
                    <source data-srcset="<?= base_url('assets/upload/image/' . $news2['picture']) ?>" media="(min-width: 768px)" srcset="<?= base_url('assets/upload/image/' . $news2['picture']) ?>">
                    <img data-src="<?= base_url('assets/upload/image/' . $news2['picture']) ?>" class=" lazyloaded" alt="Căn hộ Flora Apartments" src="<?= base_url('assets/upload/image/' . $news2['picture']) ?>">
                  </picture>
                </a>
                <div class="latest-blog-dark">
                  <h3><a href="<?= base_url('news/read/' . $news2['slug_news']) ?>"><?= $news2['title_news'] ?></a></h3>
                  <div class="v-date text-white"><span><?= $news2['date_post'] ?></span></div>
                </div>
              </div>
            </div>
          <?php } ?>
            
          </div>
        </div>
        <div class="hilite-title text-right bdr-gray bdr-right">
          <strong>Tin tức </strong>
          <span class="text-black">Phổ biến </span>
        </div>
      </div>
    </section>
    <!-- end section blog -->

