@include('user_header')
@foreach ($home_slider as $hs)
@endforeach
<div class="rellax" data-rellax-speed="-5" data-rellax-percentage="0.3" style="background-image: url({{asset('upload/'.$hs->image)}});"> </div>
<!-- start slider -->
<div class="header_main">
    <div class="container">
        @foreach ($home_slider as $hs)
            <h1 class="header_main-title">
                {{ $hs->title }}
            </h1>
            <p class="header_main-text">
                {{ $hs->description }}
            </p>
            <a href="{{ route('contact.page') }}" class="header_main-btn btn">
                Learn More
            </a>
        @endforeach
    </div>
    <a href="#services" class="scroll">
        <img src="https://smav.com.ua/images/scroll.svg" alt="">
    </a>
</div>
<!-- slider end -->


<!-- Services  start -->
<?php
$i = 1;
$n = 2;

?>
@foreach ($mobile_data as $md)
    <?php 
        if($i % $n != 0)
        { ?>
    <section class="brif" id="services">
        <div class="container">
            <div class="brif_wrapp">
                <div class="brif_content" data-aos="fade-right">
                    <div class="brif_title title">
                        {{ $md->title }}
                    </div>
                    <div class="brif_text text">
                    </div>
                    <div class="brif_info">
                        <div class="brif_info-text text">
                            {{ $md->description }}
                        </div>
                    </div>
                    <a href="{{ route('service.page') }}" class="brif_btn btn">
                        More
                    </a>
                </div>
                <div class="brif_img_size" data-aos="fade-left" data-aos-delay="500">
                    <img src="{{ asset('upload/' . $md->image) }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <?php
        } else 
        { ?>
    <section class="brif" id="services">
        <div class="container">
            <div class="brif_wrapp">
                <div class="brif_content-left" data-aos="fade-right">
                    <div class="brif_title title">
                        {{ $md->title }}
                    </div>
                    <div class="brif_text text">
                    </div>
                    <div class="brif_info">
                        <div class="brif_info-text text">
                            {{ $md->description }}

                        </div>
                    </div>
                    <a href="{{ route('service.page') }}" class="brif_btn btn">
                        More
                    </a>
                </div>
                <div class="brif_img_size-left" data-aos="fade-left" data-aos-delay="500">
                    <img src="{{ asset('upload/' . $md->image) }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <?php 
        } $i = $i + 1; 
        ?>
@endforeach
<!-- End Services -->

<!-- start STAGES OF WORK -->
<section class="stages" data-aos="fade-right">
    <div class="container">
        @foreach ($stages_of_work_data as $sowd)
            <div class="support_title title">
                {{ $sowd->title }}
            </div>
            <div class="support_text text">
                {{ $sowd->sub_title }}
            </div>
            <div class="stages_wrapper" data-aos="fade" data-aos-delay="300">
                <div class="stages_item">
                    <div class="stages_item-title">
                        {{ $sowd->stages1 }}
                    </div>
                    <div class="stages_item-text">
                        {{ $sowd->description1 }}
                    </div>
                </div>
                <div class="stages_item">
                    <div class="stages_item-title">
                        {{ $sowd->stages2 }}
                    </div>
                    <div class="stages_item-text">
                        {{ $sowd->description2 }}
                    </div>
                </div>
                <div class="stages_item">
                    <div class="stages_item-title">
                        {{ $sowd->stages3 }}
                    </div>
                    <div class="stages_item-text">
                        {{ $sowd->description3 }}
                    </div>
                </div>
                <div class="stages_item">
                    <div class="stages_item-title">
                        {{ $sowd->stages4 }}
                    </div>
                    <div class="stages_item-text">
                        {{ $sowd->description4 }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<!-- End STAGES OF WORK -->

<!-- start About Us -->
<section class="brif">
    <div class="container">
        <div class="brif_wrapp">
            @foreach ($about_data as $ad)
                <div class="brif_content" data-aos="fade-right">
                    <div class="brif_title title">
                        {{ $ad->title }}
                    </div>
                    <div class="brif_text text">
                        {{ $ad->sub_title }}
                    </div>
                    <div class="brif_info">
                        <div class="brif_info-text text">
                            {{ $ad->description }}
                        </div>
                    </div>
                    <a href="{{ route('about.page') }}" class="brif_btn btn">
                        Learn More
                    </a>
                </div>
                <div class="brif_img" data-aos="fade-left" data-aos-delay="500">
                    <img src="{{ asset('upload/' . $ad->image) }}" alt="">
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End About Us -->

{{-- blog slider --}}
{{-- <div class="page-wrapper">
    <div class="post-slider_one">
        <h1 class="slider-title"> Trending Posts </h1>

        <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i>

        <div class="post-wrapper">
            <div class="post">1</div>
            <div class="post">2</div>
            <div class="post">3</div>
            <div class="post">4</div>
            <div class="post">5</div>
        </div>    
    </div>
</div><br><br><br><br> --}}
{{-- End blog slider --}}

<!-- counter penal -->
<section class="reviews">
    <div id="projectFacts" class="sectionClass">
        <div class="fullWidth eight columns">
            <div class="projectFactsWrap ">
                @foreach ($counter as $cr)
                    <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
                        <!-- <i class="fa fa-briefcase"></i> -->
                        <p class="number"><span id="number1">{{ $cr->clients }}</span>+</p>
                        <span class="span"></span>
                        <p>Happy clients</p>
                    </div>
                    <div class="item wow fadeInUpBig animated animated" data-number="55" style="visibility: visible;">
                        <!-- <i class="fa fa-smile-o"></i> -->
                        <p class="number"><span id="number2">{{ $cr->projects }}</span>+</p>

                        <span class="span"></span>
                        <p>Projects done</p>
                    </div>
                    <div class="item wow fadeInUpBig animated animated" data-number="359" style="visibility: visible;">
                        <!-- <i class="fa fa-coffee"></i> -->
                        <p class="number"><span id="number3">{{ $cr->employees }}</span>+</p>

                        <span class="span"></span>
                        <p>Employees</p>
                    </div>
                    <div class="item wow fadeInUpBig animated animated" data-number="246" style="visibility: visible;">
                        <!-- <i class="fa fa-camera"></i> -->
                        <p class="number"><span id="number4">{{ $cr->branches }}</span>+</p>

                        <span class="span"></span>
                        <p>Branches</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<br><br>
<!-- end counter penal -->

<!-- start our satisfied clients -->
<section class="reviews">
    <div class="container">
        <div class="reviews_title title">
            Our Satisfied Clients
        </div>
        <div class="reviews_text text">
        </div>
        <div class="reviews_slider" data-aos="fade-right">
            @foreach ($clients as $cs)
                <div class="slider_wrapper">
                    <div class="slider_item slider_item-left">
                        <div class="slider_item-top">
                            <div class="slider_item-fio">
                                <div class="slider_item-name">
                                    {{ $cs->name }}
                                </div>
                                <div class="slider_item-prof">
                                    {{ $cs->profession }}
                                </div>
                                <div class="slider_item-prof">
                                    {{ $cs->information }}
                                </div>
                            </div>
                            <div class="slider_item-img">
                                <img src="{{ asset('upload/' . $cs->image) }}" alt="">
                            </div>
                        </div>

                        <div class="slider_item-text">
                            {{ $cs->description }}
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        {{-- <div class="reviews_btn-wrap">
            <a href="/" class="reviews_btn btn">
                All Reviews
            </a>
        </div> --}}
    </div>
</section>
<!-- Our Satisfied Clients end -->

<!-- start Contact Us -->
<div class="contacts">
    <div id="contacts" class="contacts_scroll"></div>
    <div class="container">
        <div class="contacts_wrapper">
            @foreach ($contact as $cnt)
            @endforeach
            <div class="contacts_title title">
                {{ $cnt->title }}
            </div>
            <div class="contacts_text text">
                {{ $cnt->description }}
            </div>
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
