<?php

/* @var $this \yii\web\View */
/* @var $content string */

use client\assets\AppAsset;

use yii\helpers\Html;


use client\widgets\Header;

use client\widgets\FooterText;
use client\widgets\FooterNew;




AppAsset::register($this);
//CommonAssetBundle::register($this);
?>

<?php $this->beginPage(); ?>

    <!DOCTYPE html>
    <html lang="en">

    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title><?= Html::encode($this->title) ?></title>

        <meta name="description" content="Latest updates and statistic charts">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>

        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>



        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" type="text/css">


        <!-- Style Customizer's stylesheets -->

        <link rel="stylesheet/less" type="text/css" href="less/skin.less">
        <!-- Style Customizer's stylesheets END -->

        <?php $this->head() ?>

    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
    <body>
    <div class="over-loader loader-live">
        <div class="loader">
            <div class="loader-item style1">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!--end loading-->



    <div class="wrapper-boxed">
        <div class="site-wrapper">

            <?= Header::widget() ?>

            <div>
                <?= $content ?>
            </div>




            <?= FooterText::widget(); ?>
            <div class="clearfix"></div>

            <?= FooterNew::widget(); ?>


            <script src="js/jquery/jquery.js"></script>
            <script src="js/bootstrap/bootstrap.min.js"></script>

            <script src="js/less/less.min.js" data-env="development"></script>


            <!-- Scripts END -->

            <!-- Template scripts -->
            <script src="js/megamenu/js/main.js"></script>
            <script type="text/javascript" src="js/ytplayer/jquery.mb.YTPlayer.js"></script>
            <script type="text/javascript" src="js/ytplayer/elementvideo-custom.js"></script>
            <script type="text/javascript" src="js/ytplayer/play-pause-btn.js"></script>
            <!-- REVOLUTION JS FILES -->
            <script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
            <script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
            <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
            (Load Extensions only on Local File Systems !
            The following part can be removed on Server for On Demand Loading) -->
            <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
            <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
            <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
            <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
            <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
            <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
            <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
            <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
            <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
            <script type="text/javascript">
                var tpj=jQuery;
                var revapi4;
                tpj(document).ready(function() {
                    if(tpj("#rev_slider").revolution == undefined){
                        revslider_showDoubleJqueryError("#rev_slider");
                    }else{
                        revapi4 = tpj("#rev_slider").show().revolution({
                            sliderType:"standard",
                            jsFileLocation:"js/revolution-slider/js/",
                            sliderLayout:"auto",
                            dottedOverlay:"none",
                            delay:9000,
                            navigation: {
                                keyboardNavigation:"off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation:"off",
                                onHoverStop:"off",
                                arrows: {
                                    style:"uranus",
                                    enable:true,
                                    hide_onmobile:false,
                                    hide_under:100,
                                    hide_onleave:true,
                                    hide_delay:200,
                                    hide_delay_mobile:1200,
                                    tmp:'',
                                    left: {
                                        h_align:"left",
                                        v_align:"center",
                                        h_offset:80,
                                        v_offset:0
                                    },
                                    right: {
                                        h_align:"right",
                                        v_align:"center",
                                        h_offset:80,
                                        v_offset:0
                                    }
                                }
                                ,
                                touch:{
                                    touchenabled:"on",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                }
                                ,



                            },
                            viewPort: {
                                enable:true,
                                outof:"pause",
                                visible_area:"80%"
                            },

                            responsiveLevels:[1240,1024,778,480],
                            gridwidth:[1240,1024,778,480],
                            gridheight:[870,730,600,550],
                            lazyType:"smart",
                            parallax: {
                                type:"mouse",
                                origo:"slidercenter",
                                speed:2000,
                                levels:[2,3,4,5,6,7,12,16,10,50],
                            },
                            shadow:0,
                            spinner:"off",
                            stopLoop:"off",
                            stopAfterLoops:-1,
                            stopAtSlide:-1,
                            shuffle:"off",
                            autoHeight:"off",
                            hideThumbsOnMobile:"off",
                            hideSliderAtLimit:0,
                            hideCaptionAtLimit:0,
                            hideAllCaptionAtLilmit:0,
                            disableProgressBar:"on",
                            debugMode:false,
                            fallbacks: {
                                simplifyAll:"off",
                                nextSlideOnWindowFocus:"off",
                                disableFocusListener:false,
                            }
                        });
                    }
                });	/*ready*/
            </script>
            <script type="text/javascript">
                var tpj = jQuery;

                var revapi280;
                tpj(document).ready(function() {
                    if (tpj("#rev_slider_280_1").revolution == undefined) {
                        revslider_showDoubleJqueryError("#rev_slider_280_1");
                    } else {
                        revapi280 = tpj("#rev_slider_280_1").show().revolution({
                            sliderType: "hero",
                            jsFileLocation: "../../revolution/js/",
                            sliderLayout: "auto",
                            dottedOverlay: "none",
                            delay: 9000,
                            navigation: {},
                            responsiveLevels: [1240, 1024, 778, 480],
                            visibilityLevels: [1240, 1024, 778, 480],
                            gridwidth: [1000, 1024, 778, 480],
                            gridheight: [600, 520, 420, 420],
                            lazyType: "none",
                            parallax: {
                                type: "scroll",
                                origo: "slidercenter",
                                speed: 1000,
                                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                                type: "scroll",
                            },
                            shadow: 0,
                            spinner: "spinner2",
                            autoHeight: "off",
                            fullScreenAutoWidth: "off",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "60",
                            disableProgressBar: "on",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                disableFocusListener: false,
                            }
                        });
                    }
                }); /*ready*/
            </script>
            <script>
                $(window).load(function(){
                    setTimeout(function(){
                        $('.loader-live').fadeOut();
                    },1000);
                })

            </script>
            <script src="js/parallax/parallax-background.min.js"></script>
            <script>
                (function ($) {
                    $('.parallax').parallaxBackground();
                })(jQuery);
            </script>
            <script type="text/javascript" src="js/cform/form-validate.js"></script>



            <script>
                $(window).load(function(){
                    setTimeout(function(){

                        $('.loader-live').fadeOut();
                    },1000);
                })

            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
            <script src="js/tabs/js/responsive-tabs.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
            <script type="text/javascript" src="js/cubeportfolio/main-mosaic3-cols3.js"></script>
            <script src="js/accordion/js/smk-accordion.js"></script>
            <script src="js/accordion/js/custom.js"></script>
            <script src="js/progress-circle/raphael-min.js"></script>
            <script src="js/progress-circle/custom.js"></script>
            <script src="js/progress-circle/jQuery.circleProgressBar.js"></script>
            <script src="js/functions/functions.js"></script>
            <script type="text/javascript" src="js/cubeportfolio/slider-projects.js"></script>

            <script type="text/javascript" src="bd_map_svg\svg.js"></script>
            <script type="text/javascript" src="bd_map_svg\scripts.js"></script>

            <script src="slider/slider2.js"></script>

    <?php $this->endBody(); ?>
    </body>






    
    <!-- end::Body -->
    </html>
<?php $this->endPage(); ?>