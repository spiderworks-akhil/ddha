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





<section class="admission-cntr withdrawal-cntr">
    <div class="container">


        <div class="row  ">

            <div class="col-md-12">
                {!!$page_details->content!!}
            </div>
        </div>

        <div class="row  ">
            @php
            $sub_section_1 = $page_details->children->where('slug','new-students-section')->first();
            $sub_section_2 = $page_details->children->where('slug','existing-students-section')->first();
            $sub_section_3 = $page_details->children->where('slug','download-section')->first();
            @endphp

            <div class="col-md-6 withdrawal-cntr-left">
                <div class="withdrawal-cntr-left">
                    <h4>{{$sub_section_1->title}}</h4>
                    {!!$sub_section_1->content!!}
                </div>
            </div>

            <div class="col-md-6 withdrawal-cntr-right">
                <h4>{{$sub_section_2->title}}</h4>
                {!!$sub_section_2->content!!}

            </div>

        </div>

        <div class="row  ">

            <div class="col-md-12 text-center">
                {!!$sub_section_3->content!!}
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