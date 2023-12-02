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



<section class="about-cnotent inner-page">
    <div class="container">
        <div class="row d-flex align-items-center ">
            <div class="col-md-5">
                @if ($page_details->featured_image->file_path)
                <img src="{{asset($page_details->featured_image->file_path)}}" class="img-fluid w-100" />
                @endif
            </div>
            <div class="col-md-7">
                <div class="about-text-cntr clor-2">
                    <span>{{$page_details->parent->title}}</span>
                    <h3>{{$page_details->title}}</h3>
                    {!!$page_details->content!!}

                </div>

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