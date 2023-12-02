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



<section class="why-content board-list-cnt">
    <div class="container">
        <div class="row d-flex align-items-center">
            @if (isset($page_details->featured_image->file_path))
            <div class="col-md-5">
                <img src="{{asset($page_details->featured_image->file_path)}}" class="img-fluid w-100" />
            </div>
            <div class="col-md-7">

                @else
                <div class="col-md-12">

                    @endif

                    @if (isset($page_details->parent))
                    <span>{{$page_details->parent->title}}</span>
                    @endif
                    <h3>{{$page_details->title}}</h3>
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