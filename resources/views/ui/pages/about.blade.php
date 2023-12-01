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
<section class="about-cnotent">
   <div class="container">
      <div class="row">
         <div class="col-md-3 col-lg-3 left-menu ">
            <div class="sticky-top">
               <h3>{{$page_details->name}}</h3>
               <ul>
                  @if (count($page_details->children)>0)
                  @foreach ($page_details->children as $item)
                  <li><a href="#"> {{ $item->name}} </a></li>
                  @endforeach
                  @endif
               </ul>
            </div>
         </div>
         <div class="col-md-9">
            {!!$page_details->content!!}

            @if (count($page_details->children)>0)
            @php
            $i=0;
            @endphp
            @foreach ($page_details->children as $item)


            <div class="row mb-3">
               @if($i%2==1)
               @if (!empty($item->featured_image->file_path))
               <div class="col-md-5">
                  <img src="{{asset($item->featured_image->file_path)}}" class="img-fluid w-100" />
               </div>
               @endif
               @endif
               <div class="col-md-7">
                  <div class="about-text-cntr clor-{{$i+1}}">
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
            @endphp
            @endforeach

            @endif




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