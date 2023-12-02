@extends('ui.base')
@section('metadata')
<x-meta-data :details="$page_details" />
@endsection
@section('head')
<style>
</style>
@endsection



@section('content')


@include('ui.common.header')

<section class="about-banner">
  @if ($page_details->banner_image->file_path)
  <img src="{{asset($page_details->banner_image->file_path)}}" class="img-fluid" />
  @endif
  <div class="about-banner-text-cntr d-flex align-items-center justify-content-center">
    <div><span>{{$page_details->name}} </span>
      <h2>{{$page_details->title}}</h2>
    </div>
  </div>
</section>



<section class="about-cnotent inner-page contact-page ">


  <div class="container">

    <div class="row mb-4">
      <div class="col-md-6">
        <h3>Contact Us</h3>
        <form class="row g-3">
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Name</label>
            <input type="text" class="form-control" id="inputPassword4">
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
          </div>

          <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
          <div class="col-12">
            <label for="inputAddress2" class="form-label">Message </label>
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
              style="height: 100px"></textarea>
          </div>




          <div class="col-12">
            <button type="submit" class="btn btn-primary"> SUBMIT </button>
          </div>
        </form>
      </div>
      <div class="col-md-6">
        <h3>Address</h3>

        {!! $common_settings['contact_address1'] !!}



        <p><a href="tel:{!! $common_settings['contact_number'] !!}"><i class="ri-phone-fill"></i> {!!
            $common_settings['contact_number'] !!}</a></p>
        <p><a href="mailto:{!! $common_settings['contact_email'] !!}"><i class="ri-mail-line"></i> {!!
            $common_settings['contact_email'] !!}</a></p>
        <p class="social-icon">
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
        </p>

      </div>
    </div>








    <div class="row">
      <div class="col-md-12">
        {!! $common_settings['google_map_embed_code'] !!}

      </div>


    </div>



</section>
@include('ui.common.footer')
</div>
@endsection
@section('bottom')
<script type="text/javascript">
  $(document).ready(function() {
   
   
    
   
   
   
      });
</script>
@endsection