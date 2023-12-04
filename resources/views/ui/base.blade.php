<!DOCTYPE html>

<html>

<head>
      {!! $common_settings['google_tag_manager_head'] !!}

      <!-- Required meta tags -->
      <meta charset="utf-8">

      <meta name="viewport" content="width=device-width, initial-scale=1">
      @yield('metadata')
      <link rel="shortcut icon" href="{{asset($common_settings['fav_icon'])}}">
      <link rel="canonical" href="{{url()->current()}}" />
      @include('ui.include.style')

      @section('head')
      @show

      {!! $common_settings['other_common_scripts'] !!}

      <style>
            .grecaptcha-badge {
                  display: none !important;
            }
      </style>
</head>

<body>

      {!! $common_settings['google_tag_manager_body'] !!}


      @section('content')
      @show


      <!--=================================
         Back To Top-->
      <a href="#" class="scrollup waves-effect waves-dark"> <i class="fa fa-angle-up active"> </i> </a>
      <!--=================================
         Back To Top-->

      @include('ui.include.script')

      @section('bottom')


      @show



</body>

</html>