@extends('ui.base')
@section('head')
<style>

</style>
@endsection





@section('content')


@include('ui.common.header')

<section class="about-banner">

  <img src="{{asset('assets/img/banner.jpg')}}" class="img-fluid" />
  <div class="about-banner-text-cntr d-flex align-items-center justify-content-center">
    <div><span>Contact </span>
      <h2>Contact Us</h2>

    </div>

  </div>
</section>


<section class="about-cnotent inner-page contact-page ">


  <div class="container">

    <div class="row mb-4">
      <div class="col-md-6">
        <h3>Contact Us</h3>
        <form class="row g-3">
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Name</label>
            <input type="text" class="form-control" id="inputPassword4">
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
          </div>

          <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
          <div class="col-12">
            <label for="inputAddress2" class="form-label">Message </label>
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
              style="height: 100px"></textarea>
          </div>




          <div class="col-12">
            <button type="submit" class="btn btn-primary"> SUBMIT </button>
          </div>
        </form>
      </div>
      <div class="col-md-6">
        <h3>Address</h3>

        <p> <strong>Dehradun Hills Academy</strong> <br />
          Vill. Doodhli -Mothrowala-Doodhli Road Dehradun 248140 </p>


        <p><a><i class="ri-phone-fill"></i> +91-9012377773</a></p>
        <p><a><i class="ri-mail-line"></i> info@dehradunhillsacademy.co.in </a></p>
        <p class="social-icon">
          <a> <i class="ri-facebook-line"></i> </a>
          <a> <i class="ri-instagram-line"></i> </a>
          <a> <i class="ri-twitter-fill"></i> </a>
          <a> <i class="ri-youtube-fill"></i> </a>
          <a> <i class="ri-linkedin-line"></i> </a>
        </p>

      </div>
    </div>








    <div class="row">
      <div class="col-md-12">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2175.546014824964!2d78.0689929709142!3d30.19303086649897!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4bf06e7695e154b4!2sDehradun%20Hills%20Academy%20Boutique%20Residential%20School!5e1!3m2!1sen!2sin!4v1665756894446!5m2!1sen!2sin"
          width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
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