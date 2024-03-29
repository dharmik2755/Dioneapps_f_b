{{-- @include('user_header') --}}
@extends('main')
@section('main-section')
    <!-- start about us title -->
    <section class="wrapper_form">
        <div class="container">
            <form class="form" id="ajax_form_project" data-aos="fade-down">
                {{-- <div class="form_title_custom" id="">
                   Contact Us
                </div> --}}
                <h1 class="form_title_custom">
                    Contact Us
                </h1>
            </form>
        </div>
    </section>
    <!-- about us title End -->


    <!-- start contact detail -->
    <section class="support" data-aos="fade-up">
        <div class="container">

            <div class="support_wrapper">
                @foreach ($contact_media_info as $cmi)
                    <div class="support_item_contact contact_align">
                        <div class="support_item-icon fa-2xl contact_img">
                            <i class="{{ $cmi->code }}"></i>
                        </div>
                        <a href="{{ $cmi->title_link }}" class="support_item-title contact_title">
                            {{ $cmi->title }}
                        </a>
                        <div class="support_item-text contact_des">
                            {{ $cmi->description }}
                        </div>
                    </div>
                @endforeach
                {{-- <div class="support_item_contact">
                <div class="item_messan-wrpper contact_page_media ">
                    @foreach ($footer_fifth as $fifth)    
                    <a href="{{$fifth->link}}" class="item_messan-link">
                        <img src="{{URL('upload/'.$fifth->image)}}" width="18" height="25" alt="">
                    </a>
                @endforeach
                </div>
            </div> --}}
            </div>
        </div>
    </section>
    <!-- end contact detail -->

    <!-- start Contact Us -->
    <div class="contacts">
        <div id="contacts" class="contacts_scroll"></div>
        <div class="container">
            <div class="contacts_wrapper">
                @foreach ($contact as $cnt)
                    <div class="contacts_title title">
                        {{ $cnt->title }}
                    </div>

                    <div class="item_messan-wrpper  ">
                        @foreach ($footer_fifth as $fifth)
                            <a href="{{ $fifth->link }}" class="item_messan-link media_round" target="_blank">
                                <img src="{{ URL('upload/' . $fifth->image) }}" width="22" height="25"
                                    alt="">
                            </a>
                        @endforeach
                    </div>

                    {{-- <div class="contacts_text text">
                        {{ $cnt->description }}
                    </div> --}}
                @endforeach
                <div class="form-wrapper">
                    <div class="form_mail iframe_contect" data-aos="fade-up-right">
                        <a class="form_mail-link  ">
                            <iframe title="Dioneapps" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d464.8748562002498!2d72.83665858463202!3d21.231894211200824!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e74b41fe4efc1d4!2sDioneapps!5e0!3m2!1sen!2sin!4v1675318651845!5m2!1sen!2sin" ></iframe>
                        </a>
                    </div>

                    {{-- <form class="form_bottom" id="contactForm" method="POST" data-aos="fade-up-left">
                        @csrf
                        <div class="footer-form_title">
                            GET IN TOUCH
                        </div>
                        <input type="text" id="name" name="name" class="form_inp-mail" placeholder="Name">
                        <input type="text" id="phone_number" name="phone_number" class="form_inp-mail" maxlength="10"
                            placeholder="Phone no">
                        <input type="email" id="email" name="email" class="form_inp-mail" placeholder="Email">
                        <textarea name="message" id="message" class="form_inp-text" placeholder="Message"></textarea>
                        <div class="footer_btn-wrpper">

                            <input class=" contactus_button  project_btn" type="submit" name="contact" value="Send Us">
                        </div>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Us-->
@endsection
{{-- @include('user_footer') --}}
<script>
    // jQuery('#contactForm').validate({
    //     rules: {
    //         name: {
    //             required: true,
    //             number: false,
    //             maxlength: 50
    //         },
    //         phone_number: {
    //             required: true,
    //             number: true,
    //             maxlength: 10,
    //             minlength: 10
    //         },
    //         email: {
    //             required: true,
    //             email: true,
    //             maxlength: 2000
    //         },
    //         message: {
    //             required: true,
    //             maxlength: 2000
    //         },

    //     },
    //     messages: {
    //         name: {
    //             required: "Please enter name",
    //             number: "Do not enter number ",
    //             maxlength: "Name must be 50 char long"
    //         },
    //         phone_number: {
    //             required: "please enter phone number",
    //             number: "Enter only number",
    //             maxlength: "Phone number must be 10 char long",
    //             minlength: "Enter valid number length"
    //         },
    //         email: {
    //             required: "Please enter your email ",
    //             email: "Emter vlid email ",
    //             maxlength: "Sub title must be 2000 char long"
    //         },
    //         message: {
    //             required: "Please enter your message ",
    //             maxlength: "Sub Title must be 2000 char long"
    //         },

    //     },
    //     submitHandler: function(form) {
    //         form.submit();
    //     }
    // });

    // Send data in database  
    // $('#contactForm').on('submit', function(event) {
    //     event.preventDefault();
    //     name = $('#name').val();
    //     phone_number = $('#phone_number').val();
    //     email = $('#email').val();
    //     message = $('#message').val();

    //     $.ajax({
    //         url: "/add-user-contact-data",
    //         type: "POST",
    //         data: { "_token": "{{ csrf_token() }}", name: name, phone_number: phone_number, email: email, message: message, },
    //         success: function(data) {
    //             console.log(data.success)
    //             document.getElementById("contactForm").reset();
    //         },
    //     });
    // });
</script>
