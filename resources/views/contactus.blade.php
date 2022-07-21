@include('user_header')

    <!-- start about us title -->
    <section class="wrapper_form">
        <div class="container">
            <form class="form" id="ajax_form_project" data-aos="fade-down">
                <div class="form_title_custom" id="">
                   Contact Us
                </div>            
            </form>
        </div>
    </section>
    <!-- about us title End -->


<!-- start contact detail -->
<section class="support" data-aos="fade-left">
    <div class="container">
        
        <div class="support_wrapper">
            @foreach ($contact_media_info as $cmi)    
                <div class="support_item_contact">
                    <div class="support_item-icon fa-lg" >
                        <i class="{{$cmi->code}}"></i>
                    </div>
                    <a href="{{$cmi->title_link}}" class="support_item-title">
                        {{$cmi->title}}
                    </a>
                    <div class="support_item-text">
                        {{$cmi->description}}
                    </div>
                </div>
            @endforeach
            <div class="support_item_contact">
                <div class="item_messan-wrpper contact_page_media ">
                    @foreach ($footer_fifth as $fifth)    
                    <a href="{{$fifth->link}}" class="item_messan-link">
                        <img src="{{asset('upload/'.$fifth->image)}}" width="18" height="25" alt="">
                    </a>
                @endforeach
                </div>
            </div>
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
            <div class="contacts_text text">
                {{ $cnt->description }}
            </div>
            @endforeach
            <div class="form-wrapper">
                <div class="form_mail" data-aos="fade-up-right">
                    <a href="#" class="form_mail-link">
                        <img src="{{ asset('upload/' . $cnt->image) }}" alt="">
                    </a>
                </div>

                <form class="form_bottom" id="contactForm" method="POST" data-aos="fade-up-left">
                    @CSRF
                    <div class="footer-form_title">
                        GET IN TOUCH
                    </div>
                        
                    <div class="inp_cont-wrapper">
                        <input type="text" id="name" name="name" class="form_inp-cont" placeholder="name" >
                        <input type="text" id="phone_number" name="phone_number" class="form_inp-cont" placeholder="Phone No" >
                    </div>
                        <input type="text" id="email" name="email" class="form_inp-mail" placeholder="Email" >
                        <textarea name="message" id="message" class="form_inp-text" placeholder="Message" ></textarea>
                    <div class="footer_btn-wrpper">
                        <button class="footer_btn btn"  type="submit" name="send_us">
                            Send Us
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Us-->

@include('user_footer')
<script>
    jQuery('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    number: false,
                    maxlength: 50
                },
                phone_number: {
                  required: true,
                  number:true,
                  maxlength: 10,
                  minlength: 10
                },
                email: {
                    required: true,
                    email: true,
                    maxlength: 2000
                },
                message: {
                    required: true,
                    maxlength: 2000
                },
                
            },
            messages: {
                name: {
                    required: "Please enter Name",
                    number: "Do not enter Number ",
                    maxlength: "Title must be 50 char long"
                },
                phone_number: {
                  required: "please Enter Phone Number",
                  number:"Enter Only Number",
                  maxlength: "Phone Number must be 10 char long",
                  minlength: "Enter valid Numer length" 
                },
                email: {
                    required: "please enter Email ",
                    email: "Emter vlid Email ",
                    maxlength: "Sub Title must be 2000 char long"
                },
                message: {
                    required: "please enter Message ",
                    maxlength: "Sub Title must be 2000 char long"
                },
                
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    $('#contactForm').on('submit', function(event) {
        event.preventDefault();
        // Get Alll Text Box Id's
        name = $('#name').val();
        phone_number = $('#phone_number').val();
        email = $('#email').val();
        message = $('#message').val();

        $.ajax({
            url: "/add-user-contact-data", //Define Post URL
            type: "POST",
            data: { "_token": "{{ csrf_token() }}", name: name, phone_number: phone_number, email: email, message: message, },
            
            //Display Response Success Message
            success: function(data) {
                console.log(data.success)
                document.getElementById("contactForm").reset();
            },
        });
    });
</script>