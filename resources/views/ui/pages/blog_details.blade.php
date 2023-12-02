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

<section class="header-news">
  <div class="container">
    <div class="row  d-flex align-items-center">
      <div class="col-md-8 inner-page-menu">
        <ul>
          <li><a href="{{route('index')}}">Home</a> | <a href="{{route('blog')}}">Blog</a></li>
        </ul>
      </div>
      <div class="col-md-4 ">
        <div class="menu-social">
          <span> SOCIAL MEDIA</span>
          <a href="https://www.facebook.com/sharer/sharer.php?u={{url('/blog/'.$page_details->slug)}}"
            target="_blank"><i class="ri-facebook-fill"></i></a>
          <a href="https://twitter.com/intent/tweet?url={{url('/blog/'.$page_details->slug)}}" target="_blank"><i
              class="ri-twitter-fill"></i></a>
          <a href="https://www.linkedin.com/shareArticle?mini=true&url={{url('/blog/'.$page_details->slug)}}"
            target="_blank"><i class="ri-linkedin-line"></i></a>
        </div>
      </div>

    </div>
  </div>
</section>


<section class="  blog-detail-page ">
  <div class="container">
    <div class="row  ">



      <div class="col-lg-12 col-12 ">

        <div class="blog-post-time"><b>{{date('F d Y', strtotime($page_details->published_on))}}</b> | </span> @php
          $words_per_minute = 125;
          $words_per_second = $words_per_minute / 60;
          $word_count = str_word_count( strip_tags( $page_details->content) );
          $min = floor( $word_count / $words_per_minute );
          @endphp
          {{$min }} min read
        </div>
        <h2>{{$page_details->title}}</h2>

        <p>{!!$page_details->short_description!!}</p>
        <div class="blog-share sticky-top">
          <div class="row">
            <div class="col-md-6 col-6 d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path d="M20 22H4v-2a5 5 0 0 1 5-5h6a5 5 0 0 1 5 5v2zm-8-9a6 6 0 1 1 0-12 6 6 0 0 1 0 12z"></path>
              </svg>
              <h4>{{$page_details->published_by??="Admin"}}</h4>
            </div>
            <div class="col-md-6 col-6 d-flex align-items-center  justify-content-end">
              <span>Share </span>
              <a href="https://www.facebook.com/sharer/sharer.php?u={{url('/blog/'.$page_details->slug)}}"
                target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z"></path>
                  <path
                    d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.989C18.343 21.129 22 16.99 22 12c0-5.523-4.477-10-10-10z">
                  </path>
                </svg>
              </a>
              <a href="https://twitter.com/intent/tweet?url={{url('/blog/'.$page_details->slug)}}" target="_blank"><svg
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z"></path>
                  <path
                    d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z">
                  </path>
                </svg>
              </a>
              <a href="https://www.linkedin.com/shareArticle?mini=true&url={{url('/blog/'.$page_details->slug)}}"
                target="_blank"> <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M16.283 0.000111229H2.80799C2.65652 -0.00199245 2.50612 0.0257627 2.36537 0.0817915C2.22463 0.13782 2.0963 0.221025 1.98772 0.326655C1.87913 0.432284 1.79242 0.558269 1.73253 0.697414C1.67264 0.836559 1.64075 0.986139 1.63867 1.13761V14.7717C1.64075 14.9232 1.67264 15.0728 1.73253 15.2119C1.79242 15.351 1.87913 15.477 1.98772 15.5827C2.0963 15.6883 2.22463 15.7715 2.36537 15.8275C2.50612 15.8836 2.65652 15.9113 2.80799 15.9092H16.283C16.4345 15.9113 16.5849 15.8836 16.7256 15.8275C16.8664 15.7715 16.9947 15.6883 17.1033 15.5827C17.2119 15.477 17.2986 15.351 17.3585 15.2119C17.4183 15.0728 17.4502 14.9232 17.4523 14.7717V1.13761C17.4502 0.986139 17.4183 0.836559 17.3585 0.697414C17.2986 0.558269 17.2119 0.432284 17.1033 0.326655C16.9947 0.221025 16.8664 0.13782 16.7256 0.0817915C16.5849 0.0257627 16.4345 -0.00199245 16.283 0.000111229ZM6.43526 13.316H4.0489V6.15693H6.43526V13.316ZM5.24208 5.15466C4.91297 5.15466 4.59734 5.02392 4.36463 4.7912C4.13191 4.55849 4.00117 4.24286 4.00117 3.91375C4.00117 3.58464 4.13191 3.26901 4.36463 3.03629C4.59734 2.80358 4.91297 2.67284 5.24208 2.67284C5.41684 2.65302 5.59381 2.67034 5.76141 2.72365C5.92902 2.77697 6.08346 2.86509 6.21465 2.98224C6.34583 3.09939 6.4508 3.24292 6.52266 3.40345C6.59453 3.56397 6.63168 3.73787 6.63168 3.91375C6.63168 4.08963 6.59453 4.26352 6.52266 4.42405C6.4508 4.58457 6.34583 4.72811 6.21465 4.84526C6.08346 4.9624 5.92902 5.05052 5.76141 5.10384C5.59381 5.15716 5.41684 5.17448 5.24208 5.15466ZM15.0421 13.316H12.6557V9.47398C12.6557 8.51148 12.3137 7.88307 11.4466 7.88307C11.1783 7.88503 10.917 7.9692 10.698 8.12423C10.4789 8.27925 10.3127 8.49769 10.2216 8.75011C10.1594 8.93708 10.1324 9.13398 10.1421 9.33079V13.3081H7.75572V6.14897H10.1421V7.1592C10.3589 6.78304 10.6742 6.47314 11.054 6.26289C11.4339 6.05263 11.8639 5.94999 12.2978 5.96602C13.8887 5.96602 15.0421 6.99216 15.0421 9.19557V13.316Z"
                    fill="#facc47"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
        @if ($page_details->featured_image->file_path)
        <img src="{{asset($page_details->featured_image->file_path)}}" class="img-fluid" />
        @endif

        {!!$page_details->content!!}

      </div>
    </div>
  </div>
</section>

@if (count($blogs)>0)

<section class="blog-list-page rela-blog">
  <div class="container">
    <div class="row  ">



      <div class="col-lg-12 ">

        <h5>Related Articles</h5>


        <div class="row">

          @foreach ($blogs as $item)

          <div class="col-md-4">
            <div class="blog-list d-flex align-items-center rela-lst">
              <a href="{{url('blog/'.$item->slug)}}">
                @if ($item->featured_image->file_path)
                <img src="{{asset($item->featured_image->file_path)}}" class="img-fluid" />
                @endif
                <h4>{{$item->title}}</h4>
                <p>{!!$item->short_description!!}</p>
              </a>
            </div>
          </div>
          @endforeach

        </div>



      </div>
    </div>
  </div>
</section>
@endif

@include('ui.common.footer')
</div>
@endsection
@section('bottom')
<script type="text/javascript">
  $(document).ready(function() {
   
   
    
   
   
   
      });
</script>
@endsection