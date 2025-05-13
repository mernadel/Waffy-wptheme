  <!-- seller-buyer section start -->
  <section class="seller-buyer container section-start">
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
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'broker-program' ) ) ); ?>" class="home-hero__cta-button">بيع الآن</a>
                  </div>
                </div>
                <div class="tab-content__aside">
                  <figure class="tab-content__aside-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/seller.webp" alt="مميزات البائع مع وفي">
                    <div class="wrapper-pulse modal__trigger" data-modal="#seller">
                      <div class="circle pulse"></div>
                      <div class="circle modal-button" id="four">
                        <i class="fa-solid fa-play"></i>
                      </div>
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
                    <p class="home-hero__subtitle">مدفوعاتك محفوظة، حتى تستلم المنتج أو الخدمة </p>
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
                   <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'waffy-broker' ) ) ); ?>" class="home-hero__cta-button">بيع الآن</a>
                  </div>
                </div>
                <div class="tab-content__aside">
                  <figure class="tab-content__aside-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/buyer.webp" alt="مميزات البائع مع وفي">
                    <div class="wrapper-pulse modal__trigger" data-modal="#buyer">
                      <div class="circle pulse"></div>
                      <div class="circle modal-button">
                        <i class="fa-solid fa-play"></i>
                      </div>
                    </div>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- video modal container -->
  <div id="seller" class="modal modal__bg" role="dialog" aria-hidden="true">
    <div class="modal__dialog">
      <div class="modal__content">
        <iframe width="1280" height="720" src="https://www.youtube.com/embed/ES7V5n9Rczg" tit le="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe>
        <a href="" class="modal__close demo-close">
          <i class="fa-solid fa-xmark"></i>
        </a>

      </div>
    </div>
  </div>
  <!-- video modal buyer container -->
  <div id="buyer" class="modal modal__bg p-0" role="dialog" aria-hidden="true">
    <div class="modal__dialog">
      <div class="modal__content">
        <iframe width="1280" height="720" src="https://www.youtube.com/embed/ES7V5n9Rczg" title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe>
        <a href="" class="modal__close demo-close">
          <i class="fa-solid fa-xmark"></i>
        </a>

      </div>
    </div>
  </div>


















  <!-- tabs script -->
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
    var Modal = (function () {
      var trigger = $qsa(".modal__trigger"); // what you click to activate the modal
      var modals = $qsa(".modal"); // the entire modal (takes up entire window)
      var modalsbg = $qsa(".modal__bg"); // the entire modal (takes up entire window)
      var content = $qsa(".modal__content"); // the inner content of the modal
      var closers = $qsa(".modal__close"); // an element used to close the modal
      var w = window;
      var isOpen = false;
      var contentDelay = 400; // duration after you click the button and wait for the content to show
      var len = trigger.length;

      // make it easier for yourself by not having to type as much to select an element
      function $qsa(el) {
        return document.querySelectorAll(el);
      }

      var getId = function (event) {
        event.preventDefault();
        var self = this;
        // get the value of the data-modal attribute from the button
        var modalId = self.dataset.modal;
        var len = modalId.length;
        // remove the '#' from the string
        var modalIdTrimmed = modalId.substring(1, len);
        // select the modal we want to activate
        var modal = document.getElementById(modalIdTrimmed);
        // execute function that creates the temporary expanding div
        makeDiv(self, modal);
      };

      var makeDiv = function (self, modal) {
        var fakediv = document.getElementById("modal__temp");


        if (fakediv === null) {
          var div = document.createElement("div");
          div.id = "modal__temp";
          self.appendChild(div);
          moveTrig(self, modal, div);
        }
      };

      var moveTrig = function (trig, modal, div) {
        var trigProps = trig.getBoundingClientRect();
        var m = modal;
        var mProps = m.querySelector(".modal__content").getBoundingClientRect();
        var transX, transY, scaleX, scaleY;
        var xc = w.innerWidth / 2;
        var yc = w.innerHeight / 2;

        // this class increases z-index value so the button goes overtop the other buttons
        trig.classList.add("modal__trigger--active");

        // these values are used for scale the temporary div to the same size as the modal
        scaleX = mProps.width / trigProps.width;
        scaleY = mProps.height / trigProps.height;

        scaleX = scaleX.toFixed(3); // round to 3 decimal places
        scaleY = scaleY.toFixed(3);

        // these values are used to move the button to the center of the window
        transX = Math.round(xc - trigProps.left - trigProps.width / 2);
        transY = Math.round(yc - trigProps.top - trigProps.height / 2);

        // if the modal is aligned to the top then move the button to the center-y of the modal instead of the window
        if (m.classList.contains("modal--align-top")) {
          transY = Math.round(
            mProps.height / 2 + mProps.top - trigProps.top - trigProps.height / 2
          );
        }

        // translate button to center of screen
        trig.style.transform = "translate(" + transX + "px, " + transY + "px)";
        trig.style.webkitTransform = "translate(" + transX + "px, " + transY + "px)";
        // expand temporary div to the same size as the modal
        div.style.transform = "scale(" + scaleX + "," + scaleY + ")";
        div.style.webkitTransform = "scale(" + scaleX + "," + scaleY + ")";

        window.setTimeout(function () {
          window.requestAnimationFrame(function () {
            open(m, div);
          });
        }, contentDelay);
      };

      var open = function (m, div) {
        if (!isOpen) {
          // select the content inside the modal
          var content = m.querySelector(".modal__content");
          // reveal the modal
          m.classList.add("modal--active");
          // reveal the modal content
          content.classList.add("modal__content--active");


          content.addEventListener("transitionend", hideDiv, false);

          isOpen = true;
        }

        function hideDiv() {
          // fadeout div so that it can't be seen when the window is resized
          div.style.opacity = "0";
          content.removeEventListener("transitionend", hideDiv, false);
        }
      };

      var close = function (event) {
        event.preventDefault();
        event.stopImmediatePropagation();

        var target = event.target;
        var div = document.getElementById("modal__temp");


        if (
          (isOpen && target.classList.contains("modal__bg")) ||
          target.classList.contains("modal__close")
        ) {
          // make the hidden div visible again and remove the transforms so it scales back to its original size
          div.style.opacity = "1";
          div.removeAttribute("style");


          for (var i = 0; i < len; i++) {
            modals[i].classList.remove("modal--active");
            content[i].classList.remove("modal__content--active");
            trigger[i].style.transform = "none";
            trigger[i].style.webkitTransform = "none";
            trigger[i].classList.remove("modal__trigger--active");
          }

          // when the temporary div is opacity:1 again, we want to remove it from the dom
          div.addEventListener("transitionend", removeDiv, false);

          isOpen = false;
        }

        function removeDiv() {
          setTimeout(function () {
            window.requestAnimationFrame(function () {
              // remove the temp div from the dom with a slight delay so the animation looks good
              div.remove();
            });
          }, contentDelay - 50);
        }
      };

      var bindActions = function () {
        for (var i = 0; i < len; i++) {
          trigger[i].addEventListener("click", getId, false);
          closers[i].addEventListener("click", close, false);
          modalsbg[i].addEventListener("click", close, false);
        }
      };

      var init = function () {
        bindActions();
      };

      return {
        init: init
      };
    })();

    Modal.init();

  </script>