@extends('ui.base')
@section('metadata')
<title> Online Registration</title>
@endsection
@section('head')
<style>

</style>
@endsection





@section('content')


@include('ui.common.header')

<section class="about-banner">

  <img src="{{asset('assets/img/banner.jpg')}}" class="img-fluid" />
  <div class="about-banner-text-cntr d-flex align-items-center justify-content-center">
    <div><span> Registration </span>
      <h2> Online Registration</h2>

    </div>

  </div>
</section>


<section class=" reg-page ">


  <div class="container">
    <div class="reg-form-cntr">

      <h4>Fill the form accurately and review all the information before submission. <br />For more information please
        read Admission procedure for admission in DDHA.</h4>
      <div class="row mb-4">
        <div class="col-md-12">

          <form id="Online-Registration-form" class="row g-3">
            <input type="hidden" name="lead_type" value="Online Registration Form">
            <input type="hidden" name="source_url" value="{{url()->full()}}">
            @csrf
            <div class="col-md-12">
              <label for="inputPassword4" class="form-label">Session</label>
              <select id="inputState" class="form-select">
                <option selected>Session...</option>
                <option>...</option>
              </select>
            </div>
            <div class="col-md-12">
              <label for="inputPassword4" class="form-label">Enrollment of our Child in Grade *</label>
              <select id="inputState" class="form-select">
                <option selected>select...</option>
                <option>...</option>
              </select>
            </div>






            <div class="col-md-12">
              <label for="name" class="form-label">Name of the Student</label>
              <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="col-md-6">
              <label for="gender" class="form-label">Gender</label>
              <select id="inputState" name="gender" class="form-select">
                <option value="" selected>select...</option>
                <option>Male</option>
                <option>Female</option>

              </select>
            </div>

            <div class="col-md-6">
              <label for="d_o_b" class="form-label">Date Of Birth </label>
              <input type="text" class="form-control" name="d_o_b" id="d_o_b">
            </div>



            <div class="col-md-12">
              <p><b> Parents Information</b></p>
            </div>


            <div class="col-md-4">
              <label for="parents_name" class="form-label">Father's / Mother's Name *</label>
              <input type="text" class="form-control" name="parents_name" id="parents_name">
            </div>

            <div class="col-md-4">
              <label for="occupation" class="form-label">Occupation *</label>
              <input type="text" class="form-control" name="occupation" id="occupation">
            </div>

            <div class="col-md-4">
              <label for="phone_number" class="form-label"> Mobile No. * </label>
              <input type="text" class="form-control" name="phone_number" id="phone_number">
            </div>



            <div class="col-md-12">
              <label for="email" class="form-label">Email </label>
              <input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="col-md-6">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St">
            </div>

            <div class="col-md-6">
              <label for="city" class="form-label"> City</label>
              <input type="text" class="form-control" name="city" id="city">
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label"> State</label>
              <input type="text" class="form-control" name="state" id="state">
            </div>


            <div class="col-md-4">
              <label for="nationality" class="form-label"> Nationality</label>
              <input type="text" class="form-control" name="nationality" id="nationality">
            </div>



            <div class="col-md-4">
              <label for="_country" class="form-label"> Country </label>
              <input type="text" class="form-control" name="_country" id="_country">
            </div>



            <div class="col-md-12">
              <p><b> Student's Information</b></p>
            </div>





            <div class="col-md-6">
              <label for="last_school_attended" class="form-label">Last School Attended:</label>
              <input type="text" class="form-control" name="last_school_attended" id="last_school_attended"
                placeholder="1234 Main St">
            </div>

            <div class="col-md-6">
              <label for="present_class" class="form-label"> Present Class </label>
              <input type="text" class="form-control" name="present_class" id="present_class">
            </div>

            <div class="col-md-4">
              <label for="siblings" class="form-label"> Siblings (Real Brother/Sister) Name: </label>
              <input type="text" class="form-control" name="siblings" id="siblings">
            </div>


            <div class="col-md-4">
              <label for="inputEmail4" class="form-label"> Gender</label>
              <input type="text" class="form-control" id="inputEmail4">
            </div>



            <div class="col-md-4">
              <label for="inputEmail4" class="form-label"> Age </label>
              <input type="text" class="form-control" name="age" id="inputEmail4">
            </div>



            <div class="col-md-12">
              <p><b> Reference If Any</b></p>
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label"> Class </label>
              <input type="text" class="form-control" name="class" id="inputEmail4">
            </div>



            <div class="col-md-6">
              <label for="inputEmail4" class="form-label"> Aryan Parent – Name of the child: </label>
              <input type="text" class="form-control" id="inputEmail4">
            </div>


            <div class="col-md-6">
              <label for="inputEmail4" class="form-label"> Contact No. of the Parent </label>
              <input type="text" class="form-control" id="inputEmail4">
            </div>



            <div class="col-md-6">
              <label for="inputEmail4" class="form-label"> Friends/Relative (phone) </label>
              <input type="text" class="form-control" id="inputEmail4">
            </div>






            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" name="receive_information" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  I understand and agree that the registration of my son/daughter/ward does not guarantee admission to
                  the school and that the registration fee is neither transferable nor refundable.
                </label>
              </div>
            </div>


            <div class="col-12">
              <input type="hidden" name="recaptcha">
              <p class="recaptcha-text">This site is protected by reCAPTCHA and the Google <a
                  href="https://policies.google.com/privacy">Privacy Policy</a> and <a
                  href="https://policies.google.com/terms">Terms of Service</a> apply.</p>
              <button type="submit" class="btn btn-primary"> SUBMIT </button>
            </div>
          </form>
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
  
   $('#exampleModal').modal('show');

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


  $("#Online-Registration-form").validate({
    
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
        state:"required",
        city:"required",
        class:"required",
        receive_information:"required",


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
        state:"Please enter state",
        city:"Please enter city",
        class:"Please enter class",
        receive_information:"Please check this",

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