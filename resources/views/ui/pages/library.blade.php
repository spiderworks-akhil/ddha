@extends('ui.base')
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
                <img src="{{asset('assets/img/libery2.jpg')}}" class="img-fluid w-100" />
            </div>
            <div class="col-md-7">
                <div class="about-text-cntr clor-2">
                    <span>Library</span>
                    <h3> Library</h3>
                    <p> The school library is a very comfortable and ideal platform for self-
                        study, it also has a treasure of variety of resource materials like
                        journals, magazines, e-books etc. all of which enhances each student’s
                        growth process. Our Library has been designed with comfortable
                        furniture and a vibrant environment to make the reading experience
                        enticing and a treat for the students and teachers alike.</p>

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