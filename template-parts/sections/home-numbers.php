  <!-- Waffy in Numbers Section Starts -->
  <section class="stats-section  section-start text-center">
<div class="container">
  <div class="mb-40">
    <h2 class="start-selling__title text-center "> 
      وفي بالارقام
    </h2>
  </div>

  <div class="l-grid stats-section__grid l-grid--gap-lg">
    <div class="l-grid__col">
      <div class="stat-box">
        <i class="fas fa-star stat-box__icon"></i>
       <div>
        <p class="stat-box__number " data-target="4.8">0</p>
        <p class="stat-box__text">تقييم المستخدمين</p>
       </div>
      </div>
    </div>
    <div class="l-grid__col">
      <div class="stat-box">
        <i class="fas fa-check-circle stat-box__icon"></i>
        <div>
          <p class="stat-box__number" data-target="5000">0</p>
        <p class="stat-box__text">معاملة نشطة</p>
        </div>
      </div>
    </div>
    <div class="l-grid__col">
      <div class="stat-box">
        <i class="fas fa-user stat-box__icon"></i>
      <div>
        <p class="stat-box__number" data-target="1200">0</p>
        <p class="stat-box__text">مستخدم</p>
      </div>
      </div>
    </div>
  </div>
  <div class="mt-40">
    <div class="home-hero__cta-container text-center">
      <a href="#" class="home-hero__cta-button">انضم الآن</a>
    </div>
  </div>
</div>
  </section>
  <!-- Waffy in Numbers Section Ends -->



  <!-- ncreament counter script -->
  <script>

function animateCounter(element, target, isPlusSign = true) {
  const duration = 3000; 
  const startTime = performance.now();
  const isFloat = target % 1 !== 0;

  function update(currentTime) {
    const elapsed = currentTime - startTime;
    const progress = Math.min(elapsed / duration, 1);
    const currentValue = isFloat
      ? (progress * target).toFixed(1)
      : Math.floor(progress * target);

    element.textContent = (isPlusSign ? "+" : "") + currentValue;

    if (progress < 1) {
      requestAnimationFrame(update);
    }
  }

  requestAnimationFrame(update);
}

document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".stat-box__number");

  counters.forEach(counter => {
    const target = parseFloat(counter.getAttribute("data-target"));
    const isPlus = !counter.textContent.includes("4.8"); 

    animateCounter(counter, target, isPlus);
  });
});
</script>