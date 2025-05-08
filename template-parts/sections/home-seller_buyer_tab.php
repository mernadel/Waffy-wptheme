  <!-- seller-buyer section start -->
  <section class="seller-buyer container section-start" dir="rtl">
    <!-- section title -->
    <div class="seller-buyer__title ">
      <h2 class="main-hero__title1">
        نحمي المعاملات ونحفظ الحقوق بين الأفراد
      </h2>

      <div>
        <!-- Tab Menu -->
        <div class="tabs">
          <div role="tablist" aria-label="Programming Languages">
       <div class="tab-buttons">
        <button role="tab" aria-selected="true" id="seller_tab">
          بائع
        </button>
        <button role="tab" aria-selected="false" id="buyer_tab">
          مشتري
        </button>
        

       </div>
            <!-- tabs divs starts -->

            <!-- Seller Tab Content -->
            <div role="tabpanel" aria-labelledby="seller_tab">
              <div class="tab-content__panel-inner">
                <div class="tab-content__main">
                <div class="tab-content__header mb-15">
                  <h3 class="tab-content__title">أنت موثوق، مبيعاتك متزايدة</h3>
                  <p class="home-hero__subtitle">مع وفّي تضمن ثقة عملائك وتعزز مصداقيتك</p>
                </div>
                  <ul class="tab-content__feature-list">
                    <li class="tab-content__feature-item">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/seller1.svg" class="feature-item__icon">
                      <p class="home-hero__step-title-text">وسائل دفع آمنة ومتعددة</p>
                    </li>
                    <li class="tab-content__feature-item">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/seller2.svg" class="feature-item__icon">
                      <p class="home-hero__step-title-text">عملاء جادون، ومعدلات إرجاع أقل</p>
                    </li>
                    <li class="tab-content__feature-item">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/seller3.svg" class="feature-item__icon">
                      <p class="home-hero__step-title-text">متابعة وإدارة مبيعاتك من مكان واحد</p>
                    </li>
                    <li class="tab-content__feature-item">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/seller4.webp" class="feature-item__icon">
                      <p class="home-hero__step-title-text">فريق متخصص لخدمتك وضمان حقوق كافة الأطراف</p>
                    </li>
                  </ul>
                  <div class="home-hero__cta-container text-center">
                    <a href="#" class="home-hero__cta-button">بيع الآن</a>
                  </div>
                </div>
                <div class="tab-content__aside">
                  <figure class="tab-content__aside-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/seller.webp" alt="مميزات البائع مع وفي">
                    <div class="modal-button" id="three">

                      <button class="three"><i class="fa-solid fa-play"></i></button>
                    </div>
                  </figure>
                </div>
              </div>
            </div>
            <!-- Buyer Tab Content -->
            <div role="tabpanel" aria-labelledby="buyer_tab" hidden>
              <div class="tab-content__panel-inner">
                <div class="tab-content__main">
                <div class="tab-content__header mb-15">
                  <h3 class="tab-content__title"> أموال محفوظة .. جودة مضمونة
                  </h3>
                  <p class="home-hero__subtitle">مدفوعاتك محفوظة، حتى تستلم المنتج أو الخدمة               </p>
                </div>
                  <ul class="tab-content__feature-list">
                    <li class="tab-content__feature-item">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/seller1.svg" class="feature-item__icon">
                      <p class="home-hero__step-title-text">وسائل دفع آمنة ومتعددة</p>
                    </li>
                    <li class="tab-content__feature-item">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/seller2.svg" class="feature-item__icon">
                      <p class="home-hero__step-title-text">عملاء جادون، ومعدلات إرجاع أقل</p>
                    </li>
                    <li class="tab-content__feature-item">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/seller3.svg" class="feature-item__icon">
                      <p class="home-hero__step-title-text">متابعة وإدارة مبيعاتك من مكان واحد</p>
                    </li>
                    <li class="tab-content__feature-item">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/seller4.webp" class="feature-item__icon">
                      <p class="home-hero__step-title-text">فريق متخصص لخدمتك وضمان حقوق كافة الأطراف</p>
                    </li>
                  </ul>
                  <div class="home-hero__cta-container text-center">
                    <a href="#" class="home-hero__cta-button">بيع الآن</a>
                  </div>
                </div>
                <div class="tab-content__aside">
                  <figure class="tab-content__aside-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/buyer.webp" alt="مميزات البائع مع وفي">
                    <div class="modal-button" id="four">

                      <button class="three"><i class="fa-solid fa-play"></i></button>
                    </div>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>







    <!-- video modal container -->
    <div id="modal-container">
      <div class="modal-background">
        <div class="modal">
          <video width="100%" height="auto" controls autoplay>
            <source src="https://www.youtube.com/watch?v=ES7V5n9Rczg" type="video/mp4"> <!-- I'll replace this src with your link -->
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </section>
  <script>
    const tab = document.querySelector('.tabs');
    const tabButtons = tab.querySelectorAll('[role="tab"]');
    const tabPanels = Array.from(tab.querySelectorAll('[role="tabpanel"]'));

    function tabClickHandler(e) {
      //Hide All Tabpane
      tabPanels.forEach(panel => {
        panel.hidden = 'true';
      });

      //Deselect Tab Button
      tabButtons.forEach(button => {
        button.setAttribute('aria-selected', 'false');
      });

      //Mark New Tab
      e.currentTarget.setAttribute('aria-selected', 'true');

      //Show New Tab
      const { id } = e.currentTarget;

      const currentTab = tabPanels.find(
        panel => panel.getAttribute('aria-labelledby') === id
      );

      currentTab.hidden = false;
    }

    tabButtons.forEach(button => {
      button.addEventListener('click', tabClickHandler);
    })
  </script>
  <!-- modal script -->
   <script>
   const modalTriggerButton = document.querySelector(".modal-button"); 
   const modalContainer = document.querySelector("#modal-container");

   if (modalTriggerButton) {
     modalTriggerButton.addEventListener("click", function () {
       const buttonId = this.getAttribute("id");
       if (modalContainer) {
         modalContainer.removeAttribute("class"); 
         if (buttonId) {
            modalContainer.classList.add(buttonId);
         }
         document.body.classList.add("modal-active");
       }
     });
   }

   if (modalContainer) {
     modalContainer.addEventListener("click", function (event) {

       if (event.target === modalContainer || event.target.classList.contains('modal-background')) {
         this.classList.add("out");
         document.body.classList.remove("modal-active");

       }
     });
   }
   </script>