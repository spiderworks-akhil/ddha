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



<section class="about-cnotent inner-page  ">
    <div class="container">
        <div class="row d-flex align-items-center ">
            <div class="col-md-5">
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

@php
$_first_item = $page_details->children->first();
$img = asset($_first_item->featured_image->file_path);
$content = str_replace('<ul>','<div class="row ">',$_first_item->content);
        $content = str_replace('</ul>','</div>',$content);
$content = str_replace('<li>','<div class="col-md-3">
        <h4>',$content);
            $content = str_replace('</li>','</h4>
</div>',$content);

@endphp

<section class=" co-curricular_activities" style="background-image: url('{{$img}}') !important;">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <h3>{!!$_first_item->title!!}</h3>
            </div>
        </div>

        {!!$content!!}

    </div>
</section>




<section class="benefit-sec">


    <div class="container">



        <div class="row mb-3  ">
            <div class="col-md-12">
                <h2> Benefits of LOCR:</h2>
            </div>
        </div>

        @if (count($page_details->children->skip(1))>0)
        @php
        $i=0;
        $c=1;
        @endphp
        @foreach ($page_details->children->skip(1) as $item)

        <div class="row mb-3  ">
            @if($i%2==1)
            @if (!empty($item->featured_image->file_path))
            <div class="col-md-6 p-0 ">
                <img src="{{asset($item->featured_image->file_path)}}" class="img-fluid w-100" />
            </div>
            @endif
            @endif
            <div class="col-md-6 @if($i%2==0) left-dark-clr @else right-light-clr @endif d-flex align-items-center">
                <div>
                    <h4> {{$item->title}}:</h4>
                    {!!$item->content!!}

                </div>
            </div>

            @if($i%2==0)
            @if (!empty($item->featured_image->file_path))
            <div class="col-md-6 p-0 ">
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