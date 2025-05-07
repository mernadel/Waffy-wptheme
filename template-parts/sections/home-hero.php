   
   <!-- treated as container -->
   <section class="home-hero">
      <div class="home-hero__step-image">
        <!-- Header title -->
        <h1 class="home-hero__title">
            <span class="home-hero__brand">وفِّي</span> الوسيط الآمن في التعاملات المالية
        </h1>
        <!-- Header subtitle -->
        <p class="home-hero__subtitle">
          تجنب الاحتيال وتمتع بحلول دفع آمنة
        </p>
        </div>
        <!-- main div  treated as container or row-->
        <div class="home-hero__steps-row">
        <div class="home-hero__step-image">
          <div class="home-hero__step-image">
            <div class="home-hero__step">
              <img class="home-hero__step-img" src="" alt="" >
            </div>
            <h5 class="home-hero__step-title">وفِّي يحوّل المبلغ للبائع</h5>
          </div>
          <!-- Arrow -->
          <div class="home-hero__step">
            <img class="home-hero__step-img" src="" alt="" >
          </div>
                <!-- repeated  -->
          <div class="home-hero__step">
            <div class="home-hero__step-image">
              <img class="home-hero__step-img" src="" alt="" >
            </div>
            <h5 class="home-hero__step-title">المشتري يوافق على الاستلام</h5>
          </div>
          <!-- Arrow -->
          <div class="home-hero__step-image">
            <img class="home-hero__step-img" src="" alt="" >
          </div>
            <!-- repeated  -->
          <div class="home-hero__step">
            <div class="home-hero__step">
              <img class="home-hero__step-img" src="" alt="" >
            </div>
            <h5 class="home-hero__step-title">البائع يسلم المنتج أو الخدمة</h5>
          </div>
          <!-- Arrow -->
          <div class="">
            <img class="home-hero__step-img" src="" alt="" >
          </div>
          <!-- repeated  -->
          <div class="home-hero__step-image">
            <div class="home-hero__step-image">
              <img src="assets/images/header4.png" alt="" >
            </div>
            <h5 class="home-hero__step-title">المشتري يدفع عبر وفِّي</h5>
          </div>
          <!-- Arrow -->
          <div class="home-hero__step-image">
            <img src="" class="">
          </div>
          <!-- repeated  -->
          <div class="home-hero__step">
            <div class="home-hero__step-image">
        </div>
        <!-- Arrow -->
        <div class="home-hero__arrow">
          <img class="home-hero__step-img" src="" alt="" >
        </div>
          <!-- repeated  -->
        <div class="home-hero__step">
          <div class="home-hero__step-image">
            <img src="assets/images/header4.png" alt="" >
          </div>
          <h5 class="home-hero__step-title">المشتري يدفع عبر وفِّي</h5>
        </div>
        <!-- Arrow -->
        <div class="home-hero__arrow">
          <img src="" class="">
        </div>
          <!-- repeated  -->
        <div class="home-hero__step">
          <div class="home-hero__step-image">
            <img class="home-hero__step-img" src="" alt="" >
          </div>
          <h5 class="home-hero__step-title">البائع يسجل تفاصيل المنتج أو الخدمة</h5>
        </div>
      </div>
      <!-- Button CTA -->
      <div class="home-hero__cta">سجل الآن</div>
    </section>
    
    
    <style>
    /* home-hero block (RTL, responsive, BEM) */
.home-hero {
  direction: rtl;
  font-family: 'IBM Plex Arabic Sans', Arial, sans-serif;
  background: #F8FAFF;
  padding: 2.5rem 1rem;
}

.home-hero__container {
  max-width: 1200px;
  margin: 0 auto;
  text-align: center;
}

.home-hero__title {
  font-size: 2.2rem;
  font-weight: 900;
  color: #10212E;
  margin-bottom: 1.5rem;
}

.home-hero__brand {
  color: #1448B8;
  font-size: 2.5rem;
  font-weight: 900;
  margin-left: 0.5rem;
}

.home-hero__subtitle {
  font-size: 1.25rem;
  color: #10212E;
  margin-bottom: 2.5rem;
}

.home-hero__steps-row {
  display: flex;
  flex-direction: column;
  align-items: stretch;
  gap: 1.5rem;
  margin-bottom: 2rem;
}

.home-hero__step {
  background: #fff;
  border-radius: 1rem;
  box-shadow: 0 2px 8px rgba(20, 72, 184, 0.04);
  padding: 1.5rem 1rem;
  margin: 0 0 1rem 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  min-width: 120px;
}

.home-hero__step-image {
  margin-bottom: 1rem;
  display: flex;
  justify-content: center;
}

.home-hero__step-img {
  width: 56px;
  height: 56px;
  object-fit: contain;
  border-radius: 50%;
  background: #04D6D7;
  padding: 0.5rem;
  display: block;
}

.home-hero__step-title {
  font-size: 1.1rem;
  color: #10212E;
  font-weight: 700;
  margin-top: 0.5rem;
  margin-bottom: 0;
}

.home-hero__arrow {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 1rem;
}

.home-hero__arrow-img {
  width: 32px;
  height: 32px;
  object-fit: contain;
}

.home-hero__cta {
  margin: 2rem auto 0 auto;
  display: inline-block;
  background: #1448B8;
  color: #fff;
  padding: 0.75rem 2.5rem;
  border-radius: 8px;
  font-size: 1.25rem;
  font-weight: 700;
  letter-spacing: 0.5px;
  cursor: pointer;
  transition: background 0.2s;
}
.home-hero__cta:hover {
  background: #10212E;
}

/* Responsive: horizontal steps on desktop */
@media (min-width: 768px) {
  .home-hero__steps-row {
    flex-direction: row;
    align-items: flex-start;
    gap: 2rem;
    justify-content: center;
  }
  .home-hero__step {
    margin: 0;
    min-width: 160px;
  }
  .home-hero__arrow {
    margin: 0 2rem;
  }
}

/* RTL margin/padding helpers */
.home-hero__step {
  margin-right: 0;
  margin-left: 0;
}
    
    </style>
