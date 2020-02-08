<!DOCTYPE html>
<html lang="fr" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="L’agence Com - Web developer BAKLOUTI Houssem">
    <meta name="copyright" content="Copyright © 2018/2019 - All Rights Reserved - L’agence Com - Web developer BAKLOUTI Houssem." />

    <title>{!! isset($title) ? $title . ' |' : '' !!} L’agence Com</title>


    <meta name="description" content="{!! isset($description) ? $description : '' !!}">

    <!-- Twitter -->
    <meta name="twitter:site" content="{{ url()->current() }}" />
    <meta name="twitter:creator" content="L’agence Com" />
    <meta name="twitter:description" property="og:description" content="{!! isset($description) ? $description : '' !!}" />
    <meta name="twitter:domain" content="{{ env('APP_URL') }}" />
    <meta name="twitter:image" content="{{ url('assets/upload/logo_laganceCom.png') }}" />

    <meta name="keywords" content="{{ isset($keywords) ? $keywords : '' }}" />

    <!-- og -->
    <meta property="og:site_name" content="L’agence Com" />
    <meta property="og:title" content="{!! isset($title) ? $title . ' |' : '' !!} L’agence Com" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:description" content="{!! isset($description) ? $description : '' !!}" />
    <meta property="og:image" content="{{ url('assets/upload/logo_laganceCom.png') }}" />

    <meta property="og:locale" content="fr_FR" />
    <link rel="canonical" href="{{ url()->current() }}" />

    <script type='application/ld+json'>{"@context":"https:\/\/schema.org","@type":"Organization","url":"https:\/\/www.lagence-com.com\/","sameAs":["https:\/\/www.facebook.com\/lagence-com\/","https:\/\/www.linkedin.com\/in\/novatis","https:\/\/twitter.com\/lagence-com"],"@id":"https:\/\/www.lagence-com.com\/#organization","name":"lagence com","logo":"{!! url('assets/upload/logo_laganceCom.png') !!}"}</script>

    <link rel='stylesheet' id='gdlr-core-google-font-css' href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito%3A200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;subset=devanagari%2Clatin-ext%2Clatin%2Cvietnamese&#038;ver=4.9.8' type='text/css' media='all' />

    <link href="https://fonts.googleapis.com/css?family=Raleway:200%2C400" rel="stylesheet" property="stylesheet" type="text/css" media="all">

    <link rel='stylesheet' href="{{ asset('assets/plugins/revslider/public/assets/css/settings.css') }}" type='text/css' media='all'>

    <link rel='stylesheet' href="{{ asset('assets/css/style-core.css') }}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('assets/css/gdlr-style-custom.css') }}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('assets/plugins/goodlayers-core/plugins/combine/style.css') }}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('assets/plugins/goodlayers-core/include/css/page-builder.css') }}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('assets/css/font-awesome.css') }}" type='text/css' media='all'>

    <script type='text/javascript' src="{{ asset('assets/js/jquery/jquery.js') }}"></script>
    
</head>

<body data-rsssl=1 
        class="home page-template-default page page-id-4931 gdlr-core-body seocrawler-body seocrawler-body-front seocrawler-full  seocrawler-with-sticky-navigation gdlr-core-link-to-lightbox"
    >

    @include('layouts/_nav_mobile')

    <div class="seocrawler-body-outer-wrapper">
        <div class="seocrawler-body-wrapper clearfix  seocrawler-with-frame">

            @include('layouts/_top_bar')

            @include('layouts/_header')

            @yield('content')

            <footer>

                @include('layouts/_footer')
            </footer>
        </div>
    </div>

    <a href="#seocrawler-top-anchor" class="seocrawler-footer-back-to-top-button" id="seocrawler-footer-back-to-top-button">
        <i class="fa fa-angle-up" ></i>
    </a>

    <script type='text/javascript' src="{{ asset('assets/js/jquery/jquery-migrate.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('assets/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('assets/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('assets/plugins/snazzy-maps/snazzymaps.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/revslider/public/assets/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js') }}"></script>  
    <script type="text/javascript" src="{{ asset('assets/plugins/revslider/public/assets/js/extensions/revolution.extension.actions.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('assets/plugins/revslider/public/assets/js/extensions/revolution.extension.video.min.js') }}"></script> 

    <script type="text/javascript">
        /*<![CDATA[*/
        function setREVStartSize(e) {
            try {
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        }; /*]]>*/
    </script>
    <script type="text/javascript">
        /*<![CDATA[*/
        function revslider_showDoubleJqueryError(sliderID) {
            var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
            errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
            errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
            errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
            errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
            jQuery(sliderID).show().html(errorMessage);
        } /*]]>*/
    </script>

    <script type='text/javascript' src="{{ asset('assets/js/jquery/ui/effect.min.js') }}"></script>
    <script type='text/javascript'>
        var infinite_script_core = {
            "home_url": "index.html"
        };
    </script>
    <script type='text/javascript' src="{{ asset('assets/js/script-core.js') }}"></script>

    <script type='text/javascript' src="{{ asset('assets/plugins/goodlayers-core/plugins/combine/script.js') }}"></script>
    <script type='text/javascript'>
        var gdlr_core_pbf = {
            "admin": "",
            "video": {
                "width": "640",
                "height": "360"
            },
            "ajax_url": "",
            "ilightbox_skin": "dark"
        };
    </script>
    <script type='text/javascript' src="{{ asset('assets/plugins/goodlayers-core/include/js/page-builder.js') }}"></script>


    <script>
        /*<![CDATA[*/
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = "";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        } /*]]>*/
    </script>
    <script type="text/javascript">
        /*<![CDATA[*/
        if (setREVStartSize !== undefined) setREVStartSize({
            c: '#rev_slider_1_1',
            gridwidth: [1280],
            gridheight: [645],
            sliderLayout: 'auto'
        });
        var revapi1, tpj;
        (function() {
            if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad);
            else onLoad();

            function onLoad() {
                if (tpj === undefined) {
                    tpj = jQuery;
                    if ("off" == "on") tpj.noConflict();
                }
                if (tpj("#rev_slider_1_1").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_1_1");
                } else {
                    revapi1 = tpj("#rev_slider_1_1").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "//demo.goodlayers.com/seocrawler/demo2/wp-content/plugins/revslider/public/assets/js/",
                        sliderLayout: "auto",
                        dottedOverlay: "none",
                        delay: 9000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            mouseScrollReverse: "default",
                            onHoverStop: "off",
                            bullets: {
                                enable: true,
                                hide_onmobile: false,
                                style: "uranus",
                                hide_onleave: false,
                                direction: "horizontal",
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 0,
                                v_offset: 30,
                                space: 9,
                                tmp: '<span class="tp-bullet-inner"></span>'
                            }
                        },
                        visibilityLevels: [1240, 1024, 778, 480],
                        gridwidth: 1280,
                        gridheight: 645,
                        lazyType: "none",
                        parallax: {
                            type: "mouse",
                            origo: "enterpoint",
                            speed: 400,
                            speedbg: 0,
                            speedls: 0,
                            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                        },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                };
            };
        }()); /*]]>*/
    </script>
    <script>
        /*<![CDATA[*/
        var htmlDivCss = unescape("%23rev_slider_1_1%20.uranus%20.tp-bullet%7B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20box-shadow%3A%200%200%200%202px%20rgba%28255%2C%20255%2C%20255%2C%200%29%3B%0A%20%20-webkit-transition%3A%20box-shadow%200.3s%20ease%3B%0A%20%20transition%3A%20box-shadow%200.3s%20ease%3B%0A%20%20background%3Atransparent%3B%0A%20%20width%3A15px%3B%0A%20%20height%3A15px%3B%0A%7D%0A%23rev_slider_1_1%20.uranus%20.tp-bullet.selected%2C%0A%23rev_slider_1_1%20.uranus%20.tp-bullet%3Ahover%20%7B%0A%20%20box-shadow%3A%200%200%200%202px%20rgba%28255%2C%20255%2C%20255%2C1%29%3B%0A%20%20border%3Anone%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background%3Atransparent%3B%0A%7D%0A%0A%23rev_slider_1_1%20.uranus%20.tp-bullet-inner%20%7B%0A%20%20-webkit-transition%3A%20background-color%200.3s%20ease%2C%20-webkit-transform%200.3s%20ease%3B%0A%20%20transition%3A%20background-color%200.3s%20ease%2C%20transform%200.3s%20ease%3B%0A%20%20top%3A%200%3B%0A%20%20left%3A%200%3B%0A%20%20width%3A%20100%25%3B%0A%20%20height%3A%20100%25%3B%0A%20%20outline%3A%20none%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%0A%20%20background-color%3A%20rgba%28255%2C%20255%2C%20255%2C%200.3%29%3B%0A%20%20text-indent%3A%20-999em%3B%0A%20%20cursor%3A%20pointer%3B%0A%20%20position%3A%20absolute%3B%0A%7D%0A%0A%23rev_slider_1_1%20.uranus%20.tp-bullet.selected%20.tp-bullet-inner%2C%0A%23rev_slider_1_1%20.uranus%20.tp-bullet%3Ahover%20.tp-bullet-inner%7B%0A%20transform%3A%20scale%280.4%29%3B%0A%20-webkit-transform%3A%20scale%280.4%29%3B%0A%20background-color%3Argb%28255%2C%20255%2C%20255%29%3B%0A%7D%0A");
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        } /*]]>*/
    </script>

    {{--
    <script type="text/javascript" src="{{ asset('assets/quform/js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/quform/js/scripts.js') }}"></script>  
        --}}

    @yield('scripts')  
</body>
</html>