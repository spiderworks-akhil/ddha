@extends('ui.base')
@section('head')
<style>
</style>
@endsection
@section('content')
@include('ui.common.header')
<section class="about-cnotent">
   <div class="container">
      <div class="row">
         <div class="col-md-3 col-lg-3 left-menu ">
            <div class="sticky-top">
               <h3>About us</h3>
               <ul>
                  <li><a href="#"> About DDHA </a></li>
                  <li><a href="#">School History</a></li>
                  <li><a href="#">Is DDHA right for me?</a></li>
                  <li><a href="#">Msg from the Director</a></li>
                  <li><a href="#">Codes & Policies</a></li>
                  <li><a href="#">Our Proud Alumni</a></li>
               </ul>
            </div>
         </div>
         <div class="col-md-9">
            <h2>INDIVIDUALIZED ATTENTION<br />
               <span>RELATIONSHIP-BASED<br />
                  APPROACH<br /></span>
               COMMUNICATIONS PROGRAM
            </h2>


            <div class="row mb-3">
               <div class="col-md-7">
                  <div class="about-text-cntr clor-1">
                     <p>In Jan, 1957 with a small amount from his personal savings Ch. Puran Singh who
                        came from a distinguished family of landed gentry and who had just started his
                        practice as a lawyer at the district courts Dehradun requested his wife Satyabala
                        to put their own residence at disposal to set up a small preparatory school for
                        boys and girls at Lytton road called ‘The Blue Bird’. This small initiative soon
                        became too big for the premises it occupied and had to be shifted to another
                        location close by.
                     </p>
                     <p>Three decades later and with some experience of running schools the Puran Singh
                        family entrusted their younger son, Sandip Puran Singh – an environmentalist and
                        an old boy of Doon School to take charge and lay the foundation of Dehradun Hills
                        Academy at its present site on the outskirts of Doon valley close to the Rajaji
                        National Park with a belief that what the city-based children need most, was a
                        school set in quiet sylvan surroundings to encourage a mindful creative approach
                        to life.
                     </p>
                  </div>
               </div>
               <div class="col-md-5">
                  <img src="{{asset('assets/img/about-img-1.JPG')}}" class="img-fluid w-100" />
               </div>
            </div>



            <div class="row mb-3">
               <div class="col-md-5">
                  <img src="{{asset('assets/img/eve.jpg')}}" class="img-fluid w-100" />
               </div>
               <div class="col-md-7">
                  <div class="about-text-cntr clor-2">
                     <p>Ch. Puran Singh’s philosophy of education was what we have now come to know
                        as a Progressive approach. In a boutique residential school it is vital that each
                        student is given every conceivable opportunity to find activities at which they
                        excel, in addition to what is on offer within the classroom, on the games field and
                        at the Amphitheatre.
                     </p>
                     <p>The calm and positive atmosphere at the Dehradun Hills Academy results not only
                        from the verdant 7 acres campus with its fruit orchards and playing fields, but also
                        from the meaningful and structured research based learning giving each child his
                        or her own space to grow and blossom.
                     </p>

                  </div>
               </div>
            </div>


            <div class="row mb-3">
               <div class="col-md-7">
                  <div class="about-text-cntr clor-3">
                     <p>The learning approach at the Academy is intended to ensure that students fulfill
                        all their potential, developing a diverse range of skills as laid down by the
                        Founding President of the Ch. Nain Singh Education Society.
                     </p>
                     <p>At DDHA we have seen that children who are encouraged to lead a happy life and
                        be themselves, go on to achieve not only academic excellence but find a purpose
                        and meaning in life. We evaluate our students’ overall growth not just by their
                        academic performance but by level of each child’s effort to get along with his/her
                        peer groups, the bonding within each other in the dormitory and the whole
                        school in general.
                     </p>
                  </div>
               </div>
               <div class="col-md-5">
                  <img src="{{asset('assets/img/about.png')}}" class="img-fluid w-100" />
               </div>
            </div>



            <div class="row mb-3">
               <div class="col-md-5">
                  <img src="{{asset('assets/img/about-banner.jpg')}}" class="img-fluid w-100" />
               </div>
               <div class="col-md-7">
                  <div class="about-text-cntr clor-4">
                     <p>Our USP is a mindful approach where by igniting the self learning process in each
                        child, using creative methods like cooking, gardening, social networking,
                        storytelling and other similar activities we provide an environment in which
                        children from varied backgrounds and age groups come together, mingle and
                        amicably learn from each other.
                     </p>
                     <p>Some of our alumni fraternity includes professionals from IIM Bangalore and
                        Kolkata, IIT Roorkee, University of Birmingham City (UK), NIFT, the Indian Armed
                        Forces and Banking Services to mention a few professions they have chosen after
                        completing their higher education.
                     </p>

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
   
   
    
   
   
   
      });
</script>
@endsection