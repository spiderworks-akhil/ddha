@extends('ui.base')
@section('head')
<style>

</style>
@endsection





@section('content')


@include('ui.common.header')

<section class="header-news">
  <div class="container">
    <div class="row  d-flex align-items-center">
      <div class="col-md-8 inner-page-menu">
        <ul>
          <li><a>Home</a> | <a>Blog</a></li>
        </ul>
      </div>
      <div class="col-md-4 ">
        <div class="menu-social">
          <span> SOCIAL MEDIA</span>
          <a><i class="ri-facebook-fill"></i></a>
          <a><i class="ri-twitter-fill"></i></a>
          <a><i class="ri-instagram-line"></i></a>
        </div>
      </div>

    </div>
  </div>
</section>


<section class="  blog-detail-page ">
  <div class="container">
    <div class="row  ">



      <div class="col-lg-12 col-12 ">

        <div class="blog-post-time"><b>January 18, 2022</b> in <span><b>Challenges and solutions</b></span> 4 min read
        </div>
        <h2>Cultivating the loan officer and real estate agent relationship</h2>

        <p>Proactive outreach is great, but providing value is crucial for loan officers connecting with real estate
          agents.</p>
        <div class="blog-share sticky-top">
          <div class="row">
            <div class="col-md-6 col-6 d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path d="M20 22H4v-2a5 5 0 0 1 5-5h6a5 5 0 0 1 5 5v2zm-8-9a6 6 0 1 1 0-12 6 6 0 0 1 0 12z"></path>
              </svg>
              <h4>Admin</h4>
            </div>
            <div class="col-md-6 col-6 d-flex align-items-center  justify-content-end">
              <span>Share </span>
              <a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z"></path>
                  <path
                    d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.989C18.343 21.129 22 16.99 22 12c0-5.523-4.477-10-10-10z">
                  </path>
                </svg>
              </a>
              <a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z"></path>
                  <path
                    d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z">
                  </path>
                </svg>
              </a>
              <a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z"></path>
                  <path
                    d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z">
                  </path>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <img src="https://blend.com/wp-content/uploads/2021/03/Digital-transformaion_Blog1240x670-1400x756.jpg"
          class="img-fluid">
        <p>It’s no secret that real estate agents are an important stakeholder in the lending process. As a result, a
          strong relationship between loan officers and real estate agents can deliver many benefits.</p>
        <p>It’s no secret that real estate agents are an important stakeholder in the lending process. As a result, a
          strong relationship between loan officers and real estate agents can deliver many benefits.</p>

        <h3>Cultivating the loan officer and real estate agent relationship</h3>
        <p>It’s no secret that real estate agents are an important stakeholder in the lending process. As a result, a
          strong relationship between loan officers and real estate agents can deliver many benefits.</p>

        <h3>Cultivating the loan officer and real estate agent relationship</h3>
        <p>It’s no secret that real estate agents are an important stakeholder in the lending process. As a result, a
          strong relationship between loan officers and real estate agents can deliver many benefits.</p>

        <h3>Cultivating the loan officer and real estate agent relationship</h3>
        <p>It’s no secret that real estate agents are an important stakeholder in the lending process. As a result, a
          strong relationship between loan officers and real estate agents can deliver many benefits.</p>




      </div>
    </div>
  </div>
</section>


<section class="blog-list-page rela-blog">
  <div class="container">
    <div class="row  ">



      <div class="col-lg-12 ">

        <h5>Related Articles</h5>


        <div class="row">

          <div class="col-md-4">
            <div class="blog-list d-flex align-items-center rela-lst">
              <img src="https://blend.com/wp-content/uploads/2022/06/Blend-Mortgage-Process-Automation-1.png"
                class="img-fluid">
              <div>
                <h4>How personalization is driving the next wave of customer experiences in...</h4>
                <p>From recent trends to customer interaction cycles, this in-depth guide is built for financial
                  providers looking to improve the</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="blog-list d-flex align-items-center rela-lst">
              <img src="https://blend.com/wp-content/uploads/2022/06/Blend-Mortgage-Process-Automation-1.png"
                class="img-fluid">
              <div>
                <h4>How personalization is driving the next wave of customer experiences in...</h4>
                <p>From recent trends to customer interaction cycles, this in-depth guide is built for financial
                  providers looking to improve the</p>
              </div>
            </div>
          </div>


          <div class="col-md-4">
            <div class="blog-list d-flex align-items-center rela-lst">
              <img src="https://blend.com/wp-content/uploads/2022/06/Blend-Mortgage-Process-Automation-1.png"
                class="img-fluid">
              <div>
                <h4>How personalization is driving the next wave of customer experiences in...</h4>
                <p>From recent trends to customer interaction cycles, this in-depth guide is built for financial
                  providers looking to improve the</p>
              </div>
            </div>
          </div>


          <div class="col-md-4">
            <div class="blog-list d-flex align-items-center rela-lst">
              <img src="https://blend.com/wp-content/uploads/2022/06/Blend-Mortgage-Process-Automation-1.png"
                class="img-fluid">
              <div>
                <h4>How personalization is driving the next wave of customer experiences in...</h4>
                <p>From recent trends to customer interaction cycles, this in-depth guide is built for financial
                  providers looking to improve the</p>
              </div>
            </div>
          </div>


          <div class="col-md-4">
            <div class="blog-list d-flex align-items-center rela-lst">
              <img src="https://blend.com/wp-content/uploads/2022/06/Blend-Mortgage-Process-Automation-1.png"
                class="img-fluid">
              <div>
                <h4>How personalization is driving the next wave of customer experiences in...</h4>
                <p>From recent trends to customer interaction cycles, this in-depth guide is built for financial
                  providers looking to improve the</p>
              </div>
            </div>
          </div>


          <div class="col-md-4">
            <div class="blog-list d-flex align-items-center rela-lst">
              <img src="https://blend.com/wp-content/uploads/2022/06/Blend-Mortgage-Process-Automation-1.png"
                class="img-fluid">
              <div>
                <h4>How personalization is driving the next wave of customer experiences in...</h4>
                <p>From recent trends to customer interaction cycles, this in-depth guide is built for financial
                  providers looking to improve the</p>
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
   
   
    
   
   
   
      });
</script>
@endsection