<?php
/**
 * Template Name: Single Blog Layout
 *
 * The template for displaying a specific single blog layout, selectable as a page template.
 * This file can be chosen from the Page Attributes section in the WordPress editor.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package Waffy
 */

get_header();
?>
  <!-- treated as container -->
  <section class="single-blog-hero ">
    <!-- Header title -->
    <div class="container">
        <div class="single-blog-hero__content">
            <div class="single-blog-hero__text-meta">
                <h1 class="single-blog-hero__title">تشتري جهاز مستعمل ؟ إضمن حقوقك وجودة المنتج مع وفّي</h1>
                <p class="single-blog-hero__meta">
                    بواسطة: فريق وفّي | التاريخ : 2024-03-24
                </p>    
            </div>
            <div class="single-blog-hero__share">
                <span class="single-blog-hero__share-text">مشاركة المقال عبر:</span>
                <ul class="single-blog-hero__social-icons">
                    <li><a href="#" aria-label="Share on Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" aria-label="Share on X"><i class="fab fa-twitter"></i></a></li> 
                    <li><a href="#" aria-label="Share on LinkedIn"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#" aria-label="Share on WhatsApp"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

 

  </section>
<section class="single-blog-section container ">
    <div class="blog-card">
        <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/images/تشتري-جهاز-مستـعمل؟.jpg" alt="">
        <div class="blog-card__content">
            <h3 class="blog-card__title">
                هل تخطط لشراء جهاز مستعمل؟ تبي تضمن حقوقك وجودة المنتج بدون مشاكل؟ مع خدمة ضمان حقوقك وجودة المنتج من وفّي، تقدر تطمئن وتشتري بثقة
            </h3>
    <div class="card-list">
        <h5  class="mb-0">
            ليش تختار خدمة ضمان وفّي؟
        </h5>
        <div class="about-blog">        
            <ul class="reasons-list">
                <li><strong>ثقة مضمونة: </strong> نضمن لك حقوقك وحماية مالك</li>
                <li><strong>سهولة الاستخدام: </strong> شراء الجهاز المستعمل مع وفّي صار أسهل</li>
                <li><strong>دعم متفانٍ: </strong> فريقنا دائمًا جاهز لمساعدتك</li>
            </ul>
    
        </div>
    </div>
    <div class="card-list">
    
        <h5  class="mb-0">
            كيف تعمل خدمة ضمان وفّي؟        </h5>
        <div class="about-blog">        
            <ul class="reasons-list">
                <li>اختر الجهاز المستعمل الذي يناسب احتياجاتك</li>
                <li>اتفق على السعر والشروط مع البائع</li>
                <li>ادفع المبلغ عبر منصة وفّي ونضمنه لك </li>
                <li>استلم الجهاز وافحصه، وفي حال واجهت أي مشكلة، اتصل بنا </li>
                <li>
                    ذا لم يتم حل المشكلة، سنقدم لك إعادة المبلغ بالكامل
                </li>
            </ul>
    
        </div>
    </div>
           
        </div>
    </div>
    
 
</section>

<?php
get_footer();
