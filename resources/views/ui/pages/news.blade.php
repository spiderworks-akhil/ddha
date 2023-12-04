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
                    <li><a href="{{route('index')}}">Home</a> | <a>News</a></li>
                </ul>
            </div>
            <div class="col-md-4 ">
                {{-- <div class="menu-social">
                    <span> SOCIAL MEDIA</span>
                    <a><i class="ri-facebook-fill"></i></a>
                    <a><i class="ri-twitter-fill"></i></a>
                    <a><i class="ri-instagram-line"></i></a>
                </div> --}}
            </div>

        </div>
    </div>
</section>

@if (count($news)>0)


<section class="blog-list-page">
    <div class="container">
        <div class="row  ">



            <div class="col-lg-12 col-md-12 col-sm-12 col-12 tab-content filtering   ">


                <div class="row">

                    @foreach ($news as $item)

                    <div class="col-md-4">
                        <div class="blog-list">
                            @if ($item->featured_image->file_path)
                            <img src="{{asset($item->featured_image->file_path)}}" class="img-fluid" />
                            @endif
                            <h4>{{$item->title}}</h4>
                            <p>{!!$item->short_description!!}</p>
                            <a href="{{url('news/'.$item->slug)}}">Read the article </a>
                        </div>
                    </div>
                    @endforeach






                    <div class="col-md-12 pagination-tist d-flex justify-content-center">
                        {{$news->links('pagination::supal')}}
                    </div>








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