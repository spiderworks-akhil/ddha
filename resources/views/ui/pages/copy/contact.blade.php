@extends('ui.base')
@section('head')
<style>
    body {
        background: #080808;
    }
</style>
@endsection





@section('content')


<div id="wrapper">

    @include('ui.common.header')

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle">Contact Us</h2>
                </div>
            </div>
        </div>
    </section>
    <section id="content">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-logo">

                        <h3>Get in touch today or request a call back&nbsp;</h3>

                        <p>Tel: +971 42 599 981<br>
                            Mob: +971 561 888 654</p>
                        <div class="widget">
                            <address>
                                <h4>Address:</h4>

                                <p> <strong>Arbah Technical Works</strong><br>
                                    Shop D13, Al Kazana Center<br>
                                    Karama,Dubai<br>United Arab Emirates.
                                <p>
                            </address>

                        </div>
                        <p>For more information on our services please use the contact form below and one of our team
                            will get back to you immediately.We are based in Dubai and cover all parts of UAE with
                            offices in Al Khabaisi, Deira,Dubai.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p> </p>

                    <!-- Form itself -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="input-field">
                            <input type="text" name="name" class="form-control" id="name" required
                                data-validation-required-message="Please enter your name" />
                            <label for="name" class=""> Name </label>
                            <p class="help-block"></p>

                        </div>
                        <div class="input-field">
                            <input type="email" class="form-control" id="email" required
                                data-validation-required-message="Please enter your email" />
                            <label for="name" class=""> Email </label>
                        </div>

                        <div class="input-field">
                            <textarea rows="10" cols="100" required class="form-control materialize-textarea"
                                idation-required-message="Please enter your message" minlength="5"
                                data-validation-minlength-message="Min 5 characters" maxlength="999"
                                style="resize:none"></textarea>
                            <label for="name" class=""> Message </label>
                        </div>
                        <div id="success"> </div> <!-- For success/fail messages -->
                        <button type="submit"
                            class="btn btn-primary waves-effect waves-dark pull-right">Send</button><br />
                    </form>


                </div>
            </div>
            <br>
            <div class="row">

                <div class="col-md-6">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14435.145109502444!2d55.3060982!3d25.2441225!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6afd7c3fafb07293!2sArbah%20Technical%20Works!5e0!3m2!1sen!2sin!4v1666008076109!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>


    </section>

    @include('ui.common.footer')

    @endsection

</div>
@section('bottom')
<script type="text/javascript">
    $(document).ready(function() {
   
   
    
   
   
   
      });
</script>
@endsection