<?php
/**
 * Broker Section: Use Waffy
 *
 * @package Waffy
 */
?>

<section class="why-waffy  section-start waffy-broker section-padding-top">
        <div class="container">
                <div class="tab-content__panel-inner">
                    <div class="tab-content__main">
                        <div class="tab-content__header mb-15">
                            <h3 class="tab-content__title">كيف تستخدم وفي لإتمام معاملاتك</h3>
                        </div>
                        <ul class="tab-content__feature-list">
                            <li class="tab-content__feature-item">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/1.png" class="feature-item__icon">
                          <div>
                            <h6 class="home-hero__step-title"> لاتفاق: 🤝 تسجيل الوسيط الضامن للاتفاق</h6>
                            <p class="home-hero__step-title-text"> عد اتفاق الأطراف ووصولهم لحل مرضي للجميع يتم تسجيل الاتفاق لدى وفّي.  </p>
                          </div>
                            </li>
                            <li class="tab-content__feature-item">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/2.png" class="feature-item__icon">
                               <div>
                                <h6 class="home-hero__step-title">الدفع: 💳 المودع يقوم بدفع المبلغ </h6>
                                <p class="home-hero__step-title-text">  يقوم الطرف المُطالب بإيداع الأموال بسدادها عبر وفّي
                                </p>
                              </div>
                            </li>
                            <li class="tab-content__feature-item">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/3.png" class="feature-item__icon">
                                <div>
                                    <h6 class="home-hero__step-title">الإشعار: 📩 وفّي يُبلغ الوسيط بإستلام الأموال
                                    </h6>
                                    <p class="home-hero__step-title-text"> نقوم بإبلاغ الوسيط بأستلام المبلغ المتفق عليه
                                    </p>
                                  </div>
                            </li>
                            <li class="tab-content__feature-item">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/4.png" class="feature-item__icon">
                                <div>
                                    <h6 class="home-hero__step-title">التقديم: 📝 المودع له يُقدم الوثائق
                                    </h6>
                                    <p class="home-hero__step-title-text">يقوم المُطالب بإتمام الإجراءات المتفق عليها
                                    </p>
                                  </div>
                            </li>
                            <li class="tab-content__feature-item">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/5.png" class="feature-item__icon">
                                <div>
                                    <h6 class="home-hero__step-title"> التحويل: 💸 الوسيط يوافق على تحويل الأموال
                                    </h6>
                                    <p class="home-hero__step-title-text"> عند إكتمال الإجراءات يقوم الوسيط بالسماح بتحويل الأموال لمستحقها
                                    </p>
                                  </div>
                            </li>
                        </ul>
                 
                    </div>
                    <div class="tab-content__aside">
                        <figure class="tab-content__aside-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Imgur-magic.png" alt="مميزات البائع مع وفي">
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
        <!-- video modal container -->
        <div id="seller" class="modal modal__bg" role="dialog" aria-hidden="true">

            <div class="modal__dialog">
                <div class="modal__content">
                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/ES7V5n9Rczg" tit
                        le="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    <a href="" class="modal__close demo-close">
                        <i class="fa-solid fa-xmark"></i>
                    </a>

                </div>
            </div>
        </div>

    </section>
