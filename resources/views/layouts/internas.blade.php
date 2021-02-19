<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WZRBTBG');
    </script>
    <!-- End Google Tag Manager -->

    <title>DarCélulas - Registro Nacional de Donantes de Células Progenitoras Hematopoyéticas</title>
    <link rel="shortcut icon" type="image/png" href="{!! asset('img/favicon.png') !!}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('css/styles.css') !!}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    @yield('styles')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132877234-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-132877234-1');
        gtag('config', 'AW-768217027');
        gtag('config', 'AW-824833818');
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZRBTBG" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- btn menu -->
    <div class="menu--antonio">
        <div class="menu_wrap">
            <div id="btn_menu" class="menu__item">
                <a href="#" class="menu__link">MENÚ</a>
            </div>
        </div>
    </div>
    <!-- menú lateral -->
    <span id="dark_shadow"></span>
    <div id="lateral_menu">
        <div class="row p-3">
            <div class="col text-right">
                <a id="btn_close"><i class="fas fa-times"></i></a>
            </div>
        </div>
        <div class="row p-3">
            <div class="col">
                @include('includes.menu')
            </div>
        </div>
    </div>
    <!-- Contenido -->
    <div id="content_wrap" class="container-fluid">
        <div class="row">
            <div class="col-12 background_general">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 col-md-4 py-4">
                                <a href="{!! route ('inicio') !!}"><img class="img-fluid" src="{!! asset('img/logo_darcelulas_blanco_w.png') !!}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content')

            <div class="col-12 background_general py-3">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-lg-3 text-center text-lg-left">
                        <p class="mb-0">Síguenos en nuestras redes sociales</p>
                        <span class="perfil_social">@IDCBIS | </span>
                        <ul class="redes">
                            <li>
                                <a href="https://www.facebook.com/IDCBIS/" target="_blank">
                                    <span class="facebook"></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/idcbis/?hl=es" target="_blank">
                                    <span class="instagram"></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/IDCBIS" target="_blank">
                                    <span class="twitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCFCq9ge7iw6zMZ5_WoyvTNg" target="_blank">
                                    <span class="youtube"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-3 text-center">
                        <p class="mb-0">Edificio IDCBIS - Carrera 32 # 12-81 | Teléfono: (57+1) 364 9620 Ext. 9447</p>
                        <p class="mb-0">captacionregistro@idcbis.org.co | contacto@idcbis.org.co</p>
                    </div>
                    <div class="col-12 col-lg-3 text-center text-lg-left">
                        <a href="https://idcbis.org.co/" target="_blank">
                            <picture>
                                <img class="img-fluid" src="{!! asset('img/logo_idcbis.png') !!}" alt="">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            // Anima el btn de activación del menú
            setTimeout(animacionBtnMenu, 800);

            function animacionBtnMenu() {
                $('#btn_menu').addClass('menu__item--current');
            }
        });
    </script>
    <script>
        $('a.ancla').click(function(e) {
            e.preventDefault(); //evitar el eventos del enlace normal
            var strAncla = $(this).attr('href'); //id del ancla
            $('body,html').stop(true, true).animate({
                scrollTop: $(strAncla).offset().top
            }, 1000);

        });
    </script>
    <script src="{!! asset('js/menu.js') !!}"></script>
    @yield('js')
</body>

</html>