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
                <img src="{{asset('assets/img/cell.jpg')}}" class="img-fluid w-100" />
            </div>
            <div class="col-md-7">
                <div class="about-text-cntr clor-1">
                    <span>Academics</span>
                    <h3> Career Guidance Cell</h3>
                    <p> Dehradun Hills Academy is committed to provide career counseling and guidance
                        services aimed to help students, parents and faculty. Our mission is to connect
                        learners to successful schooling and opportunities outside the School. We hope to
                        better student access to learning situations and improve parent and teacher
                        understanding of issues relating to children.</p>
                    <p>The Career &amp; Guidance Cell helps students to become familiar with career
                        opportunities by providing them with vital information on global competitiveness in
                        the fast paced world, in order to make informed choices with regard to their career
                        options.</p>
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