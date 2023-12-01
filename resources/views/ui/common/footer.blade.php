<section class="foot-element">
  <div class="container  ">

    <div class="row">
      @if (!empty($footer_listings) && count($footer_listings)>0)
      @foreach ($footer_listings as $item)
      <div class="col-md-4">
        <a href="{{url($item->link)}}">
          <div class="element-item">
            @if (!empty($item->media->file_path))
            <img src="{{asset($item->media->file_path)}} " class="img-fluid" />
            @endif
            <h4>{{$item->title}}</h4>
          </div>
        </a>
      </div>
      @endforeach
      @endif

    </div>


  </div>
</section>






<hr class="main-hr" />


<footer>
  <div class="container foot-sec-1">

    <div class="row">

      <div class="col-md-4">
        <img src="{{asset('assets/img/foot-logo.png')}} " class="img-fluid" />
        <h5>About DDHA </h5>
        <p>{!! $common_settings['about_ddha'] !!}</p>
      </div>

      <div class="col-md-2">
        <x-menu menu-name="Footer Menu" />
      </div>

      <div class="col-md-3">
        <h3>Contact Us </h3>
        <ul>
          {!! $common_settings['contact_address1'] !!}

          <li><a href="tel:{!! $common_settings['contact_number'] !!}"><i class="ri-phone-fill"></i> {!!
              $common_settings['contact_number'] !!}</a></li>
          <li><a href="mailto:{!! $common_settings['contact_email'] !!}"><i class="ri-mail-line"></i> {!!
              $common_settings['contact_email'] !!}</a></li>
          <li class="social-icon">
            @if (!empty($common_settings['facebook-link']))
            <a href="{{$common_settings['facebook-link']}}" target="_blank"> <i class="ri-facebook-line"></i>
            </a>
            @endif
            @if (!empty($common_settings['intagram-link']))
            <a href="{{$common_settings['intagram-link']}}" target="_blank"> <i class="ri-instagram-line"></i> </a>
            @endif
            @if (!empty($common_settings['twitter-link']))
            <a href="{{$common_settings['twitter-link']}}" target="_blank"> <i class="ri-twitter-fill"></i> </a>
            @endif
            @if (!empty($common_settings['youtube-link']))
            <a href="{{$common_settings['youtube-link']}}" target="_blank"> <i class="ri-youtube-fill"></i> </a>
            @endif
            @if (!empty($common_settings['linkedin-link']))
            <a href="{{$common_settings['linkedin-link']}}" target="_blank"> <i class="ri-linkedin-line"></i> </a>
            @endif
          </li>
        </ul>
      </div>
      <div class="col-md-3">
        <h3>Google Map </h3>
        {!! $common_settings['google_map_embed_code'] !!}
      </div>


    </div>







  </div>

  <div class="  foot-sec-2">

    <div class="container  ">

      <div class="row">
        <div class="col-md-6">

          <x-menu menu-name="Bottom Menu" />

        </div>
        <div class="col-md-6">
          <p>© Dehradun Hills Academy Dehradun | Copyright 2022-23. All rights reserved</p>
        </div>
      </div>




    </div>


  </div>
</footer>