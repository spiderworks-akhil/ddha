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
            <div class="col-md-5">
                @if ($page_details->featured_image->file_path)
                <img src="{{asset($page_details->featured_image->file_path)}}" class="img-fluid w-100" />
                @endif
            </div>
            <div class="col-md-7">
                <span>{{$page_details->parent->title}}</span>
                <h3>{{$page_details->title}}</h3>
                {!!$page_details->content!!}


            </div>
        </div>
    </div>
</section>


@if (count($page_details->children)>0)


<section class="cbse-cntr">
    <div class="container">
        <div class="row">
            @php
            $i = 1;
            @endphp
            @foreach ($page_details->children->take(3) as $item)

            <div class="col-md-4">
                <div class="about-text-cntr clor-{{$i}}">
                    {!!$item->content!!}
                </div>
            </div>
            @php
            $i++;
            @endphp
            @endforeach
            @php
            $sub_section_4 = $page_details->children->where('slug','sub-section-4')->first();
            @endphp

            <div class="col-md-12 mt-3">
                {!!$sub_section_4->content!!}


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