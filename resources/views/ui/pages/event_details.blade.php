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
                    <li><a href="{{route('index')}}">Home</a> | <a href="{{route('event')}}">Events</a></li>
                </ul>
            </div>


        </div>
    </div>
</section>


<section class="  blog-detail-page ">
    <div class="container">
        <div class="row  ">



            <div class="col-lg-12 col-12 ">

                <div class="blog-post-time"> @php
                    $words_per_minute = 125;
                    $words_per_second = $words_per_minute / 60;
                    $word_count = str_word_count( strip_tags( $page_details->content) );
                    $min = floor( $word_count / $words_per_minute );
                    @endphp
                    {{$min }} min read
                </div>
                <h2>{{$page_details->title}}</h2>

                <p>{!!$page_details->short_description!!}</p>

                @if (isset($page_details->featured_image->file_path))
                <img src="{{asset($page_details->featured_image->file_path)}}" class="img-fluid" />
                @endif

                {!!$page_details->content!!}

            </div>
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