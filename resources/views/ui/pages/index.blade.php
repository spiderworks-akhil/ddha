@php
$content = $page_details->content;
@endphp
@extends('ui.base')
@section('metadata')
<x-meta-data :details="$page_details" />
@endsection
@section('head')
<style>
  .foot-element {
    display: none;
  }
</style>
@endsection





@section('content')


@include('ui.common.header')




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog reg-modal">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Make An Enquiry </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="row g-3" id="popup-form" action="{{url('save')}}">
          <input type="hidden" name="lead_type" value="Home Popup Form">
          <input type="hidden" name="source_url" value="{{url()->full()}}">
          @csrf
          <div class="col-md-12">
            <label for="inputPassword4" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="inputPassword4">
          </div>
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail4">
          </div>
          <div class="col-md-12">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="text" class="form-control" name="phone_number" id="phone_number">
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Location</label>
            <input type="text" class="form-control" name="location" id="inputAddress" placeholder="1234 Main St">
          </div>


          <div class="col-12">
            <input type="hidden" name="recaptcha">
            <p class="recaptcha-text">This site is protected by reCAPTCHA and the Google <a
                href="https://policies.google.com/privacy">Privacy Policy</a> and <a
                href="https://policies.google.com/terms">Terms of Service</a> apply.</p>

            <button type="submit" class="btn btn-primary">SUBMIT </button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<section class="banner">
  <div class="hapn"><img src="{{asset('assets/img/hap.png')}}" class="img-fluid" /> </div>
  @if (!empty($content['media_id_banner_image']) && isset($content['media_id_banner_image']->file_path))
  <img src="{{asset($content['media_id_banner_image']->file_path)}}" class="img-fluid banner-img" />
  @endif
  <div class="banner-text-cntr">
    <div class="row d-flex align-items-end">
      <div class="col-md-6">
        {!!$content['banner_title']!!}
        @if (!empty($content['banner_btn_link_1']))
        <a href="{{url($content['banner_btn_link_1'])}}" class="btn-1 me-4">{{$content['banner_btn_text_1']}}</a>
        @endif
        @if (!empty($content['banner_btn_link_2']))
        <a href="{{url($content['banner_btn_link_2'])}}" class="btn-2">{{$content['banner_btn_text_2']}}</a>
        @endif
      </div>
      <div class="col-md-6 text-end mob-text-center">
        <div class="badj badj-clr">{!!$content['banner_btn_text_3']!!}</div>
        <div class="badj badj-clr2">{!!$content['banner_btn_text_4']!!}</div>
        <div class="badj badj-clr3">{!!$content['banner_btn_text_5']!!}</div>
      </div>
    </div>

  </div>
</section>




<section class="board">
  <div class="container">
    <div class="row  ">

      <div class="col-md-3 p-0">
        <div class="board-list ">
          <h3 class="board-clr-1 d-flex align-items-center"> <img src="{{asset('assets/img/board-1.png')}}"
              class="img-fluid" />{{$content['section_2_text_1']}} <div class="clearfix"></div>
          </h3>
          @if (!empty($content['media_id_section_2_img_1']) && isset($content['media_id_section_2_img_1']->file_path))
          <img src="{{asset($content['media_id_section_2_img_1']->file_path)}}" class="img-fluid" />
          @endif
        </div>
      </div>

      <div class="col-md-3 p-0">
        <div class="board-list  ">
          <h3 class="board-clr-2 d-flex align-items-center"> <img src="{{asset('assets/img/board-2.png')}}"
              class="img-fluid" /> {{$content['section_2_text_2']}} <div class="clearfix"></div>
          </h3>
          @if (!empty($content['media_id_section_2_img_2']) && isset($content['media_id_section_2_img_2']->file_path))
          <img src="{{asset($content['media_id_section_2_img_2']->file_path)}}" class="img-fluid" />
          @endif
        </div>
      </div>

      <div class="col-md-3 p-0">
        <div class="board-list">
          <h3 class="board-clr-3 d-flex align-items-center"> <img src="{{asset('assets/img/board-3.png')}}"
              class="img-fluid" /> {{$content['section_2_text_3']}} <div class="clearfix"></div>
          </h3>
          @if (!empty($content['media_id_section_2_img_3']) && isset($content['media_id_section_2_img_3']->file_path))
          <img src="{{asset($content['media_id_section_2_img_3']->file_path)}}" class="img-fluid" />
          @endif
        </div>
      </div>

      <div class="col-md-3 p-0">
        <div class="board-list">
          <h3 class="board-clr-4 d-flex align-items-center"> <img src="{{asset('assets/img/board-4.png')}}"
              class="img-fluid" /> {{$content['section_2_text_4']}} <div class="clearfix"></div>
          </h3>
          @if (!empty($content['media_id_section_2_img_4']) && isset($content['media_id_section_2_img_4']->file_path))
          <img src="{{asset($content['media_id_section_2_img_4']->file_path)}}" class="img-fluid" />
          @endif
        </div>
      </div>

    </div>
  </div>

</section>



<section class="welcome">
  <div class="container">
    {!!$content['section_3_description']!!}
  </div>
</section>



<section class="diffrent">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <h3>{!!$content['section_4_description']!!}</h3>
      </div>



      @if (!empty($listings_1) && count($listings_1)>0)
      @foreach ($listings_1 as $item)
      <div class="col-md-3 dif-list">
        @if (!empty($item->media) && isset($item->media->file_path))
        <img src="{{asset($item->media->file_path)}}" />
        @endif
        <h4>{{$item->title}}</h4>
        <p>{!!$item->description!!}
        </p>
      </div>
      @endforeach
      @endif



    </div>

  </div>
</section>




<section class="admission">
  <div class="container">
    {!!$content['section_5_description']!!}
  </div>
</section>




<section class="home-about">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-md-8">
        {!!$content['section_6_description']!!}
      </div>
      <div class="col-md-4">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            @if (!empty($about_slider) && count($about_slider)>0)
            @foreach ($about_slider as $item)
            @if (!empty($item->media) && isset($item->media->file_path))
            <div class="carousel-item @if($loop->first) active @endif">
              <img src="{{asset($item->media->file_path)}}" class="img-fluid" />
            </div>
            @endif
            @endforeach
            @endif
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>

        </div>

      </div>
    </div>

  </div>
</section>





<section class="home-sec">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-md-4">
        @if (!empty($content['media_id_section_7_img_1']) && isset($content['media_id_section_7_img_1']->file_path))
        <img src="{{asset($content['media_id_section_7_img_1']->file_path)}}" class="img-fluid" />
        @endif
      </div>
      <div class="col-md-8">
        {!!$content['section_7_description']!!}

      </div>

    </div>

  </div>
</section>




<section class="home-grade">
  <div class="container">
    <div class="row  ">
      <div class="col-md-12">
        <h3>{!!$content['section_8_text_1']!!}
        </h3>
        <p>{!!$content['section_8_description']!!}</p>
      </div>

      <div class="col-md-12 d-flex align-items-center justify-content-center">

        <div class=" bef-dha"><i class="ri-checkbox-blank-circle-fill"></i> {!!$content['section_8_before_text']!!}
        </div>
        <div class="af-dha"> <i class="ri-checkbox-blank-circle-fill"></i> {!!$content['section_8_after_text']!!}</div>

      </div>

    </div>

    <div class="row  d-flex align-items-center  ">
      <div class="col-md-4">
        @if (!empty($content['media_id_section_8_img_2']) && isset($content['media_id_section_8_img_2']->file_path))
        <img src="{{asset($content['media_id_section_8_img_2']->file_path)}}" class="img-fluid" />
        @endif
        {!!$content['section_8_text_3']!!}
      </div>

      <div class="col-md-4">
        @if (!empty($content['media_id_section_8_img_1']) && isset($content['media_id_section_8_img_1']->file_path))
        <img src="{{asset($content['media_id_section_8_img_1']->file_path)}}" class="img-fluid" />
        @endif
        <h4>{!!$content['section_8_text_2']!!}</h4>
      </div>

      <div class="col-md-4">
        @if (!empty($content['media_id_section_8_img_3']) && isset($content['media_id_section_8_img_3']->file_path))
        <img src="{{asset($content['media_id_section_8_img_3']->file_path)}}" class="img-fluid" />
        @endif
        {!!$content['section_8_text_4']!!}
      </div>

    </div>

    <div class="row  ">
      <div class="col-md-12">
        <a> See more Student’s Data <i class="ri-arrow-right-s-line"></i> </a>
      </div>
    </div>



  </div>
</section>





@if (!empty($gallery) && count($gallery->gallery)>0)

@endif

<section class="home-advatage" id="home-advatage">
  <div class="container">

    <div class="row  ">

      <div class="col-md-3">
        <h3>{!!$gallery->title!!}</h3>
      </div>
      @foreach ($gallery->gallery as $item)
      <div class="col-md-3">
        <div class="adva-list">
          @if (!empty($item->media) && isset($item->media->file_path))
          <img src="{{asset($item->media->file_path)}}" class="img-fluid" />
          <span>{{$item->media->description}}</span>
          @endif
        </div>
      </div>
      @endforeach

    </div>







  </div>
</section>






<section class="home-why ">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>{!!$content['section_10_text_1']!!}</h3>
      </div>
    </div>

    <div class="row">

      @if (!empty($listings_2) && count($listings_2)>0)
      @foreach ($listings_2 as $item)
      <div class="col-md-4 why-list">
        @if (!empty($item->media) && isset($item->media->file_path))
        <img src="{{asset($item->media->file_path)}}" class="img-fluid" />
        @endif
        <span>{{$item->title}}</span>
        <p>{!!$item->description!!}
        </p>
      </div>
      @endforeach
      @endif


    </div>


  </div>
</section>






<section class="home-succ ">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <h3>{!!$content['section_11_text_1']!!}</h3>
        <h4>{!!$content['section_11_description']!!}
        </h4>
      </div>
    </div>


    <div class="row">


      @if (!empty($listings_3) && count($listings_3)>0)
      @foreach ($listings_3 as $item)
      <div class="col-md-4 col-lg-2">
        <div class="scs-list">
          @if (!empty($item->media) && isset($item->media->file_path))
          <img src="{{asset($item->media->file_path)}}" class="img-fluid" />
          @endif
          <h5>{{$item->title}}</h5>
          <span>{!!$item->description!!}
          </span>
        </div>
      </div>
      @endforeach
      @endif

    </div>



    <div class="row">
      <div class="col-md-12">
        <a> <i class="ri-arrow-right-line"></i> <span>Learn More</span> <i class="ri-arrow-right-line"></i> </a>

      </div>
    </div>


  </div>
</section>









@if (!empty($testimonials) && count($testimonials)>0)
<section class="home-testi ">
  <div class="container">

    <div class="row">
      <div class="col-md-8">

        <div class="test-vide-cntr">
          <h3>{!!$content['section_12_text_1']!!}</h3>
          <div class="row">
            @php
            $testimonial = $testimonials->first();
            $testimonials = $testimonials->skip(1);
            @endphp
            <div class="col-md-12">
              <div class="test-video">
                @if (!empty($testimonial->featured_image) && isset($testimonial->featured_image->file_path))
                <img src="{{asset($testimonial->featured_image->file_path)}}" class="img-fluid" />
                @endif
                <a @if(!empty($testimonial->video) && isset($testimonial->video->file_path))
                  href="{{asset($testimonial->video->file_path)}}" @else
                  href="{{$testimonial->youtube_link}}" @endif
                  class="vid-ply-btn d-flex align-items-center justify-content-center">
                  <i class="ri-play-circle-line"></i>
                </a>
                <div class="vid-cap">{{$testimonial->name}}</div>
              </div>

            </div>
            @foreach ($testimonials as $item)
            <div class="col-md-6">
              <div class="test-video test-video2">
                @if (!empty($item->featured_image) && isset($item->featured_image->file_path))
                <img src="{{asset($item->featured_image->file_path)}}" class="img-fluid" />
                @endif
                <a @if(!empty($item->video) && isset($item->video->file_path))
                  href="{{asset($item->video->file_path)}}" @else
                  href="{{$item->youtube_link}}" @endif class="vid-ply-btn d-flex align-items-center
                  justify-content-center">
                  <i class="ri-play-circle-line"></i>
                </a>
                <div class="vid-cap">{{$item->name}}</div>
              </div>

            </div>
            @endforeach

          </div>
        </div>
      </div>

      <div class="col-md-4">
        <form class="row " id="main-form" action="{{url('save')}}">
          <input type="hidden" name="lead_type" value="Home Admissions Form">
          <input type="hidden" name="source_url" value="{{url()->full()}}">
          @csrf
          <h4>Admissions open 2023</h4>
          <div class="col-md-12">
            <input type="text" class="form-control" name="name" placeholder="Enter Name *">
          </div>
          <div class="col-md-12">
            <input type="email" class="form-control" name="email" placeholder="Enter Email Address *">
          </div>
          <div class="col-md-2 col-3 pe-0">
            <input type="text" class="form-control" name="country" value="+91">
          </div>
          <div class="col-md-10 col-9">
            <input type="text" class="form-control" name="phone_number" placeholder="Enter Mobile Number*">
          </div>
          <div class="col-12">
            <input type="text" class="form-control" name="state" placeholder="Enter State*">
          </div>

          <div class="col-12">
            <input type="text" class="form-control" name="city" placeholder="Enter City*">
          </div>

          <div class="col-12">
            <input type="text" class="form-control" name="class" placeholder="Enter Class*">
          </div>


          {{-- <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Enter text as shown">
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control">
          </div> --}}



          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" name="receive_information" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                I agree to receive information regarding my submitted enquiry by signing up on DDHA’S School*

              </label>
            </div>
          </div>
          <div class="col-12 text-center">
            <input type="hidden" name="recaptcha">
            <p class="recaptcha-text">This site is protected by reCAPTCHA and the Google <a
                href="https://policies.google.com/privacy">Privacy Policy</a> and <a
                href="https://policies.google.com/terms">Terms of Service</a> apply.</p>

            <button type="submit" class="btn  "> Enquiry Now </button>
          </div>
        </form>
      </div>
    </div>







  </div>
</section>
@endif




<section class="home-news ">
  <div class="container">

    <div class="row">
      @if (!empty($news))
      <div class="col-md-6">
        <h3>Latest News</h3>
        <div class="news-cntr">
          @if (!empty($news->featured_image) && isset($news->featured_image->file_path))
          <img src="{{asset($news->featured_image->file_path)}}" class="img-fluid" />
          @endif
          <h4>{{$news->title}}</h4>
          <a href="{{url('news/'.$news->slug)}}">View More <i class="ri-arrow-right-line"></i></a>
        </div>
      </div>
      @endif
      @if (!empty($events) && count($events)>0)
      <div class="col-md-6 d-flex justify-content-end text-end">
        <div>
          <h3>Upcoming Events</h3>
          <div class="event-cntr ">
            @foreach ($events as $item)
            <a href="{{url('event/'.$item->slug)}}" class="d-flex align-items-center">
              <span>{{date('M d ', strtotime($item->start_time))}}
              </span>
              <h5>{{$item->title}}</h5>
            </a>
            <hr />
            @endforeach

            <div class="d-flex align-items-center">
              <a href="{{url('event')}}" class="view-more-evt">View More Events <i class="ri-arrow-right-line"></i> </a>
            </div>


          </div>
        </div>
      </div>
      @endif

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


    $("#popup-form").validate({
    
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
        location:"required",
   


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
        location:"Please enter location",

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


  $("#main-form").validate({
    
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