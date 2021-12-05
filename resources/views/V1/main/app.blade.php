<!DOCTYPE html>
<html lang="ru">
  <head itemscope itemtype="http://schema.org/WebSite">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @section('seo')@show
      @widget('app.widgets.v1.main_seo')
      @stack('css')
      <link rel="stylesheet" href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('css/custom-main.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('css/custom-class-main.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      @widget('app.widgets.v1.header')
        <div class="row">
          <div class="col-md-10 col-xs-12">
            @yield('content')
          </div>
          <div class="col-2 d-none d-lg-block d-xl-block d-md-block">
            <div class="w-100 g-4">
            @section('sidebar')
              @widget('app.widgets.v1.type_sport')
            @show
            </div>   
          </div>   
       </div> 
        @section('footer')  
          @widget('app.widgets.v1.footer')
        @show
    </div>
    @push('scripts') 
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
      (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
      m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

      ym(86771785, "init", {
          clickmap:true,
          trackLinks:true,
          accurateTrackBounce:true
      });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/86771785" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    @endpush
  </body>
</html>
