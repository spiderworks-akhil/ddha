@extends('ui.base')
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
                <img src="{{asset('assets/img/security_safety.jpg')}}" class="img-fluid w-100" />
            </div>
            <div class="col-md-7">
                <span>Boarding</span>
                <h3> Security and safety </h3>
                <p> Security is paramount. Our guards are physically on duty 24/7, and
                    CCTV cameras monitor all activities within the school compound at
                    all times. We ensure parents that the security procedures exist at the
                    school for the safety of all. No unauthorized personnel will be
                    granted access under any circumstances, and all visitors entering the
                    grounds must produce their identification and get a Visitors’ Pass
                    from the Guard Office. All parents and designated drivers/domestic
                    helpers are required to carry their ID card to school, and show this ID
                    to the school security at the school entrance. </p>


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