<!DOCTYPE html>
<html lang="en-US">
<!--HEAD-->
<?php  $this->load->view("head");?>
<!--END HEAD-->

<body class="page-template-default page page-id-3091 wpb-js-composer js-comp-ver-5.2.1 vc_responsive">
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <div class="modal fade popup-modal" id="popup-modal" role="dialog">
        <div class="modal-content">
            <div class="row">
                <div class="heading-separator"></div>
                <div class="modal-content-inner">
                    <div role="form" class="wpcf7" id="wpcf7-f323-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form action="/intact/custom-fonts/#wpcf7-f323-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                            <div style="display: none;"> <input type="hidden" name="_wpcf7" value="323" />
                                <input type="hidden" name="_wpcf7_version" value="4.8.1" />
                                <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f323-o1" />
                                <input type="hidden" name="_wpcf7_container_post" value="0" />
                                <input type="hidden" name="_wpcf7_nonce" value="491a821625" /></div>
                            <p class="label">Your name</p>
                            <p>
                                <span class="wpcf7-form-control-wrap your-name">
                                        <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" />
                                    </span>
                            </p>
                            <p class="label">Your e-mail address</p>
                            <p>
                                <span class="wpcf7-form-control-wrap your-email">
                                            <input type="text" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" />
                                        </span>
                            </p>
                            <p class="label">Your messages</p>
                            <p><span class="wpcf7-form-control-wrap textarea-705">
                                            <textarea name="textarea-705" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea>
                                        </span><br />
                                <input type="submit" value="Get access" class="wpcf7-form-control wpcf7-submit" />
                            </p>
                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>
 <!--NAV-->
 <?php $this->load->view("nav");?>
 <!--END NAV-->
    <div id="wrapper">
        <section id="single-page" class="section custom-fonts" style="
">
            <div class="row single-page-heading ">
                <div class="header-overlay parallax-overlay" style="background-image:url('')"></div>
                <div class="container fullwidth">
                    <h1 class="section-heading"><?php echo replace_vocales_voculeshtml("Inicio de Sesión");?></h1> 
                    <span class="heading-separator"></span>
                    <p class="section-subheading">Bienvenido a I BISAR</p>
                </div>
            </div>
            
            <section id="subscribe" class="section" style="padding-top:50px;padding-bottom:50px; ">
            <div class="container ">
                <div class="row"></div>
                <div class="row">
                    <div class="vc_row wpb_row vc_row-fluid register-form">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div role="form" class="wpcf7" id="wpcf7-f1903-o1" dir="ltr" lang="en-US">
                                        <div class="screen-reader-response"></div>
                                        <form action="/intact/conference/#wpcf7-f1903-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                            <div style="display: none;"> 
                                                <input name="_wpcf7" value="1903" type="hidden"> 
                                                <input name="_wpcf7_version" value="4.8.1" type="hidden"> 
                                                <input name="_wpcf7_locale" value="en_US" type="hidden"> 
                                                <input name="_wpcf7_unit_tag" value="wpcf7-f1903-o1" type="hidden"> 
                                                <input name="_wpcf7_container_post" value="0" type="hidden"> 
                                                <input name="_wpcf7_nonce" value="ffe97b1645" type="hidden">
                                            </div>
                                            <p style="padding: 20px !important;">
                                                <span class="wpcf8-form-control-wrap your-name">
                                                    <input name="username" id="username" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Usuario" type="text">
                                                </span>
                                            </p>
                                            <p style="padding: 20px !important;">
                                                    <span class="wpcf8-form-control-wrap your-email">
                                                        <input name="password" id="password" value="" type="password" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="<?php echo replace_vocales_voculeshtml("Contraseña");?>" type="email">
                                                    </span>
                                            </p>
                                             <p style="padding: 20px !important;">
                                                    <input onclick="send_login();" value="<?php echo replace_vocales_voculeshtml("Iniciar Sesión");?>" class="wpcf7-form-control wpcf7-submit">
                                                        <!--<span class="ajax-loader"></span>-->
                                            </p>
                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <div id="spinner"></div>
    
    <script src="<?php echo site_url().'static/page_front/js/contact.js';?>"></script>
    <script src="<?php echo site_url().'static/assets/spin/js/spin.min.js';?>"></script>
    <script src="<?php echo site_url().'static/cms/js/core/jquery.js';?>"></script>   
    </div>
 
    <!--FOOTER-->
    <?php $this->load->view("footer");?>
    <!--END FOOTER-->
    <div class="back-to-top"> <i class="fa fa-angle-up"></i></div>
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div> <button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div> <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"> </button> <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"> </button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <link rel='stylesheet' id='vc_google_fonts_playfair_displayregularitalic700700italic900900italic-css' href='//fonts.googleapis.com/css?family=Playfair+Display%3Aregular%2Citalic%2C700%2C700italic%2C900%2C900italic&#038;ver=4.8.1' type='text/css' media='all' />
    <link rel='stylesheet' id='vc_google_fonts_open_sans300300italicregularitalic600600italic700700italic800800italic-css' href='//fonts.googleapis.com/css?family=Open+Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic&#038;ver=4.8.1' type='text/css' media='all' />
    <link rel='stylesheet' id='vc_google_fonts_roboto_slab100300regular700-css' href='//fonts.googleapis.com/css?family=Roboto+Slab%3A100%2C300%2Cregular%2C700&#038;ver=4.8.1' type='text/css' media='all' />
    <link rel='stylesheet' id='vc_google_fonts_roboto100100italic300300italicregularitalic500500italic700700italic900900italic-css' href='//fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic&#038;ver=4.8.1' type='text/css' media='all' />
    <link rel='stylesheet' id='vc_google_fonts_montserratregular700-css' href='//fonts.googleapis.com/css?family=Montserrat%3Aregular%2C700&#038;ver=4.8.1' type='text/css' media='all' />
    <link rel='stylesheet' id='vc_google_fonts_merriweather300300italicregularitalic700700italic900900italic-css' href='//fonts.googleapis.com/css?family=Merriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&#038;ver=4.8.1' type='text/css' media='all' />
    <link rel='stylesheet' id='vc_google_fonts_lato100100italic300300italicregularitalic700700italic900900italic-css' href='//fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&#038;ver=4.8.1' type='text/css' media='all' />
    <script type='text/javascript'>
        var wpcf7 = {
            "apiSettings": {
                "root": "http:\/\/keydesign-themes.com\/intact\/wp-json\/contact-form-7\/v1",
                "namespace": "contact-form-7\/v1"
            },
            "recaptcha": {
                "messages": {
                    "empty": "Please verify that you are not a robot."
                }
            }
        };
    </script>
    <script type='text/javascript' src='http://keydesign-themes.com/intact/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.8.1'></script>
    <script type='text/javascript' src='http://keydesign-themes.com/intact/wp-content/themes/intact/core/assets/js/bootstrap.min.js?ver=4.8.1'></script>
    <script type='text/javascript' src='http://keydesign-themes.com/intact/wp-content/themes/intact/core/assets/js/SmoothScroll.js?ver=4.8.1'></script>
    <script type='text/javascript' src='http://keydesign-themes.com/intact/wp-content/themes/intact/core/assets/js/scripts.js?ver=4.8.1'></script>
    <script type='text/javascript' src='http://keydesign-themes.com/intact/wp-includes/js/wp-embed.min.js?ver=4.8.1'></script>
    <script type='text/javascript' src='http://keydesign-themes.com/intact/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=5.2.1'></script>
    <div id="customizer" class="hidden-xs">
        <div class="options"> <a class="custom-tooltip switcher fa nc-icon-outline-laptop"><span class="intact-tooltip">Demo Switcher <span class="trialngle-tooltip"></span></span></a> <a class="custom-tooltip" href="http://keydesign-themes.com/intact/documentation/" target="_blank"><i class="fa nc-icon-outline-print"></i><span class="intact-tooltip">Documentation<span class="trialngle-tooltip"></span></span></a> <a class="custom-tooltip" href="https://themeforest.net/item/intact-premium-multipurpose-wordpress-theme/19533865?ref=key-design&license=regular&open_purchase_for_item_id=19533865&purchasable=source" target="_blank"><i class="fa nc-icon-outline-cart"></i><span class="intact-tooltip">Purchase Theme<span class="trialngle-tooltip"></span></span></a></div>
        <div id="demoselect">
            <div class="customizer-logo">Intact</div>
            <p>Check our well designed demos for startups and mobile apps and install them with only one click.</p>
            <div class="screenshot"> <a href="http://keydesign-themes.com/intact/creative-agency/" class="first"><span>Creative Agency</span><img src="http://keydesign-themes.com/intact/images/demo1.jpg" alt=""></a> <a href="http://keydesign-themes.com/intact/startup/" class="first"><span>Startup Demo</span><img src="http://keydesign-themes.com/intact/images/demo2.jpg" alt=""></a> <a href="http://keydesign-themes.com/intact/business/" class="first"><span>Business Demo</span><img src="http://keydesign-themes.com/intact/images/demo3.jpg" alt=""></a> <a href="http://keydesign-themes.com/intact/digital-product/" class="first"><span>Digital Product</span><img src="http://keydesign-themes.com/intact/images/demo4.jpg" alt=""></a> <a href="http://keydesign-themes.com/intact/marketing-agency/" class="first"><span>Marketing Agency</span><img src="http://keydesign-themes.com/intact/images/demo5.jpg" alt=""></a> <a href="http://keydesign-themes.com/intact/landing-page/" class="first"><span>Landing Page</span><img src="http://keydesign-themes.com/intact/images/demo6.jpg" alt=""></a> <a href="http://keydesign-themes.com/intact/conference/" class="first"><span>Conference Demo</span><img src="http://keydesign-themes.com/intact/images/demo7.jpg" alt=""></a> <a href="http://keydesign-themes.com/intact/shop-classic/" class="first"><span>Shop Classic</span><img src="http://keydesign-themes.com/intact/images/demo8.jpg" alt=""></a> <a href="http://keydesign-themes.com/intact/mobile-app/" class="first"><span>Mobile App Demo</span><img src="http://keydesign-themes.com/intact/images/demo9.jpg" alt=""></a> <a href="http://keydesign-themes.com/intact/corporate/" class="first"><span>Corporate Demo</span><img src="http://keydesign-themes.com/intact/images/demo10.jpg" alt=""></a> <a href="http://keydesign-themes.com/intact/simple-portfolio/" class="first"><span>Simple Portfolio</span><img src="http://keydesign-themes.com/intact/images/demo11.jpg" alt=""></a> <a href="http://keydesign-themes.com/intact/coming-soon/" class="first"><span>Coming Soon</span><img src="http://keydesign-themes.com/intact/images/demo12.jpg" alt=""></a></div>
        </div> <a href="https://themeforest.net/item/intact-premium-multipurpose-wordpress-theme/19533865?ref=key-design&license=regular&open_purchase_for_item_id=19533865&purchasable=source" class="tt_button" target="_blank"><span class="prim_text">PURCHASE NOW</span></a></div>
</body>

</html>