<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WZRBTBG');</script>
    <!-- End Google Tag Manager -->

    <title>DarCélulas - Registro Nacional de Donantes de Células Progenitoras Hematopoyéticas</title>
    <link rel="shortcut icon" type="image/png" href="{!! asset('img/favicon.png') !!}"/>
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
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-132877234-1');
      gtag('config', 'AW-768217027');
      gtag('config', 'AW-824833818');
    </script>

    @yield('conversiones')


    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '237184333865849');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=237184333865849&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

  </head>
  <body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZRBTBG"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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
        @yield('content')
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
        // Anima el btn de activación del menú
        setTimeout(animacionBtnMenu, 800);
        function animacionBtnMenu() {
          $('#btn_menu').addClass('menu__item--current');
        }
      });
    </script>
    <script src="{!! asset('js/menu.js') !!}"></script>

    <script type="text/javascript">
    var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq ||
    {widgetcode:"79fde5a98e10ccaf060f416d020e7f40d477f6c510cca7f62c79b24a048b6bc5834fb872ce5c4a41085bbab032e52429fa42433042626f46baa0ae6c2b094f6781712f2ecf0b6b424bf3f9d0e05f6697", values:{},ready:function(){}};
    var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;
    s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
    </script>

    @yield('js')
  </body>
</html>
