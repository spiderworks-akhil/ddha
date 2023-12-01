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

          <form class="row g-3">
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
              <label for="inputPassword4" class="form-label">Name of the Student</label>
              <input type="text" class="form-control" id="inputPassword4">
            </div>

            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Gender</label>
              <select id="inputState" class="form-select">
                <option selected>select...</option>
                <option>...</option>
              </select>
            </div>

            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Date Of Birth </label>
              <input type="text" class="form-control" id="inputPassword4">
            </div>



            <div class="col-md-12">
              <p><b> Parents Information</b></p>
            </div>


            <div class="col-md-4">
              <label for="inputPassword4" class="form-label">Father's / Mother's Name *</label>
              <input type="text" class="form-control" id="inputPassword4">
            </div>

            <div class="col-md-4">
              <label for="inputPassword4" class="form-label">Occupation *</label>
              <input type="text" class="form-control" id="inputPassword4">
            </div>

            <div class="col-md-4">
              <label for="inputPassword4" class="form-label"> Mobile No. * </label>
              <input type="text" class="form-control" id="inputPassword4">
            </div>



            <div class="col-md-12">
              <label for="inputEmail4" class="form-label">Email </label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>

            <div class="col-md-6">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label"> City</label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>

            <div class="col-md-4">
              <label for="inputEmail4" class="form-label"> State</label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>


            <div class="col-md-4">
              <label for="inputEmail4" class="form-label"> Nationality</label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>



            <div class="col-md-4">
              <label for="inputEmail4" class="form-label"> Country </label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>



            <div class="col-md-12">
              <p><b> Student's Information</b></p>
            </div>





            <div class="col-md-6">
              <label for="inputAddress" class="form-label">Last School Attended:</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label"> Present Class </label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>

            <div class="col-md-4">
              <label for="inputEmail4" class="form-label"> Siblings (Real Brother/Sister) Name: </label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>


            <div class="col-md-4">
              <label for="inputEmail4" class="form-label"> Gender</label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>



            <div class="col-md-4">
              <label for="inputEmail4" class="form-label"> Age </label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>



            <div class="col-md-12">
              <p><b> Reference If Any</b></p>
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label"> Class </label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>



            <div class="col-md-6">
              <label for="inputEmail4" class="form-label"> Aryan Parent – Name of the child: </label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>


            <div class="col-md-6">
              <label for="inputEmail4" class="form-label"> Contact No. of the Parent </label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>



            <div class="col-md-6">
              <label for="inputEmail4" class="form-label"> Friends/Relative (phone) </label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>






            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  I understand and agree that the registration of my son/daughter/ward does not guarantee admission to
                  the school and that the registration fee is neither transferable nor refundable.
                </label>
              </div>
            </div>


            <div class="col-12">
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
   
   
    
   
   
   
      });
</script>
@endsection