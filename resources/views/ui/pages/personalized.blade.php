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



<section class="about-cnotent inner-page pb-0">
    <div class="container">
        <div class="row  ">
            <div class="col-md-5   ">
                @if ($page_details->featured_image->file_path)
                <img src="{{asset($page_details->featured_image->file_path)}}" class="img-fluid w-100" />
                @endif
            </div>
            <div class="col-md-7">
                <div class="about-text-cntr clor-1">
                    <h3>{{$page_details->title}}</h3>
                    {!!$page_details->content!!}
                </div>
            </div>
        </div>
    </div>
</section>



<section class="about-cnotent inner-page">
    <div class="container">
        @if (count($page_details->children)>0)
        @php
        $i=0;
        $c=1;
        @endphp
        @foreach ($page_details->children as $item)
        <div class="row  ">
            @if($i%2==1)
            @if (!empty($item->featured_image->file_path))
            <div class="col-md-5">
                <img src="{{asset($item->featured_image->file_path)}}" class="img-fluid w-100" />
            </div>
            @endif
            @endif
            <div class="col-md-7">
                <div class="about-text-cntr clor-2">
                    {!!$item->content!!}

                </div>
            </div>

            @if($i%2==0)
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