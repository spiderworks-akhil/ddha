@extends('ui.base')
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
        <form class="row g-3">

          <div class="col-md-12">
            <label for="inputPassword4" class="form-label">Name</label>
            <input type="text" class="form-control" id="inputPassword4">
          </div>
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-12">
            <label for="inputPassword4" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="inputPassword4">
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Location</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>


          <div class="col-12">
            <button type="submit" class="btn btn-primary">SUBMIT </button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<section class="banner">
  <div class="hapn"><img src="{{asset('assets/img/hap.png')}}" class="img-fluid" /> </div>
  <img src="{{asset('assets/img/banner.jpg')}}" class="img-fluid banner-img" />
  <div class="banner-text-cntr">
    <div class="row d-flex align-items-end">
      <div class="col-md-6">
        <span>Welcome to</span>
        <h2>Dehradun Hills Academy</h2>
        <a class="btn-1 me-4">Admission Open</a>
        <a class="btn-2">Photo Gallery</a>
      </div>
      <div class="col-md-6 text-end mob-text-center">
        <div class="badj badj-clr">CBSE <br />Affiliated</div>
        <div class="badj badj-clr2">Estd.<br />1990</div>
        <div class="badj badj-clr3">Personalized<br /> Learning</div>
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
              class="img-fluid" /> Boarding Life <div class="clearfix"></div>
          </h3>
          <img src="{{asset('assets/img/board--img1.png')}}" class="img-fluid" />
        </div>
      </div>

      <div class="col-md-3 p-0">
        <div class="board-list  ">
          <h3 class="board-clr-2 d-flex align-items-center"> <img src="{{asset('assets/img/board-2.png')}}"
              class="img-fluid" /> Academics <div class="clearfix"></div>
          </h3>
          <img src="{{asset('assets/img/board--img2.png')}}" class="img-fluid" />
        </div>
      </div>

      <div class="col-md-3 p-0">
        <div class="board-list">
          <h3 class="board-clr-3 d-flex align-items-center"> <img src="{{asset('assets/img/board-3.png')}}"
              class="img-fluid" /> Co-curricular <div class="clearfix"></div>
          </h3>
          <img src="{{asset('assets/img/board--img3.png')}}" class="img-fluid" />
        </div>
      </div>

      <div class="col-md-3 p-0">
        <div class="board-list">
          <h3 class="board-clr-4 d-flex align-items-center"> <img src="{{asset('assets/img/board-4.png')}}"
              class="img-fluid" /> Happiness Advantage <div class="clearfix"></div>
          </h3>
          <img src="{{asset('assets/img/board--img4.png')}}" class="img-fluid" />
        </div>
      </div>

    </div>
  </div>

</section>



<section class="welcome">
  <div class="container">
    <h4>Welcome to Dehradun Hills Academy -<br />
      A Boutique Residential School for Indian & Asian students. </h4>
    <h5>Ranked #1 in Holistic Education by Education Today 2021-22 </h5>
  </div>
</section>



<section class="diffrent">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <h3>What makes Dehradun Hills Academy Different ?</h3>
      </div>

      <div class="col-md-3 dif-list">
        <img src="{{asset('assets/img/dif-1.png')}}" />
        <h4>Happy</h4>
        <p>Don't educate your children to be
          rich. Educate them to be happy. So
          when they grow up they will know
          the value of things, not the price. At
          DDHA we prioritise Happiness
          above all.
        </p>
      </div>

      <div class="col-md-3 dif-list">
        <img src="{{asset('assets/img/dif-2.png')}}" />
        <h4> Healthy</h4>
        <p> We at Dehradun Hills Academy
          teach our kids to EAT REAL
          FOOD.No fast foods - No junk
          foods.No processed foods. We
          try to ensure as much organic
          foods as possible.
        </p>
      </div>

      <div class="col-md-3 dif-list">
        <img src="{{asset('assets/img/dif-3.png')}}" />
        <h4>Inspired </h4>
        <p> Winning doesn't always mean being
          first. Winning means you are doing
          better than you have done before. At
          a small boutique school we take
          pride in ensuring our kids are always
          at the forefront.
        </p>
      </div>


      <div class="col-md-3 dif-list">
        <img src="{{asset('assets/img/dif-4.png')}}" />
        <h4> Customized Program </h4>
        <p> Class 6th to 12th grade student can join us
          and we help customize their learning program
          to suit their current and future needs. With
          over 32+ years of experience the school
          strives at ensuring each of our student
          progresses in as many parameters as
          possible. </p>
      </div>



    </div>

  </div>
</section>




<section class="admission">
  <div class="container">
    <h3>ADMISSIONS OPEN </h3>
    <p>For Class 1st to IX and XI - Session 2023-24</p>
    <a href="#">APPLY NOW</a>
  </div>
</section>




<section class="home-about">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-md-8">
        <h3>About us – DDHA </h3>
        <p>Dehradun Hills Academy is a Boutique Residential K-12 School affiliated to CBSE – India. The
          campus is located 40 minutes away from the city in a verdant suburb surrounded by pristine
          mountains, majestic Sal forests and farmlands. </p>
        <p>30+ years of dedication and passion has brought the school to where it is now. This has made
          people from various backgrounds to join the team and chart the road to make Dehradun Hills
          Academy one of its kind schools in Asia. </p>
        <p> We have a 7 acre campus with tree avenues, open air amphitheater, shaded fruit orchards looking
          onto a landscape of cultivated fields and pristine forests. We also have a dairy, an organic farm,
          vegetable garden, organic herb unit, fruit orchards of mango, litchi and pear, in-house vermiculture
          and composting pits and tree house for daytime observation. </p>
        <p>We have an upcoming poultry farm, weather station and observatory for amateurs. What is unique
          to the campus is an In-house Café – 'Silent Temptations' run by students and multiple reading
          lounges to inculcate the love and habit for reading. </p>
      </div>
      <div class="col-md-4">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset('assets/img/hm-sec1.png')}}" class="img-fluid" />
            </div>
            <div class="carousel-item">
              <img src="{{asset('assets/img/hm-sec2.png')}}" class="img-fluid" />
            </div>
            <div class="carousel-item">
              <img src="{{asset('assets/img/hm-sec3.png')}}" class="img-fluid" />
            </div>
            <div class="carousel-item">
              <img src="{{asset('assets/img/hm-sec4.png')}}" class="img-fluid" />
            </div>
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
        <img src="{{asset('assets/img/hm-sec.png')}}" class="img-fluid" />
      </div>
      <div class="col-md-8">
        <h3>Entirely Personalized: Socially,
          Emotionally, and Academically </h3>
        <p>In a Boutique school, the teacher truly gets to know their student
          and personalises the time table to each individual's strength,
          interest and above all their learning style. This results in more
          participation and student engagement and their interest in
          learning soars when they get the attention, when they are heard
          and known by their peers and teachers. Also outside the
          classroom, we help support social growth via various activities
          and through clubs, field trips and more. Results below through a
          survey speak for itself.</p>

        <a>How we Personalise</a>
      </div>

    </div>

  </div>
</section>




<section class="home-grade">
  <div class="container">
    <div class="row  ">
      <div class="col-md-12">
        <h3>Student Success is more than Grades </h3>
        <p>we survey students when they start with us then after attending Dehradun Hills Academy for six
          months. See our students growth academically, socially, and emotionally: </p>
      </div>

      <div class="col-md-12 d-flex align-items-center justify-content-center">

        <div class=" bef-dha"><i class="ri-checkbox-blank-circle-fill"></i> Before DDHA</div>
        <div class="af-dha"> <i class="ri-checkbox-blank-circle-fill"></i> After 6 months at DDHA</div>

      </div>

    </div>

    <div class="row  d-flex align-items-center  ">
      <div class="col-md-4">
        <img src="{{asset('assets/img/gr-1.png')}}" class="img-fluid" />
        <h4>Student Success is more than Grades </h4>
        <span>Getting the academic support they need to the be successful
        </span>
      </div>

      <div class="col-md-4">
        <img src="{{asset('assets/img/gr-2.png')}}" class="img-fluid" />
        <h4>Social Connection </h4>
      </div>

      <div class="col-md-4">
        <img src="{{asset('assets/img/gr-3.png')}}" class="img-fluid" />
        <h4>Emotional Support </h4>
        <span>Felt they were receiving the emotional support they needed </span>
      </div>

    </div>

    <div class="row  ">
      <div class="col-md-12">
        <a> See more Student’s Data <i class="ri-arrow-right-s-line"></i> </a>
      </div>
    </div>



  </div>
</section>







<section class="home-advatage">
  <div class="container">

    <div class="row  ">

      <div class="col-md-3">
        <h3>The Ddha <br /> Advantage</h3>
      </div>

      <div class="col-md-3">
        <div class="adva-list">
          <img src="{{asset('assets/img/ad-1.png')}}" class="img-fluid" />
          <span>Celebrating Success</span>
        </div>
      </div>

      <div class="col-md-3">
        <div class="adva-list">
          <img src="{{asset('assets/img/ad-2.png')}}" class="img-fluid" />
          <span>Pottery Classes </span>
        </div>
      </div>

      <div class="col-md-3">
        <div class="adva-list">
          <img src="{{asset('assets/img/ad-3.png')}}" class="img-fluid" />
          <span> Photography Exhibition</span>
        </div>
      </div>

      <div class="col-md-3">
        <div class="adva-list">
          <img src="{{asset('assets/img/ad-4.png')}}" class="img-fluid" />
          <span> World Art</span>
        </div>
      </div>

      <div class="col-md-3">
        <div class="adva-list">
          <img src="{{asset('assets/img/ad-5.png')}}" class="img-fluid" />
          <span> Kahani - Celebrating Art & Culture</span>
        </div>
      </div>

      <div class="col-md-3">
        <div class="adva-list">
          <img src="{{asset('assets/img/ad-6.png')}}" class="img-fluid" />
          <span>Golf Basics </span>
        </div>
      </div>

      <div class="col-md-3">
        <div class="adva-list">
          <img src="{{asset('assets/img/ad-7.png')}}" class="img-fluid" />
          <span> Exploring the wilderness</span>
        </div>
      </div>


      <div class="col-md-3">
        <div class="adva-list">
          <img src="{{asset('assets/img/ad-8.png')}}" class="img-fluid" />
          <span>Camping @ DDHA </span>
        </div>
      </div>


      <div class="col-md-3">
        <div class="adva-list">
          <img src="{{asset('assets/img/ad-9.png')}}" class="img-fluid" />
          <span> Organic Farming - Cabbage Harvesting</span>
        </div>
      </div>



      <div class="col-md-3">
        <div class="adva-list">
          <img src="{{asset('assets/img/ad-10.png')}}" class="img-fluid" />
          <span> Let's Cook Together</span>
        </div>
      </div>

      <div class="col-md-3">
        <div class="adva-list">
          <img src="{{asset('assets/img/ad-11.png')}}" class="img-fluid" />
          <span> Martial Arts Classes</span>
        </div>
      </div>





    </div>







  </div>
</section>






<section class="home-why ">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Why DDHA ?</h3>
      </div>
    </div>

    <div class="row">



      <div class="col-md-4 why-list">
        <img src="{{asset('assets/img/why-1.png')}}" class="img-fluid" />
        <span>30+ years of Legacy </span>
      </div>



      <div class="col-md-4 why-list">
        <img src="{{asset('assets/img/why-1.png')}}" class="img-fluid" />
        <span>Student Teacher Ratio 8:1 </span>
      </div>




      <div class=" col-md-4 why-list">
        <img src="{{asset('assets/img/why-1.png')}}" class="img-fluid" />
        <span> Private Farm Lands for Vegetables & Fruits </span>
      </div>




      <div class="col-md-4 why-list">
        <img src="{{asset('assets/img/why-1.png')}}" class="img-fluid" />
        <span> Future Ready School </span>
      </div>



      <div class="col-md-4 why-list">
        <img src="{{asset('assets/img/why-1.png')}}" class="img-fluid" />
        <span> Global Alumni Network </span>
      </div>




      <div class="col-md-4 why-list">
        <img src="{{asset('assets/img/why-1.png')}}" class="img-fluid" />
        <span> Pollution free 7 Acre Safe school </span>
      </div>



      <div class="col-md-4 why-list">
        <img src="{{asset('assets/img/why-1.png')}}" class="img-fluid" />
        <span> Personalized Learning Experience </span>
      </div>




      <div class="col-md-4 why-list">
        <img src="{{asset('assets/img/why-1.png')}}" class="img-fluid" />
        <span> Organic Lifestyle </span>
      </div>




      <div class="col-md-4 why-list">
        <img src="{{asset('assets/img/why-1.png')}}" class="img-fluid" />
        <span> Among the oldest CBSE school of the region </span>
      </div>




    </div>


  </div>
</section>






<section class="home-succ ">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <h3>Our Success Stories </h3>
        <h4>We at Dehradun Hills Academy have served hundreds of happy families for the past 30+ years across India and
          <br />
          the world including S.E Asia. Sharing a glimpse of how are Alumni's are placed.</h4>
      </div>
    </div>


    <div class="row">


      <div class="col-md-4 col-lg-2">
        <div class="scs-list">
          <img src="{{asset('assets/img/suc-1.png')}}" class="img-fluid" />
          <h5>DILEEP RATHORE </h5>
          <p>Entrepreneur</p>
          <span>(Batch of 2002) </span>
        </div>
      </div>


      <div class="col-md-4 col-lg-2">
        <div class="scs-list">
          <img src="{{asset('assets/img/suc-2.png')}}" class="img-fluid" />
          <h5> RAJESH SINGH </h5>
          <p>Country Head LG Singapore</p>
          <span>(Batch of 1999) </span>
        </div>
      </div>


      <div class="col-md-4 col-lg-2">
        <div class="scs-list">
          <img src="{{asset('assets/img/suc-3.png')}}" class="img-fluid" />
          <h5>SHWETA SHARMA </h5>
          <span>(Batch of 2000) </span>
        </div>
      </div>


      <div class="col-md-4 col-lg-2">
        <div class="scs-list">
          <img src="{{asset('assets/img/suc-4.png')}}" class="img-fluid" />
          <h5> YASIN SABRI </h5>
          <p>Fashion Designer</p>
          <span>(Batch of 2005) </span>
        </div>
      </div>


      <div class="col-md-4 col-lg-2">
        <div class="scs-list">
          <img src="{{asset('assets/img/suc-5.png')}}" class="img-fluid" />
          <h5>GAYATRI SINGH</h5>
          <p>Asia Coordinator Pestalozzi World</p>
          <span> (Batch of 1998) </span>
        </div>
      </div>

      <div class="col-md-4 col-lg-2">
        <div class="scs-list">
          <img src="{{asset('assets/img/suc-1.png')}}" class="img-fluid" />
          <h5> MANIK SHARMA </h5>
          <p>Global Business Manager Wipro</p>
          <span>(Batch of 2007) </span>
        </div>
      </div>




    </div>



    <div class="row">
      <div class="col-md-12">
        <a> <i class="ri-arrow-right-line"></i> <span>Learn More</span> <i class="ri-arrow-right-line"></i> </a>

      </div>
    </div>


  </div>
</section>











<section class="home-testi ">
  <div class="container">

    <div class="row">
      <div class="col-md-8">

        <div class="test-vide-cntr">
          <h3>DDHA Testimonials </h3>
          <div class="row">
            <div class="col-md-12">
              <div class="test-video">
                <img src="{{asset('assets/img/test-3.png')}}" class="img-fluid" />
                <a class="vid-ply-btn d-flex align-items-center justify-content-center">
                  <i class="ri-play-circle-line"></i>
                </a>
                <div class="vid-cap">Parent’s</div>
              </div>

            </div>
            <div class="col-md-6">
              <div class="test-video test-video2">
                <img src="{{asset('assets/img/test-1.png')}}" class="img-fluid" />
                <a class="vid-ply-btn d-flex align-items-center justify-content-center">
                  <i class="ri-play-circle-line"></i>
                </a>
                <div class="vid-cap">Student’s</div>
              </div>

            </div>
            <div class="col-md-6">
              <div class="test-video test-video3">
                <img src="{{asset('assets/img/test-2.png')}}" class="img-fluid" />
                <a class="vid-ply-btn d-flex align-items-center justify-content-center">
                  <i class="ri-play-circle-line"></i>
                </a>
                <div class="vid-cap">Student’s</div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <form class="row  ">
          <h4>Admissions open 2023</h4>
          <div class="col-md-12">
            <input type="text" class="form-control" placeholder="Enter Name *">
          </div>
          <div class="col-md-12">
            <input type="email" class="form-control" placeholder="Enter Email Address *">
          </div>
          <div class="col-md-2 col-3 pe-0">
            <input type="text" class="form-control" value="+91">
          </div>
          <div class="col-md-10 col-9">
            <input type="text" class="form-control" placeholder="Enter Mobile Number*">
          </div>
          <div class="col-12">
            <input type="text" class="form-control" placeholder="Select State*">
          </div>

          <div class="col-12">
            <input type="text" class="form-control" placeholder="Select City*">
          </div>

          <div class="col-12">
            <input type="text" class="form-control" placeholder="Select Class*">
          </div>


          <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Enter text as shown">
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control">
          </div>



          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                I agree to receive information regarding my submitted enquiry by signing up on DDHA’S School*

              </label>
            </div>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn  "> Enquiry Now </button>
          </div>
        </form>
      </div>
    </div>







  </div>
</section>




<section class="home-news ">
  <div class="container">

    <div class="row">
      <div class="col-md-6">
        <h3>Latest News</h3>
        <div class="news-cntr">
          <img src="{{asset('assets/img/news-2.jpg')}}" class="img-fluid" />
          <h4>New Faces, News Roles, New Heights</h4>
          <a>View More News <i class="ri-arrow-right-line"></i></a>
        </div>
      </div>
      <div class="col-md-6 d-flex justify-content-end text-end">
        <div>
          <h3>Upcoming Events</h3>
          <div class="event-cntr ">

            <a class="d-flex align-items-center">
              <span>Sep <br />20
              </span>
              <h5>Sustaining a welcoming
                and Inclusive Parent Community</h5>
            </a>
            <hr />
            <a class="d-flex align-items-center">
              <span>Sep <br />20
              </span>
              <h5>Open House</h5>
            </a>
            <hr />
            <a class="d-flex align-items-center">
              <span>Sep <br />20
              </span>
              <h5>Children Parent Social</h5>
            </a>
            <hr />
            <a class="d-flex align-items-center">
              <span>Sep <br />20
              </span>
              <h5>Fall Family Friday</h5>
            </a>
            <hr />
            <a class="d-flex align-items-center">
              <span>Sep <br />20
              </span>
              <h5> Fall Break Begins </h5>
            </a>
            <hr />
            <div class="d-flex align-items-center">
              <a class="view-more-evt">View More Events <i class="ri-arrow-right-line"></i> </a>
            </div>


          </div>
        </div>
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


    }); 
</script>
@endsection