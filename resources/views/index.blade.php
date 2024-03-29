{{-- @include('user_header') --}}
@extends('main')

@section('main-section')
    {{-- @foreach ($home_slider as $hs2)
    <div class="rellax" data-rellax-speed="-5" data-rellax-percentage="0.3"
        style="background-image: url({{ URL('upload/' . $hs2->image) }});transform : none "> </div>
@endforeach --}}
    <!-- start slider -->
    {{-- <div class="header_main">
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
</div> --}}
    <!-- slider end -->

    <!-- start slider -->
    <section class="page_top slider_page_top ">
        <div class="header_main">
            <div class="container">
                <div class="page_top-wrapper sack_wrapper home_slider_main">
                    @foreach ($home_slider as $hs)
                        <div class="home_slider_box">
                            <div class="page_top-left slider_left">
                                <div class="header_main-title slider_title">
                                    <h1>
                                        {{ $hs->title }}
                                    </h1>
                                </div>
                                <div class="slider_description">
                                    <p>{{ $hs->description }}</p>
                                </div>
                                <a href="{{route('about.page')}}" class="header_main-btn btn">
                                    Learn More
                                </a>
                            </div>
                            <div class="page_top-right slider_right">
                                <img src="{{ URL('upload/' . $hs->image) }}" class="page_top-title slider_img" alt="slider image">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <a href="#services" class="scroll">
            <img src="https://smav.com.ua/images/scroll.svg" alt="">
        </a>
    </section>
    <br>
    <br>
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
                        <a href="{{ url('development/' . $md->special_id) }}" class="brif_btn new_btn">
                            Explore
                        </a>
                    </div>
                    <div class="brif_img_size" data-aos="fade-left" data-aos-delay="500">
                        <img src="{{ URL('upload/' . $md->image1) }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <?php
        } 
        else 
        { ?>
        <section class="brif" id="services">
            <div class="container">
                <div class="brif_wrapp">
                    <div class="brif_content-left" data-aos="fade-left">
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
                        <a href="{{ url('development/' . $md->special_id) }}" class="brif_btn new_btn">
                            Explore
                        </a>
                    </div>
                    <div class="brif_img_size-left" data-aos="fade-right" data-aos-delay="500">
                        <img src="{{ URL('upload/' . $md->image1) }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <?php 
        } 
        $i = $i + 1; 
        ?>
    @endforeach
    <!-- End Services -->

    <!-- start STAGES OF WORK -->
    <section class="stages" data-aos="fade-up">
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
                        <img src="{{ URL('upload/' . $ad->image) }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End About Us -->

    {{-- blog slider --}}
    {{-- <div class="page-wrapper">
    <div class="post-slider_one">
        <div class="brif_wrapp_slider text_for_square">
            <div class="brif_title_title title ">Articals</div>
        </div>
        <div class="post-wrapper">

            <div class="post">
                <a href="{{ route('about2.page') }}">
                    <img src="upload/80105914.png" alt="" class="slider-image">
                </a>
                <div class="post-info">
                    <i class="fas fa-calendar blog_caln">
                        01, Jul 2022
                    </i>
                    <h5 class="text_line_height">
                        <a href="{{ route('about2.page') }}">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Neque voluptas nesciunt ea accusantium libero, hic illo mollitia fugit excepturi
                            accusamus eius numquam voluptates vel quasi iusto? Beatae, recusandae possimus!
                            Necessitatibus!</a>
                    </h5>
                </div>
                <div>
                    <a href="{{ route('about2.page') }}">
                        <button class="button_slider">
                            <span class="circle">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="text_btn">Learn more</span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="post">
                <a href="{{ route('about2.page') }}">
                    <img src="upload/80105914.png" alt="" class="slider-image">
                </a>
                <div class="post-info">
                    <i class="fas fa-calendar blog_caln">
                        01, Jul 2022
                    </i>
                    <h5 class="text_line_height">

                        <a href="{{ route('about2.page') }}">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Neque voluptas nesciunt ea accusantium libero, hic illo mollitia fugit excepturi
                            accusamus eius numquam voluptates vel quasi iusto? Beatae, recusandae possimus!
                            Necessitatibus!</a>
                    </h5>
                </div>
                <div>
                    <a href="{{ route('about2.page') }}">
                        <button class="button_slider">
                            <span class="circle">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="text_btn">Learn more</span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="post">
                <a href="{{ route('about2.page') }}">
                    <img src="upload/80105914.png" alt="" class="slider-image">
                </a>
                <div class="post-info">
                    <i class="fas fa-calendar blog_caln">
                        01, Jul 2022
                    </i>
                    <h5 class="text_line_height">

                        <a href="{{ route('about2.page') }}">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Neque voluptas nesciunt ea accusantium libero, hic illo mollitia fugit excepturi
                            accusamus eius numquam voluptates vel quasi iusto? Beatae, recusandae possimus!
                            Necessitatibus!</a>
                    </h5>
                </div>
                <div>
                    <a href="{{ route('about2.page') }}">
                        <button class="button_slider">
                            <span class="circle">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="text_btn">Learn more</span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="post">
                <a href="{{ route('about2.page') }}">
                    <img src="upload/80105914.png" alt="" class="slider-image">
                </a>
                <div class="post-info">
                    <i class="fas fa-calendar blog_caln">
                        01, Jul 2022
                    </i>
                    <h5 class="text_line_height">

                        <a href="{{ route('about2.page') }}">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Neque voluptas nesciunt ea accusantium libero, hic illo mollitia fugit excepturi
                            accusamus eius numquam voluptates vel quasi iusto? Beatae, recusandae possimus!
                            Necessitatibus!</a>
                    </h5>
                </div>
                <div>
                    <a href="{{ route('about2.page') }}">
                        <button class="button_slider">
                            <span class="circle">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="text_btn">Learn more</span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="post">
                <a href="{{ route('about2.page') }}">
                    <img src="upload/80105914.png" alt="" class="slider-image">
                </a>
                <div class="post-info">
                    <i class="fas fa-calendar blog_caln">
                        01, Jul 2022
                    </i>
                    <h5 class="text_line_height">

                        <a href="{{ route('about2.page') }}">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Neque voluptas nesciunt ea accusantium libero, hic illo mollitia fugit excepturi
                            accusamus eius numquam voluptates vel quasi iusto? Beatae, recusandae possimus!
                            Necessitatibus!</a>
                    </h5>
                </div>
                <div>
                    <a href="{{ route('about2.page') }}">
                        <button class="button_slider">
                            <span class="circle">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="text_btn">Learn more</span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="post">
                <a href="{{ route('about2.page') }}">
                    <img src="upload/80105914.png" alt="" class="slider-image">
                </a>
                <div class="post-info">
                    <i class="fas fa-calendar blog_caln">
                        01, Jul 2022
                    </i>
                    <h5 class="text_line_height">

                        <a href="{{ route('about2.page') }}">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Neque voluptas nesciunt ea accusantium libero, hic illo mollitia fugit excepturi
                            accusamus eius numquam voluptates vel quasi iusto? Beatae, recusandae possimus!
                            Necessitatibus!</a>
                    </h5>
                </div>
                <div>
                    <a href="{{ route('about2.page') }}">
                        <button class="button_slider">
                            <span class="circle">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="text_btn">Learn more</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div><br><br> --}}
    {{-- End blog slider --}}

    <!-- counter penal -->
    {{-- <section class="reviews">
    <div id="projectFacts" class="sectionClass">
        <div class="fullWidth eight columns">
            <div class="projectFactsWrap ">
                @foreach ($counter as $cr)
                    <div class="item wow fadeInUpBig animated animated" data-number="12"
                        style="visibility: visible;">
                        
                        <p class="number"><span id="number1">{{ $cr->clients }}</span>+</p>
                        <span class="span"></span>
                        <p>Happy clients</p>
                    </div>
                    <div class="item wow fadeInUpBig animated animated" data-number="55"
                        style="visibility: visible;">
                        
                        <p class="number"><span id="number2">{{ $cr->projects }}</span>+</p>

                        <span class="span"></span>
                        <p>Projects done</p>
                    </div>
                    <div class="item wow fadeInUpBig animated animated" data-number="359"
                        style="visibility: visible;">
                        
                        <p class="number"><span id="number3">{{ $cr->employees }}</span>+</p>

                        <span class="span"></span>
                        <p>Employees</p>
                    </div>
                    <div class="item wow fadeInUpBig animated animated" data-number="246"
                        style="visibility: visible;">
                        
                        <p class="number"><span id="number4">{{ $cr->branches }}</span>+</p>

                        <span class="span"></span>
                        <p>Branches</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<br><br> --}}
    <!-- end counter penal -->



    {{-- start infinite slide bar --}}
    <section>
        <div class="container">
            <div class="reviews_title title">
                We are specialized in
            </div>
            <div class="reviews_text text">
            </div>
        </div>
        <div class="slider_infi">
            <div class="slide_infinite-track">
                @foreach ($specialized as $special)
                    <div class="slide_infinite">
                        <img src="{{ URL('upload/' . $special->image) }}" height="100" width="150" alt="">
                    </div>
                @endforeach
                {{-- </div>
        <div class="slide_infinite-track"> --}}
                @foreach ($specialized as $special)
                    <div class="slide_infinite">
                        <img src="{{ URL('upload/' . $special->image) }}" height="100" width="150" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- end infinite slide ber --}}

    <!-- start our satisfied clients -->
    <section class="reviews">
        <div class="container">
            <div class="reviews_title title">
                Our Satisfied Clients
            </div>
            <div class="reviews_text text">
            </div>
            <div class="reviews_slider" data-aos="fade-down">
                @foreach ($clients as $cs)
                    <div class="slider_wrapper">
                        <div class="slider_item slider_item-left">
                            <div class="slider_item-top">
                                <div class="slider_item-img client_position">
                                    <img src="{{ URL('upload/' . $cs->image) }}" alt="">
                                </div>
                                <div class="slider_item-fio client_left">
                                    <div class="slider_item-name ">
                                        {{ $cs->name }}
                                    </div>
                                    <div class="slider_item-prof ">
                                        {{ $cs->profession }}, {{ $cs->information }}
                                    </div>
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
@endsection
{{-- @include('user_footer') --}}


{{-- <script>
    jQuery('#contactForm').validate({
        rules: {
            name: {
                required: true,
                number: false,
                maxlength: 50
            },
            phone_number: {
                required: true,
                number: true,
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
                number: "Enter Only Number",
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
    // $('#contactForm').on('submit', function(event) {
    //     event.preventDefault();
    //     name = $('#name').val(),
    //     phone_number = $('#phone_number').val(),
    //     email = $('#email').val(),
    //     message = $('#message').val(),

    //     $.ajax({
    //         url: "/add-user-contact-data", //Define Post URL
    //         type: "POST",
    //         data: { "_token": "{{ csrf_token() }}", name: name, phone_number: phone_number, email: email, message: message, },
    //         dataType : "json",
    //         // Display Response Success Message

    //         success: function(data) {
    //             console.log(data.success),
    //             document.getElementById("contactForm").reset();
    //         },
    //     });
    // });
</script> --}}
{{-- <script>
    $('#contactForm').ready(function () {
        $(document).on('click', '.send_contact_button', function () {
            e.preventDefault();
            alert();
            console.log('hello');
        });
    });
</script> --}}
