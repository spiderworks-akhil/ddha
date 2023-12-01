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
        <div class="row d-flex align-items-center ">

            <div class="col-md-12">
                <span>Benefits</span>
                <h3> {{$page_details->title}}</h3>
                {!!$page_details->content!!}




            </div>
        </div>
    </div>
</section>



<section class="benefit-sec">


    <div class="container">


        @if (count($page_details->children)>0)
        @php
        $i=0;
        $c=1;
        @endphp
        @foreach ($page_details->children as $item)

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