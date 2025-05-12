  
  <!-- services-slider-starts -->
  <section class="services-slider section-start ">
    <!-- Header title -->
    <div class="header-section">
      <h2 class="start-selling__title text-center "> ندعم العديد من المنتجات والخدمات، كل ما تحتاج إليه لمعاملة آمنة
        وسهلة
      </h2>
      <div class="mx-auto ">

        <p class="home-hero__subtitle text-center  ">صممنا حلولًا تناسب احتياجاتك، بيع على وفي خدماتك مثل (الحسابات
          الرقمية)، ومنتجاتك مثل: (الإلكترونيات، لوحات السيارات، والألعاب)، والمزيد.
        </p>
      </div>
    </div>

    <div class="slider">
      <div class="owl-carousel owl-theme">
        <a class="item service-card">
          <h5 class="service-card__title">بيع أو شراء سيارة</h5>
          <p class="service-card__subtitle">اضمن حقوقك مع وفي</p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/Used-Car-Sale.webp" alt="Service 1">
        </a>
        <a class="item service-card">
          <h5 class="service-card__title">الحسابات الرقمية</h5>
          <p class="service-card__subtitle">بيع وشراء آمن</p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/Digital-Accounts.webp" alt="Service 2">
        </a>
        <a class="item service-card">
          <h5 class="service-card__title">الإلكترونيات</h5>
          <p class="service-card__subtitle">جديد أو مستعمل</p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/Used-Device-Ad.png" alt="Service 3">
        </a>
        <a class="item service-card">
          <h5 class="service-card__title">لوحات السيارات</h5>
          <p class="service-card__subtitle">مميزة وعادية</p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/Used-Car-Sale.webp" alt="Service 4">
        </a>
        <a class="item service-card">
          <h5 class="service-card__title">الألعاب</h5>
          <p class="service-card__subtitle">حسابات وعناصر</p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/Work-from-Home.webp" alt="Service 5">
        </a>

      </div>
    </div>

  </section>
  <!-- services-slider-ends -->
  <!-- slider scripts -->
  <script>
  jQuery(document).ready(function($) {
    $('.owl-carousel').owlCarousel({
      rtl:true,
      loop:true,
      margin:15,
      nav:false,
      dots:false,
      center: true,
      autoplay: true,
      autoplayTimeout: 1300,
      autoplayHoverPause: false,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:2
        },
        1000:{
          items:4
        }
      }
    });
  });
  </script>