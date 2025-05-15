<?php
/**
 * Template Name: Blog
 * 
 * The template for displaying the Blog page.
 */

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Waffy
 */

get_header();
?>
<!-- treated as container -->
<section class="home-hero container mb-15">
    <!-- Header title -->
    <div class="home-hero__step-title">
        <small>المدونة</small>
        <h1 class="main-hero__title1">
      
        مرحبا بك في مدونة وفي

        </h1>
        <!-- Header subtitle -->
        <p class="home-hero__subtitle">
            الطريقة الأئمن للبيع والشراء بين الأفراد

        </p>
      </div>

 

  </section>
	
<section class="blog-section container ">
    <div class="tabs-container">
        <!-- Tab Navigation with ARIA roles -->
        <div class="tabs-nav" role="tablist">
            <button class="tab active" role="tab" aria-selected="true" tabindex="0" data-tab="1" id="tab1"> الكل</button>
            <button class="tab" role="tab" aria-selected="false" tabindex="0" data-tab="2" id="tab2">الأخبار</button>
            <button class="tab" role="tab" aria-selected="false" tabindex="0" data-tab="3" id="tab3">البائع</button>
            <button class="tab" role="tab" aria-selected="false" tabindex="0" data-tab="4" id="tab4">المشتري</button>
            <button class="tab" role="tab" aria-selected="false" tabindex="0" data-tab="5" id="tab5">كيف نحافظ على الأموال</button>
            <div class="tab-indicator"></div>
        </div>
    
        <!-- Tab Panels with ARIA roles -->
        <div class="tabs-content">
            <div class="tab-content active" role="tabpanel" aria-labelledby="tab1" data-tab="1">
                <div class="l-grid l-grid--3-cols-md">
                    <div class="l-grid__col">
                        <div class="blog-card">
                            <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/images/تشتغل-بالعمل-الحر؟.jpg" alt="">
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">تشتغل بالعمل الحر ؟ اضمن عربونك وكل مستحقاتك مع وفّي</h3>
                                <p class="blog-card__text">هل أنت تعمل بالعمل الحر؟ تبي تضمن عربونك وتحمي كل مستحقاتك بطريقة موثوقة ومضمونة؟ مع خدمة وفّي، تقدر تطمئن وتشتغل براحة بال وبثقة ليش تختار…
                                </p>
                                <div class="home-hero__cta-container ">
                                    <a href="#" class="home-hero__cta-button">أقرأ المزيد</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-grid__col">
                        <div class="blog-card">
                            <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/images/تبيـع-لــوح-سـيـارات-مـمـيزة؟.jpg" alt="">
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">تبيع لوحات سيارات مميزة ؟ إضمن عربونك ودير مبيعاتك في مكان واحد</h3>
                                <p class="blog-card__text">  
                                    هل تمتلك لوحات سيارات مميزة وترغب في بيعها؟ هل تبحث عن مكان واحد يوفر لك الأمان ويسهل عليك إدارة مبيعاتك؟ مع وفّي، يمكنك ضمان عربونك…
                                </p>
                                <div class="home-hero__cta-container ">
                                    <a href="#" class="home-hero__cta-button">أقرأ المزيد</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-grid__col">
                        <div class="blog-card">
                            <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/images/تشتري-أو-تبيع-سيارة-مستعملة؟.jpg" alt="">
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">تبيع أو تشتري سيارة مستعملة ؟ إضمن حقوقك مع وفّي</h3>
                                <p class="blog-card__text">
                                    هل تدور في بالك فكرة شراء أو بيع سيارة مستعملة؟ ودك تشتري أو تبيع بس محتار ومخاف تواجه مشاكل؟ مع وفي، استخدم خدمة الضمان الحصرية…
                                </p>
                                <div class="home-hero__cta-container ">
                                    <a href="#" class="home-hero__cta-button">أقرأ المزيد</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-grid__col">
                        <div class="blog-card">
                            <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/images/تبيع-حسابات-رقمية؟.jpg" alt="">
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">تبيع حسابات رقمية ؟ عزز ثقة عملائك وزيد مبيعاتك مع وفي</h3>
                                <p class="blog-card__text">
                                    هل تعمل في بيع حسابات رقمية؟ تبى تضمن لعملائك الأمان والثقة خلال عملية الشراء؟ مع خدمة ضمان وفّي، تقدر تحمي عملائك وتزيد من مبيعاتك بكل…
                                </p>
                                <div class="home-hero__cta-container ">
                                    <a href="#" class="home-hero__cta-button">أقرأ المزيد</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-grid__col">
                        <div class="blog-card">
                            <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/images/تشتري-جهاز-مستـعمل؟.jpg" alt="">
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">
                                    تشتري جهاز مستعمل ؟ إضمن حقوقك وجودة المنتج مع وفّي

                                </h3>
                                <p class="blog-card__text">
                                    هل تخطط لشراء جهاز مستعمل؟ تبي تضمن حقوقك وجودة المنتج بدون مشاكل؟ مع خدمة ضمان حقوقك وجودة المنتج من وفّي، تقدر تطمئن وتشتري بثقة ليش…                                </p>
                                <div class="home-hero__cta-container ">
                                    <a href="#" class="home-hero__cta-button">أقرأ المزيد</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content" role="tabpanel" aria-labelledby="tab2" data-tab="2">
                <div class="l-grid l-grid--3-cols-md">
                    <div class="l-grid__col">
                        <div class="blog-card">
                            <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/images/تشتغل-بالعمل-الحر؟.jpg" alt="">
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">تشتغل بالعمل الحر ؟ اضمن عربونك وكل مستحقاتك مع وفّي</h3>
                                <p class="blog-card__text">هل أنت تعمل بالعمل الحر؟ تبي تضمن عربونك وتحمي كل مستحقاتك بطريقة موثوقة ومضمونة؟ مع خدمة وفّي، تقدر تطمئن وتشتغل براحة بال وبثقة ليش تختار…
                                </p>
                                <div class="home-hero__cta-container ">
                                    <a href="#" class="home-hero__cta-button">أقرأ المزيد</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-grid__col">
                        <div class="blog-card">
                            <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/images/تبيـع-لــوح-سـيـارات-مـمـيزة؟.jpg" alt="">
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">تبيع لوحات سيارات مميزة ؟ إضمن عربونك ودير مبيعاتك في مكان واحد</h3>
                                <p class="blog-card__text">  
                                    هل تمتلك لوحات سيارات مميزة وترغب في بيعها؟ هل تبحث عن مكان واحد يوفر لك الأمان ويسهل عليك إدارة مبيعاتك؟ مع وفّي، يمكنك ضمان عربونك…
                                </p>
                                <div class="home-hero__cta-container ">
                                    <a href="#" class="home-hero__cta-button">أقرأ المزيد</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-grid__col">
                        <div class="blog-card">
                            <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/images/تشتري-أو-تبيع-سيارة-مستعملة؟.jpg" alt="">
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">تبيع أو تشتري سيارة مستعملة ؟ إضمن حقوقك مع وفّي</h3>
                                <p class="blog-card__text">
                                    هل تدور في بالك فكرة شراء أو بيع سيارة مستعملة؟ ودك تشتري أو تبيع بس محتار ومخاف تواجه مشاكل؟ مع وفي، استخدم خدمة الضمان الحصرية…
                                </p>
                                <div class="home-hero__cta-container ">
                                    <a href="#" class="home-hero__cta-button">أقرأ المزيد</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
            <div class="tab-content" role="tabpanel" aria-labelledby="tab3" data-tab="3">
                <div class="l-grid l-grid--3-cols-md">
                    <div class="l-grid__col">
                        <div class="blog-card">
                            <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/images/تشتغل-بالعمل-الحر؟.jpg" alt="">
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">تشتغل بالعمل الحر ؟ اضمن عربونك وكل مستحقاتك مع وفّي</h3>
                                <p class="blog-card__text">هل أنت تعمل بالعمل الحر؟ تبي تضمن عربونك وتحمي كل مستحقاتك بطريقة موثوقة ومضمونة؟ مع خدمة وفّي، تقدر تطمئن وتشتغل براحة بال وبثقة ليش تختار…
                                </p>
                                <div class="home-hero__cta-container ">
                                    <a href="#" class="home-hero__cta-button">أقرأ المزيد</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-grid__col">
                        <div class="blog-card">
                            <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/images/تبيـع-لــوح-سـيـارات-مـمـيزة؟.jpg" alt="">
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">تبيع لوحات سيارات مميزة ؟ إضمن عربونك ودير مبيعاتك في مكان واحد</h3>
                                <p class="blog-card__text">  
                                    هل تمتلك لوحات سيارات مميزة وترغب في بيعها؟ هل تبحث عن مكان واحد يوفر لك الأمان ويسهل عليك إدارة مبيعاتك؟ مع وفّي، يمكنك ضمان عربونك…
                                </p>
                                <div class="home-hero__cta-container ">
                                    <a href="#" class="home-hero__cta-button">أقرأ المزيد</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-grid__col">
                        <div class="blog-card">
                            <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/images/تشتري-أو-تبيع-سيارة-مستعملة؟.jpg" alt="">
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">تبيع أو تشتري سيارة مستعملة ؟ إضمن حقوقك مع وفّي</h3>
                                <p class="blog-card__text">
                                    هل تدور في بالك فكرة شراء أو بيع سيارة مستعملة؟ ودك تشتري أو تبيع بس محتار ومخاف تواجه مشاكل؟ مع وفي، استخدم خدمة الضمان الحصرية…
                                </p>
                                <div class="home-hero__cta-container ">
                                    <a href="#" class="home-hero__cta-button">أقرأ المزيد</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-grid__col">
                        <div class="blog-card">
                            <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/images/تبيع-حسابات-رقمية؟.jpg" alt="">
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">تبيع حسابات رقمية ؟ عزز ثقة عملائك وزيد مبيعاتك مع وفي</h3>
                                <p class="blog-card__text">
                                    هل تعمل في بيع حسابات رقمية؟ تبى تضمن لعملائك الأمان والثقة خلال عملية الشراء؟ مع خدمة ضمان وفّي، تقدر تحمي عملائك وتزيد من مبيعاتك بكل…
                                </p>
                                <div class="home-hero__cta-container ">
                                    <a href="#" class="home-hero__cta-button">أقرأ المزيد</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-grid__col">
                        <div class="blog-card">
                            <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/images/تشتري-جهاز-مستـعمل؟.jpg" alt="">
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">
                                    تشتري جهاز مستعمل ؟ إضمن حقوقك وجودة المنتج مع وفّي

                                </h3>
                                <p class="blog-card__text">
                                    هل تخطط لشراء جهاز مستعمل؟ تبي تضمن حقوقك وجودة المنتج بدون مشاكل؟ مع خدمة ضمان حقوقك وجودة المنتج من وفّي، تقدر تطمئن وتشتري بثقة ليش…                                </p>
                                <div class="home-hero__cta-container ">
                                    <a href="#" class="home-hero__cta-button">أقرأ المزيد</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content" role="tabpanel" aria-labelledby="tab4" data-tab="4">
                <div class="l-grid l-grid--3-cols-md">
                
                    <div class="l-grid__col">
                        <div class="blog-card">
                            <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/images/تبيع-حسابات-رقمية؟.jpg" alt="">
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">تبيع حسابات رقمية ؟ عزز ثقة عملائك وزيد مبيعاتك مع وفي</h3>
                                <p class="blog-card__text">
                                    هل تعمل في بيع حسابات رقمية؟ تبى تضمن لعملائك الأمان والثقة خلال عملية الشراء؟ مع خدمة ضمان وفّي، تقدر تحمي عملائك وتزيد من مبيعاتك بكل…
                                </p>
                                <div class="home-hero__cta-container ">
                                    <a href="#" class="home-hero__cta-button">أقرأ المزيد</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-grid__col">
                        <div class="blog-card">
                            <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/images/تشتري-جهاز-مستـعمل؟.jpg" alt="">
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">
                                    تشتري جهاز مستعمل ؟ إضمن حقوقك وجودة المنتج مع وفّي

                                </h3>
                                <p class="blog-card__text">
                                    هل تخطط لشراء جهاز مستعمل؟ تبي تضمن حقوقك وجودة المنتج بدون مشاكل؟ مع خدمة ضمان حقوقك وجودة المنتج من وفّي، تقدر تطمئن وتشتري بثقة ليش…                                </p>
                                <div class="home-hero__cta-container ">
                                    <a href="#" class="home-hero__cta-button">أقرأ المزيد</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-grid__col">
                        <div class="blog-card">
                            <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/images/تشتغل-بالعمل-الحر؟.jpg" alt="">
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">تشتغل بالعمل الحر ؟ اضمن عربونك وكل مستحقاتك مع وفّي</h3>
                                <p class="blog-card__text">هل أنت تعمل بالعمل الحر؟ تبي تضمن عربونك وتحمي كل مستحقاتك بطريقة موثوقة ومضمونة؟ مع خدمة وفّي، تقدر تطمئن وتشتغل براحة بال وبثقة ليش تختار…
                                </p>
                                <div class="home-hero__cta-container ">
                                    <a href="#" class="home-hero__cta-button">أقرأ المزيد</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-grid__col">
                        <div class="blog-card">
                            <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/images/تبيـع-لــوح-سـيـارات-مـمـيزة؟.jpg" alt="">
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">تبيع لوحات سيارات مميزة ؟ إضمن عربونك ودير مبيعاتك في مكان واحد</h3>
                                <p class="blog-card__text">  
                                    هل تمتلك لوحات سيارات مميزة وترغب في بيعها؟ هل تبحث عن مكان واحد يوفر لك الأمان ويسهل عليك إدارة مبيعاتك؟ مع وفّي، يمكنك ضمان عربونك…
                                </p>
                                <div class="home-hero__cta-container ">
                                    <a href="#" class="home-hero__cta-button">أقرأ المزيد</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-grid__col">
                        <div class="blog-card">
                            <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/images/تشتري-أو-تبيع-سيارة-مستعملة؟.jpg" alt="">
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">تبيع أو تشتري سيارة مستعملة ؟ إضمن حقوقك مع وفّي</h3>
                                <p class="blog-card__text">
                                    هل تدور في بالك فكرة شراء أو بيع سيارة مستعملة؟ ودك تشتري أو تبيع بس محتار ومخاف تواجه مشاكل؟ مع وفي، استخدم خدمة الضمان الحصرية…
                                </p>
                                <div class="home-hero__cta-container ">
                                    <a href="#" class="home-hero__cta-button">أقرأ المزيد</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content" role="tabpanel" aria-labelledby="tab5" data-tab="5">
                <div class="l-grid l-grid--3-cols-md">
                
                    <div class="l-grid__col">
                        <div class="blog-card">
                            <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/images/تبيع-حسابات-رقمية؟.jpg" alt="">
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">تبيع حسابات رقمية ؟ عزز ثقة عملائك وزيد مبيعاتك مع وفي</h3>
                                <p class="blog-card__text">
                                    هل تعمل في بيع حسابات رقمية؟ تبى تضمن لعملائك الأمان والثقة خلال عملية الشراء؟ مع خدمة ضمان وفّي، تقدر تحمي عملائك وتزيد من مبيعاتك بكل…
                                </p>
                                <div class="home-hero__cta-container ">
                                    <a href="#" class="home-hero__cta-button">أقرأ المزيد</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-grid__col">
                        <div class="blog-card">
                            <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/images/تشتري-جهاز-مستـعمل؟.jpg" alt="">
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">
                                    تشتري جهاز مستعمل ؟ إضمن حقوقك وجودة المنتج مع وفّي

                                </h3>
                                <p class="blog-card__text">
                                    هل تخطط لشراء جهاز مستعمل؟ تبي تضمن حقوقك وجودة المنتج بدون مشاكل؟ مع خدمة ضمان حقوقك وجودة المنتج من وفّي، تقدر تطمئن وتشتري بثقة ليش…                                </p>
                                <div class="home-hero__cta-container ">
                                    <a href="#" class="home-hero__cta-button">أقرأ المزيد</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-grid__col">
                        <div class="blog-card">
                            <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/images/تشتغل-بالعمل-الحر؟.jpg" alt="">
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">تشتغل بالعمل الحر ؟ اضمن عربونك وكل مستحقاتك مع وفّي</h3>
                                <p class="blog-card__text">هل أنت تعمل بالعمل الحر؟ تبي تضمن عربونك وتحمي كل مستحقاتك بطريقة موثوقة ومضمونة؟ مع خدمة وفّي، تقدر تطمئن وتشتغل براحة بال وبثقة ليش تختار…
                                </p>
                                <div class="home-hero__cta-container ">
                                    <a href="#" class="home-hero__cta-button">أقرأ المزيد</a>
                                  </div>
                            </div>
                        </div>
                    </div>
              
                </div>
            </div>
        </div>
    </div>
    
 
</section>

<?php
get_footer();
