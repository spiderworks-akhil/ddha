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
    <div><span>{{$page_details->name}} </span>
      <h2>{{$page_details->title}}</h2>
    </div>
  </div>
</section>



<section class="about-cnotent inner-page contact-page ">


  <div class="container">

    <div class="row mb-4">
      <div class="col-md-6">
        <h3>Contact Us</h3>

        <form class="row g-3" id="contact-form" action="{{url('save')}}">
          <input type="hidden" name="lead_type" value="Contact Form">
          <input type="hidden" name="source_url" value="{{url()->full()}}">
          @csrf
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="inputPassword4">
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4">
          </div>

          <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
          <div class="col-12">
            <label for="inputAddress2" class="form-label">Message </label>
            <textarea class="form-control" name="message" placeholder="Leave a comment here" id="floatingTextarea2"
              style="height: 100px"></textarea>
          </div>

          <input type="hidden" name="recaptcha">
          <p class="recaptcha-text">This site is protected by reCAPTCHA and the Google <a
              href="https://policies.google.com/privacy">Privacy Policy</a> and <a
              href="https://policies.google.com/terms">Terms of Service</a> apply.</p>


          <div class="col-12">
            <button type="submit" class="btn btn-primary"> SUBMIT </button>
          </div>
        </form>
      </div>
      <div class="col-md-6">
        <h3>Address</h3>

        {!! $common_settings['contact_address1'] !!}



        <p><a href="tel:{!! $common_settings['contact_number'] !!}"><i class="ri-phone-fill"></i> {!!
            $common_settings['contact_number'] !!}</a></p>
        <p><a href="mailto:{!! $common_settings['contact_email'] !!}"><i class="ri-mail-line"></i> {!!
            $common_settings['contact_email'] !!}</a></p>
        <p class="social-icon">
          @if (!empty($common_settings['facebook-link']))
          <a href="{{$common_settings['facebook-link']}}" target="_blank"> <i class="ri-facebook-line"></i>
          </a>
          @endif
          @if (!empty($common_settings['intagram-link']))
          <a href="{{$common_settings['intagram-link']}}" target="_blank"> <i class="ri-instagram-line"></i> </a>
          @endif
          @if (!empty($common_settings['twitter-link']))
          <a href="{{$common_settings['twitter-link']}}" target="_blank"> <i class="ri-twitter-fill"></i> </a>
          @endif
          @if (!empty($common_settings['youtube-link']))
          <a href="{{$common_settings['youtube-link']}}" target="_blank"> <i class="ri-youtube-fill"></i> </a>
          @endif
          @if (!empty($common_settings['linkedin-link']))
          <a href="{{$common_settings['linkedin-link']}}" target="_blank"> <i class="ri-linkedin-line"></i> </a>
          @endif
        </p>

      </div>
    </div>








    <div class="row">
      <div class="col-md-12">
        {!! $common_settings['google_map_embed_code'] !!}

      </div>


    </div>



</section>
@include('ui.common.footer')
</div>
@endsection
@section('bottom')
<script type="text/javascript">
  $(document).ready(function() {
    get_recaptcha();
    setInterval(get_recaptcha, 60000);
   
    $.validator.addMethod("phonenu", function(value, element) {
                    if (value == '')
                        return true;
                    var regexPattern = new RegExp(/^[0-9-+ ]+$/);
                    if (value.length >= 8 && value.length <= 15) {
                        if (regexPattern.test(value)) {
                            return true;
                        } else {
                            return false;
                        };
                    } else
                        return false;
                }, "Invalid phone number");


  $("#contact-form").validate({
    
    rules: {
        name: "required",
        message: "required",
        phone_number: {
            required: true,
            phonenu: true,
        },
        email: {
            required: true,
            email: true,
        },
        address:"required",

    },
    messages: {
        name: "Please enter your name",
        message: "Please enter a message ",
        phone_number: {
            required: "Please enter Phone number"
        },
        email: {
            required: "Please enter email address",
            email: "Please enter a valid email address."
        },
        address: "Please enter address ",

    },
    errorPlacement: function(error, element) {
        $(element).parent('form').next('.error').remove();
        error.addClass('text-danger m-0').insertAfter($(element));
    },
    submitHandler: function(form) {
        var btn = $('#' + form.id).find('button');
        var btn_text = btn.html();
        btn.prop('disabled', true).html('PROCESSING...');
        var formurl = form.action;
        $.ajax({
            url: formurl,
            type: "POST",
            data: new FormData($('#' + form.id)[0]),
            cache: false,
            processData: false,
            contentType: false,
            success: function(data) {
                $('#contact-processing').hide();
                $('#contact_btn').prop('disabled', false).html(btn_text);
                get_recaptcha();

                if (typeof data.errors != "undefined") {
                    var errors = JSON.parse(JSON.stringify(data.errors))
                    $.each(errors, function(key, val) {
                        $("#" + key + "_contact_error").html(val);
                    });
                } else {
                    $(".error").remove();
                    $('#' + form.id)[0].reset();

                    var url = "{{url('/')}}";
                    var currPage = "contact";
                    url += "/thankyou?type=" + data.type;
                    window.location = url
                }
            },
            error: function(xhr) {
                get_recaptcha();
                btn.prop('disabled', false).html(btn_text);
                var errors = $.parseJSON(xhr.responseText);
                $.each(errors, function(key, val) {
                    $("#" + key + "_contact_error").text(val);
                });
            }
        });
    }
});
   
    
   
   
   
      });
      var get_recaptcha = function() {
                grecaptcha.ready(function() {
                    grecaptcha.execute("{{config('services.recaptcha.sitekey')}}", {
                        action: 'validate_captcha'
                    }).then(function(token) {
                        if (token) {
                            var recaptchaElements = document.getElementsByName('recaptcha');
                            for (var i = 0; i < recaptchaElements.length; i++) {
                                recaptchaElements[i].value = token;
                            }
    
                            //document.getElementById('recaptcha').value = token;
                        }
                    });
                });
            }
</script>
@endsection