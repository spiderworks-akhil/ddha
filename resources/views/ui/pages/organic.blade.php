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
            <div class="col-md-5   ">
                <img src="{{asset('assets/img/organic.jpg')}}" class="img-fluid w-100" />
            </div>
            <div class="col-md-7">
                <div class="about-text-cntr clor-2">
                    <h3> What is an Organic Lifestyle and how is it connected to the school?</h3>
                    <p> Living an organic lifestyle is living a balanced lifestyle. It begins with eating organic foods.
                        Organic foods are fruits and vegetables grown without the use of chemicals, and meats
                        processed without the introduction of hormones or closed factory environments. These are
                        more healthy because chemical insecticides, herbicides, and fertilizers on vegetables and
                        fruits have unknown effects on human health. They also can have a negative effect on the
                        environment. Hormones in meats can and do survive the cooking process and can make a
                        difference in the growth of children or the well-being of adults.</p>

                    <p>One of the best ways to ensure foods are organic is to grow them yourself. And this is what
                        we do at the DDHA. Where ever possible we try to buy organic but sometimes the prices
                        prohibit us but children know about and help in the process.</p>


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