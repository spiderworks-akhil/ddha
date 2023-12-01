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


<section class="about-cnotent inner-page  ">


    <div class="container">


        @if (count($page_details->children)>0)
        @php
        $i=0;
        $c=1;
        @endphp
        @foreach ($page_details->children as $item)


        <div class="row mb-3">
            @if($i%2==0)
            @if (!empty($item->featured_image->file_path))
            <div class="col-md-5">
                <img src="{{asset($item->featured_image->file_path)}}" class="img-fluid w-100" />
            </div>
            @endif
            @endif
            <div class="col-md-7">
                <div class="about-text-cntr clor-@if($c>4){{$c=1}}@else{{$c}}@endif">
                    {!!$item->content!!}
                </div>
            </div>
            @if($i%2==1)
            @if (!empty($item->featured_image->file_path))
            <div class="col-md-5">
                <img src="{{asset($item->featured_image->file_path)}}" class="img-fluid w-100" />
            </div>
            @endif
            @endif
        </div>
        @php
        $i++;
        $c++;
        @endphp
        @endforeach

        @endif


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