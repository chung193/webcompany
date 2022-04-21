<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2><?= $title ?></h2>
        <ol>
          <li><a href="<?= base_url() ?>">Home</a></li>
          <li><?= $title ?></li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">



          <div class="card">
            <div class="card-header">
              <h2><?= $title ?></h2>
            </div>
            <div class="card-body">
                      <div class="row justify-content-center">

          <?php foreach ($category as $category) {
    $id_category_staff = $category['id_category_staff'];
    $staff             = $m_staff->category_staff($id_category_staff);

    if ($staff) {
        ?>
            <h3 class="text-center"><?= $category['name_category_staff'] ?></h3>
            <hr>
            <br>
            <?php foreach ($staff as $staff) { ?>
                <div class="col-lg-3 col-md-6">
                  <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                      <?php if ($staff['picture'] === '') {  ?>
                        <img src="<?= icon() ?>" class="img-fluid" alt="<?= $staff['name'] ?>">
                      <?php } else { ?>
                        <img src="<?= base_url('assets/upload/staff/' . $staff['picture']) ?>" class="img-fluid" alt="<?= $staff['name'] ?>">
                      <?php } ?>
                    </div>
                    <div class="member-info">
                      <h4><?= $staff['name'] ?></h4>
                      <span><?= $staff['jabatan'] ?></span>
                    </div>
                  </div>
                </div>
                <?php
              }
    }
}
          ?>

          </div>
          </div>
        </div>

      </div>
    </section><!-- End Doctors Section -->


</main><!-- End #main -->