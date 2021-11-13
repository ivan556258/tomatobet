<!DOCTYPE html>
<html lang="ru">
  <head itemscope itemtype="http://schema.org/WebSite">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @section('seo')@show
      @widget('app.widgets.v1.main_seo')
      @stack('css')
      <link rel="stylesheet" href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      @widget('app.widgets.v1.header')
        <div class="row">
          <div class="col-10">
            @yield('content')
          </div>
          <div class="col-2 d-none d-lg-block d-xl-block d-md-block">
            <div class="row g-4">
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
    @endpush
  </body>
</html>
