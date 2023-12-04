@extends('ui.base')
@section('metadata')
<title>Thankyou</title>
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
            <div class="col-md-5">
                <img src="{{asset('assets/img/thankyou.jpg')}}" class="img-fluid w-100" />
            </div>
            <div class="col-md-7">
                <h3>Thank you ! </h3>
                <p> Our representatives will get in touch with you
                    soon to discuss further.</p>


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