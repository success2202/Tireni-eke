<!DOCTYPE html>
<html lang="en-US" class="no-js no-svg">

<!-- Mirrored from agrimo-demo.pbminfotech.com/demo2/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Nov 2025 11:32:15 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- browser-theme-color for WordPress -->
    <meta name="theme-color" content="#eddd5e">
    <meta name="msapplication-navbutton-color" content="#eddd5e">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Tireni &#8211; Eke Global &amp; Solutions Ltd</title>
    <meta name='robots' content='max-image-preview:large' />
    <style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
    <link href='https://fonts.gstatic.com/' crossorigin rel='preconnect' />
    
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/agrimo-demo.pbminfotech.com\/demo2\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.8.3"
            }
        };
        /*! This file is auto-generated */
        ! function(s, n) {
            var o, i, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    a = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === a[t]
                })
            }

            function u(e, t) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                for (var n = e.getImageData(16, 16, 1, 1), a = 0; a < n.data.length; a++)
                    if (0 !== n.data[a]) return !1;
                return !0
            }

            function f(e, t, n, a) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\udde8\ud83c\uddf6", "\ud83c\udde8\u200b\ud83c\uddf6") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                );
                    case "emoji":
                        return !a(e, "\ud83e\udedf")
                }
                return !1
            }

            function g(e, t, n, a) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : s.createElement("canvas"),
                    o = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    i = (o.textBaseline = "top", o.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    i[e] = t(o, e, n, a)
                }), i
            }

            function t(e) {
                var t = s.createElement("script");
                t.src = e, t.defer = !0, s.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", i = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                s.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + g.toString() + "(" + [JSON.stringify(i), f.toString(), p
                                .toString(), u.toString()
                            ].join(",") + "));",
                            a = new Blob([e], {
                                type: "text/javascript"
                            }),
                            r = new Worker(URL.createObjectURL(a), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(r.onmessage = function(e) {
                            c(n = e.data), r.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = g(i, f, p, u))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
    <style id='wp-emoji-styles-inline-css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='classic-theme-styles-inline-css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    
    <link rel='stylesheet' id='brands-styles-css'
        href="{{ asset('wp-content/plugins/woocommerce/assets/css/brandsb7af.css?ver=10.0.3') }}" media='all' />
    <link rel='stylesheet' id='pbmit-agrimo-header-style-css'
        href="{{ asset('wp-content/themes/agrimo/css/header/header-style-2.min32d4.css?ver=6.8.3') }}" media='all' />
    <link rel='stylesheet' id='pbmit-icon-heading-style-1-css'
        href="{{ asset('wp-content/themes/agrimo/css/icon-heading/icon-heading-style-1.min32d4.css?ver=6.8.3') }}"
        media='all' />
    <link rel='stylesheet' id='pbmit-spinner-box-style-1-css'
        href="{{ asset('wp-content/themes/agrimo/css/spinner-box/spinner-box-style-1.min32d4.css?ver=6.8.3') }}"
        media='all' />
    <link rel='stylesheet' id='pbmit-icon-heading-style-3-css'
        href="{{ asset('wp-content/themes/agrimo/css/icon-heading/icon-heading-style-3.min32d4.css?ver=6.8.3') }}"
        media='all' />
    <link rel='stylesheet' id='pbmit-icon-heading-style-12-css'
        href="{{ asset('wp-content/themes/agrimo/css/icon-heading/icon-heading-style-12.min32d4.css?ver=6.8.3') }}"
        media='all' />
    <link rel='stylesheet' id='pbmit-marquee-effect-style-1-css'
        href="{{ asset('wp-content/themes/agrimo/css/marquee-effect/marquee-effect-style-1.min32d4.css?ver=6.8.3') }}"
        media='all' />
    <link rel='stylesheet' id='pbmit-service-style-2-css'
        href="{{ asset('wp-content/themes/agrimo/css/service/service-style-2.min32d4.css?ver=6.8.3') }}"
        media='all' />
    <link rel='stylesheet' id='pbmit-static-box-style-1-css'
        href="{{ asset('wp-content/themes/agrimo/css/static-box/static-box-style-1.min32d4.css?ver=6.8.3') }}"
        media='all' />
    <link rel='stylesheet' id='pbmit-icon-heading-style-2-css'
        href="{{ asset('wp-content/themes/agrimo/css/icon-heading/icon-heading-style-2.min32d4.css?ver=6.8.3') }}"
        media='all' />
    <link rel='stylesheet' id='pbmit-icon-heading-style-5-css'
        href="{{ asset('wp-content/themes/agrimo/css/icon-heading/icon-heading-style-5.min32d4.css?ver=6.8.3') }}"
        media='all' />
    <link rel='stylesheet' id='pbmit-team-style-1-css'
        href="{{ asset('wp-content/themes/agrimo/css/team/team-style-1.min32d4.css?ver=6.8.3') }}" media='all' />
    <link rel='stylesheet' id='pbmit-client-style-1-css'
        href="{{ asset('wp-content/themes/agrimo/css/client/client-style-1.min32d4.css?ver=6.8.3') }}"
        media='all' />
    <link rel='stylesheet' id='pbmit-icon-heading-style-6-css'
        href="{{ asset('wp-content/themes/agrimo/css/icon-heading/icon-heading-style-6.min32d4.css?ver=6.8.3') }}"
        media='all' />
    <link rel='stylesheet' id='pbmit-blog-style-1-css'
        href="{{ asset('wp-content/themes/agrimo/css/blog/blog-style-1.min32d4.css?ver=6.8.3') }}" media='all' />
    <link rel='stylesheet' id='kirki-styles-css'
        href='https://agrimo-demo.pbminfotech.com/demo2?action=kirki-styles&amp;ver=3.1.9' media='all' />
    <link rel='stylesheet' id='bootstrap-css'
        href="{{ asset('wp-content/themes/agrimo/libraries/bootstrap/css/bootstrap.min32d4.css?ver=6.8.3') }}"
        media='all' />
    <link rel='stylesheet' id='pbmit-elementor-style-css'
        href="{{ asset('wp-content/themes/agrimo/css/elementor.min32d4.css?ver=6.8.3') }}" media='all' />
    <link rel='stylesheet' id='pbmit-core-style-css'
        href="{{ asset('wp-content/themes/agrimo/css/core.min32d4.css?ver=6.8.3') }}" media='all' />
    <link rel='stylesheet' id='pbmit-theme-style-css'
        href="{{ asset('wp-content/themes/agrimo/css/theme.min32d4.css?ver=6.8.3') }}" media='all' />
    <link rel='stylesheet' id='pbmit-widget-style-css'
        href="{{ asset('wp-content/themes/agrimo/css/widget.min32d4.css?ver=6.8.3') }}" media='all' />
    <link rel='stylesheet' id='pbmit-woocommerce-style-css'
        href="{{ asset('wp-content/themes/agrimo/css/woocommerce.min32d4.css?ver=6.8.3') }}" media='all' />
    <link rel='stylesheet' id='select2-css'
        href="{{ asset('wp-content/plugins/woocommerce/assets/css/select2b7af.css?ver=10.0.3') }}" media='all' />
    <link rel='stylesheet' id='magnific-popup-css'
        href="{{ asset('wp-content/themes/agrimo/libraries/magnific-popup/magnific-popup32d4.css?ver=6.8.3') }}"
        media='all' />
    <link rel='stylesheet' id='pbmit-base-icons-css'
        href="{{ asset('wp-content/themes/agrimo/libraries/pbminfotech-base-icons/css/pbminfotech-base-icons32d4.css?ver=6.8.3') }}"
        media='all' />
    <link rel='stylesheet' id='balloon-css'
        href="{{ asset('wp-content/themes/agrimo/libraries/balloon/balloon.min32d4.css?ver=6.8.3') }}"
        media='all' />
    <link rel='stylesheet' id='pbmit-dynamic-style-css'
        href="{{ asset('wp-content/pbmit-agrimo-css/3/theme-style.min252c.css?ver=282293') }}" media='all' />
    <link rel='stylesheet' id='pbmit-global-color-style-css'
        href="{{ asset('wp-content/themes/agrimo/css/global-color.min32d4.css?ver=6.8.3') }}" media='all' />
    <link rel='stylesheet' id='pbmit-responsive-style-css'
        href="{{ asset('wp-content/themes/agrimo/css/responsive.min32d4.css?ver=6.8.3') }}" media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href="{{ asset('wp-content/uploads/sites/3/elementor/css/custom-frontend.min5d0e.css?ver=1741157974') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-post-6-css'
        href="{{ asset('wp-content/uploads/sites/3/elementor/css/post-65d0e.css?ver=1741157974') }}"
        media='all' />
    <link rel='stylesheet' id='e-animation-fadeIn-css'
        href="{{ asset('wp-content/plugins/elementor/assets/lib/animations/styles/fadeIn.min3dd9.css?ver=3.27.6') }}"
        media='all' />
    <link rel='stylesheet' id='widget-image-css'
        href="{{ asset('wp-content/plugins/elementor/assets/css/widget-image.min3dd9.css?ver=3.27.6') }}"
        media='all' />
    <link rel='stylesheet' id='widget-text-editor-css'
        href="{{ asset('wp-content/plugins/elementor/assets/css/widget-text-editor.min3dd9.css?ver=3.27.6') }}"
        media='all' />
    <link rel='stylesheet' id='widget-icon-list-css'
        href="{{ asset('wp-content/uploads/sites/3/elementor/css/custom-widget-icon-list.min5d0e.css?ver=1741157974') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-post-1558-css'
        href="{{ asset('wp-content/uploads/sites/3/elementor/css/post-15589f45.css?ver=1741157977') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-icons-pbmit-agrimo-icon-css'
        href="{{ asset('wp-content/themes/agrimo/libraries/pbmit-agrimo-icon/flaticon_agrimo8a54.css?ver=1.0.0') }}"
        media='all' />
    <script src="{{ asset('wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1') }}" id="jquery-core-js"></script>
    <script src="{{ asset('wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1') }}" id="jquery-migrate-js"></script>
    <script src="{{ asset('wp-content/plugins/pbminfotech-theme-dock/js/jquery.scrollbar.min32d4.js?ver=6.8.3') }}"
        id="jquery-scrollbar-js"></script>
    <script src="{{ asset('wp-content/plugins/pbminfotech-theme-dock/js/script32d4.js?ver=6.8.3') }}"
        id="pbmdock-script-js"></script>
    <script
        src="{{ asset('wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min5ffa.js?ver=2.7.0-wc.10.0.3') }}"
        id="jquery-blockui-js" defer data-wp-strategy="defer"></script>
    <script id="wc-add-to-cart-js-extra">
        var wc_add_to_cart_params = {
            "ajax_url": "\/demo2\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/demo2\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/agrimo-demo.pbminfotech.com\/demo2\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
    </script>
    <script src="{{ asset('wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.minb7af.js?ver=10.0.3') }}"
        id="wc-add-to-cart-js" defer data-wp-strategy="defer"></script>
    <script
        src="{{ asset('wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min7d8f.js?ver=2.1.4-wc.10.0.3') }}"
        id="js-cookie-js" defer data-wp-strategy="defer"></script>
    <script id="woocommerce-js-extra">
        var woocommerce_params = {
            "ajax_url": "\/demo2\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/demo2\/?wc-ajax=%%endpoint%%",
            "i18n_password_show": "Show password",
            "i18n_password_hide": "Hide password"
        };
    </script>
    <script src="{{ asset('wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.minb7af.js?ver=10.0.3') }}"
        id="woocommerce-js" defer data-wp-strategy="defer"></script>
    <script src="{{ asset('wp-content/themes/agrimo/libraries/jquery-observe/jquery-observe.min32d4.js?ver=6.8.3') }}"
        id="jquery-observe-js"></script>
    <script
        src="{{ asset('wp-content/plugins/woocommerce/assets/js/select2/select2.full.min3f52.js?ver=4.0.3-wc.10.0.3') }}"
        id="select2-js" defer data-wp-strategy="defer"></script>
    <script
        src="{{ asset('wp-content/themes/agrimo/libraries/magnific-popup/jquery.magnific-popup.min32d4.js?ver=6.8.3') }}"
        id="magnific-popup-js"></script>
    <script id="pbmit-core-script-js-extra">
        var pbmit_js_variables = {
            "responsive": null,
            "ajaxurl": "https:\/\/agrimo-demo.pbminfotech.com\/demo2\/wp-admin\/admin-ajax.php",
            "ajaxnonce": "4cbb1d4f63",
            "ajaxnonce_ajax_pagination": "77435c722e",
            "ajaxnonce_sortcat": "e34a0a6e1c"
        };
    </script>
    <script src="{{ asset('wp-content/themes/agrimo/js/core.min32d4.js?ver=6.8.3') }}" id="pbmit-core-script-js"></script>
    <script src="{{ asset('wp-content/themes/agrimo/js/elementor.min32d4.js?ver=6.8.3') }}" id="pbmit-elementor-script-js">
    </script>
    <script src="{{ asset('wp-content/themes/agrimo/js/lottie-player.min32d4.js?ver=6.8.3') }}" id="lottie-player-js">
    </script>
  
    <meta name="generator"
        content="Elementor 3.27.6; features: e_font_icon_svg, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {

            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {

            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>
    <meta name="generator"
        content="Powered by Slider Revolution 6.7.20 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <link rel="icon" href="{{ 'wp-content/uploads/sites/3/2024/04/cropped-favicon-32x32.png' }}"
        sizes="32x32" />
    <link rel="icon" href="{{ 'wp-content/uploads/sites/3/2024/04/cropped-favicon-192x192.png' }}"
        sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ 'wp-content/uploads/sites/3/2024/04/cropped-favicon-180x180.png' }}" />
    <meta name="msapplication-TileImage"
        content="https://agrimo-demo.pbminfotech.com/demo2/wp-content/uploads/sites/3/2024/04/cropped-favicon-270x270.png" />
    <script>
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };
    </script>


    <style>
        .about-section {
            padding: 60px 5%;
            background: #ffffff;
        }


        .about-container {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 40px;
            align-items: stretch;
        }


        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.12);
        }


        .about-text h2 {
            font-size: 36px;
            margin-bottom: 15px;
            color: #2f4f2f;
        }


        .about-text h3 {
            margin-top: 25px;
            font-size: 22px;
            color: #365d35;
        }


        .about-text p,
        .about-text ul li {
            color: #444;
            line-height: 1.6;
            margin-bottom: 12px;
        }


        .about-text ul {
            padding-left: 20px;
        }


        /* Responsive */
        @media (max-width: 900px) {
            .about-container {
                grid-template-columns: 1fr;
            }

            .about-image img {
                height: 300px;
            }
        }

        .about-wrapper {
            padding: 50px 0;
            background: #fff;
        }

        .about-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
        }

        .about-title {
            font-size: 26px;
            font-weight: 800;
            color: #1a1a1a;
            margin-bottom: 20px;
        }

        .about-section h4 {
            font-size: 18px;
            font-weight: 700;
            color: #1b3b1a;
            /* earthy green */
            margin-top: 18px;
        }

        .about-section p,
        .about-section li {
            font-size: 15px;
            color: #444;
            line-height: 1.7;
        }

        .about-section ul {
            padding-left: 18px;
        }

        /* CONTACT BUTTON */
        .contact-btn {
            display: inline-block;
            background: #1b3b1a;
            color: #fff;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 25px;
            transition: 0.3s;
        }

        .contact-btn:hover {
            background: #145214;
        }


        .about-hero {
            height: 200px;
            background-image: url('https://images.unsplash.com/photo-1501004318641-b39e6451bec6');
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .about-hero-overlay {
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.45);
            /* Dark overlay */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .about-hero-content {
            text-align: center;
            color: #fff;
            padding: 20px;
        }

        .about-hero-content h1 {
            font-size: 32px;
            font-weight: 400;
            margin-bottom: 10px;
        }

        .breadcrumb {
            font-size: 16px;
        }

        .breadcrumb a {
            color: #fff;
            text-decoration: none;
            font-weight: 400;
        }

        .breadcrumb span {
            margin: 0 5px;
            color: #ddd;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .about-hero {
                height: 220px;
            }

            .about-hero-content h1 {
                font-size: 32px;
            }

            .breadcrumb {
                font-size: 14px;
            }
        }
    </style>

</head>

<body
    class="home wp-singular page-template-default page page-id-1558 wp-theme-agrimo theme-agrimo woocommerce-no-js  pbmit-top-menu-total-6 pbmit-sidebar-no elementor-default elementor-kit-6 elementor-page elementor-page-1558">
    <div id="page" class="site pbmit-parent-header-style-2">
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>





        <header id="masthead" class="site-header pbmit-header-style-2 pbmit-sticky-logo-no">
            <div class="pbmit-sticky-header "></div>
            <div class="pbmit-header-overlay">
                <div class="pbmit-header-height-wrapper" style="min-height:100px;">
                    <div
                        class="pbmit-main-header-area pbmit-sticky-logo-no pbmit-responsive-logo-no pbmit-header-wrapper pbmit-bg-color-transparent">
                        <div class="container">
                            <div class="pbmit-header-content d-flex justify-content-between align-items-center">
                                <div class="pbmit-menu-logoarea d-flex justify-content-between align-items-center">
                                    <!-- Top Navigation Menu -->
                                    <div class="navigation-top">
                                        <div class="wrap">
                                            <nav id="site-navigation"
                                                class="main-navigation pbmit-navbar  pbmit-main-active-color-secondarycolor pbmit-dropdown-active-color-secondarycolor"
                                                aria-label="Top Menu">
                                                <div class="menu-main-menu-container">
                                                    <ul id="pbmit-top-menu" class="menu">
                                                        <li id="menu-item-23"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-23">
                                                            <a href="{{ route('users.home') }}">Home</a>
                                                        </li>
                                                        <li id="menu-item-4488"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4488">
                                                            <a href="{{ route('users.about-us') }}">About-us</a>
                                                        </li>
                                                        <li id="menu-item-4504"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4504">
                                                            <a href="{{ route('users.contact-us') }}">Contact-us</a>
                                                        </li>
                                                        {{-- <li id="menu-item-4489" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4489">
    <a href="#">Portfolio</a>
</li> --}}

                                                        {{-- <li id="menu-item-4487" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4487">
    <a href="#">Blog</a>
</li>
<li id="menu-item-4503" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4503">
    <a href="contact-us/index.html">Contact Us</a></li> --}}
                                                    </ul>
                                                </div>
                                            </nav><!-- #site-navigation -->
                                        </div><!-- .wrap -->
                                    </div><!-- .navigation-top -->
                                </div>
                                <div class="pbmit-logo-menuarea d-flex align-items-center">
                                    <div class="site-branding pbmit-logo-area">
                                        <div class="wrap">
                                            <h1 class="site-title"><a href="{{ route('users.home') }}"
                                                    rel="home"><span class="site-title-text">Tireni Eke Global -
                                                        Solutions Ltd.</span><img class="pbmit-main-logo"
                                                        src="{{ asset('assets/' . $settings->logo) }}" alt="Tireni eke"
                                                        title="Tireni Eke Solutions" /></a></h1><!-- Logo area -->
                                        </div><!-- .wrap -->
                                    </div><!-- .site-branding -->
                                </div>
                                <div class="pbmit-right-box d-flex align-items-center">
                                    <div class="pbmit-button-box">
                                        <div class="pbmit-header-button">
                                            <a href="#">
                                                <span class="pbmit-header-button-text-1">Call us Now</span> <span
                                                    class="pbmit-header-button-text-2">{{ $settings->site_phone }}</span>
                                            </a>
                                        </div>
                                    </div>
                                    {{-- <div class="pbmit-search-cart-box">							
									<div class="pbmit-header-search-btn"><a href="#" title="Search"><i class="pbmit-base-icon-search-1"></i></a></div>
						</div> --}}
                                    <div class="pbmit-button-box-second">

                                        <a href="{{ route('users.contact-us') }}">
                                            <span
                                                class="pbmit-header-button2-text">{{ $settings->site_email }}</span><span
                                                class="pbmit-button-icon-wrapper"><span
                                                    class="pbmit-button-icon"></span></span> </a>


                                    </div>
                                    <div class="pbmit-burger-menu-wrapper">
                                        <div class="pbmit-mobile-menu-bg"></div>
                                        <button id="menu-toggle" class="nav-menu-toggle">
                                            <i class="pbmit-base-icon-menu-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div><!-- pbmit-header-content-end -->
                        </div><!-- pbmit-header-inner-end -->
                    </div><!-- container-end -->
                </div><!-- pbmit-header-height-wrapper-end -->
            </div><!-- pbmit-header-overlay-end -->




        </header> <!-- #masthead -->

     

  <div class="about-hero-overlay" 
     style="
        width: 100%; 
        display: flex; 
        justify-content: center;   
        align-items: center;       
        text-align: center; 
        padding: 50px 20px;
        background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/Leaf_icon_01.svg/512px-Leaf_icon_01.svg.png') !important;
        background-repeat: no-repeat;
        background-size: 220px auto;
        background-position: left center;   /* MOVED LEFT */
     ">

    <div class="about-hero-content" style="max-width: 600px;">

        <h3 style="
              color: #1f4e1f; 
              font-weight: 400; 
              margin-bottom: 10px;
            ">
          About Us
        </h3>

        <nav class="breadcrumb" style="font-size: 16px;">
          <a href="{{ route('users.home') }}" style="color: white; text-decoration: none;">Home</a>
          <span style="color: white;"> / </span>
          <span style="color: white;">About</span>
        </nav>

    </div>
</div>



        <div class="container about-wrapper">


            <div class="row g-4 about-section">

                <!-- COL 1: IMAGE -->
                <div class="col-12 col-md-4">
                    <img src="{{ asset('images/home/s8.jpeg') }}" class="about-img" alt="About Us Image">
                </div>

                <!-- COL 2: TEXT PART 1 -->
                <div class="col-12 col-md-4">
                    @foreach ($about as $item)
                        <h4>{{ $item->title }}</h4>
                        <p>
                            {!! $item->contents !!}
                        </p>
                    @endforeach

                </div>

                <!-- COL 3: TEXT PART 2 + CONTACT BUTTON -->
                <div class="col-12 col-md-4">
                    @foreach ($about2 as $item)
                        <h4>{{ $item->title }}</h4>
                        <ul>
                            {!! $item->contents !!}
                        </ul>
                    @endforeach
                    <!-- CONTACT BUTTON -->
                    <a href="{{ route('users.contact-us') }}" class="contact-btn">Contact Us</a>
                </div>

            </div>
        </div>


        @include('layouts.footer')


     
       
     
       
       
</body>

</html>
