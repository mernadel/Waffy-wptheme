<?php
/**
 * Template Name: Job Requirements Page
 *
 * This is the template for displaying the Job Requirements page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 * @package Waffy
 */

get_header();
?>
    <section class="job-detail-section container">
	<a href="#" class="job-detail__back-link">
           العودة لقائمة الوظائف <i class="fas fa-arrow-left"></i>
        </a>
      <div class="job-detail__header">
        <h1 class="job-detail__main-title">Product Operations Manager</h1>

      </div>

      <ul class="job-detail__meta-list">
        <li class="job-detail__meta-item"><strong>Job Title:</strong> Product Operations Manager</li>
        <li class="job-detail__meta-item"><strong>Location:</strong> Riyadh</li>
        <li class="job-detail__meta-item"><strong>Department:</strong> Product</li>
        <li class="job-detail__meta-item"><strong>Reports to:</strong> Product Manager</li>
      </ul>

      <div class="job-detail__content-section">
        <h2 class="job-detail__section-title">Role Overview</h2>
        <p class="job-detail__text">
          As a Product Operations Manager at Waffy, you will be the operational backbone of the product team. You’ll drive clarity, alignment, and efficiency across teams. You’ll optimize feedback loops, streamline onboarding and planning, and support a product-led, data-driven culture. You’ll work closely with Product Managers, Design, and Engineering teams to ensure our product processes scale with our ambitions.
        </p>
      </div>

      <div class="job-detail__content-section">
        <h2 class="job-detail__section-title">Key Responsibilities:</h2>
        
        <h3 class="job-detail__section-title" >Actionable Data</h3>
        <ul class="job-detail__list">
          <li class="job-detail__list-item">Develop and maintain product dashboards and KPI tracking systems.</li>
          <li class="job-detail__list-item">Translate product data into actionable insights for decision-making.</li>
        </ul>

        <h3 class="job-detail__section-title">Standardized Best Practices</h3>
        <ul class="job-detail__list">
          <li class="job-detail__list-item">Document product development processes, rituals, and planning frameworks.</li>
          <!-- Add more list items if there are any in the image -->
        </ul>
      </div>
      <!-- Add more content sections as needed based on the image -->


      <hr>
<div class="container">
<form class="job-form">
    <label>الاسم الأول* <input type="text" required></label>
    <label>الاسم الآخر* <input type="text" required></label>
    <label>البريد الإلكتروني* <input type="email" required></label>
    <label>رقم الهاتف* <input type="tel" required placeholder="5678 234 051"></label>
    <label>الوظيفة/اللقب* <input type="text" required></label>
    <label>القسم 
      <select>
        <option disabled selected>- رجاءً، الاختيار -</option>
      </select>
    </label>
    <label>سنوات الخبرة* <input type="text" required></label>
    <label>رابط حساب LinkedIn* <input type="url" placeholder="https://www.linkedin.com/in/username" required></label>
    <label>الجنسية <input type="text"></label>
    <label>المدينة <input type="text"></label>
    <label>الدولة* 
      <select required>
        <option disabled selected>رجاءً، الاختيار من القائمة</option>
      </select>
    </label>
    <label>الانضمام (اختياري) <input type="text"></label>
    <label>الخبرة المتعلقة (اختياري) <input type="text"></label>
    <label>فرع الوظيفة <input type="text"></label>
    <label>الراتب الحالي (الريال السعودي)* <input type="number" required></label>
    <label>الراتب المتوقع (الريال السعودي)* <input type="number" required></label>
    <label>السيرة الذاتية* <input type="file" required></label>
    <label>(اختياري) cover letter <input type="file"></label>
    
    <button type="submit">إرسال</button>
  </form>
</div>
    </section>
<?php
get_footer();
