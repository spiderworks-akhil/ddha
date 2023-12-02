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
        <div><span>{{$page_details->parent->title}} </span>
            <h2>{{$page_details->title}}</h2>
        </div>
    </div>
</section>



<section class="admission-cntr">
    <div class="container">


        <div class="row  ">

            <div class="col-md-5">
                @if ($page_details->featured_image->file_path)
                <img src="{{asset($page_details->featured_image->file_path)}}" class="img-fluid w-100" />
                @endif

            </div>

            <div class="col-md-7">
                <div class="about-text-cntr clor-1">
                    {!!$page_details->content!!}


                </div>
            </div>
            @php
            $sub_section_1 = $page_details->children->where('slug','admission-at-ddha-sub-section-1')->first();
            $sub_section_2 = $page_details->children->where('slug','admission-at-ddha-sub-section-2')->first();
            $sub_section_1_content = str_replace('<figure class="table">','<figure class="note-cntr">
                    ',$sub_section_1->content);
                    @endphp

                    <div class="col-md-12 mt-3 mb-3">

                        {!!$sub_section_1_content!!}

                    </div>



                    <div class="col-md-7">
                        <div class="about-text-cntr clor-2">
                            {!!$sub_section_2->content!!}

                        </div>
                    </div>

                    <div class="col-md-5">
                        @if ($sub_section_2->featured_image->file_path)
                        <img src="{{asset($sub_section_2->featured_image->file_path)}}" class="img-fluid w-100" />
                        @endif

                    </div>


        </div>
    </div>
</section>

<!--


<section class="admis-frm-cntr" >
<div class="container">



</div>

</section>
      
-->




@include('ui.common.footer')
</div>
@endsection
@section('bottom')
<script type="text/javascript">
    $(document).ready(function() {
   
   
    
   
   
   
      });
</script>
@endsection