@include('user_header')

<!-- start about us title -->
<section class="wrapper_form">
    <div class="container">
        <form class="form" id="ajax_form_project" data-aos="fade-down">
            <div class="form_title_custom" id="">
                Service
            </div>
        </form>
    </div>
</section>
<!-- about us title End -->

<!-- start service title -->
<section class="page_top" data-aos="fade-right">
    <div class="container">
        <div class="page_top-wrapper">
            @foreach ($service_page as $sp)
                <div class="page_top-left">
                    <div class="page_top-title">
                        {{ $sp->title }}
                    </div>
                </div>
                <div class="page_top-right">
                    <div class="page_top-text">
                        {{ $sp->description }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- end service title -->

<!-- start our services -->

<section class="advantages">
    <div class="container">
        <h3 class="advantages_titlte title" data-aos="fade-right">
            Our Services
        </h3>
        <p class="advantages_text text" data-aos="fade-right">
        </p>
        <div class="advantages_wrapper" data-aos="fade-right">
            <?php
            $i = 1;
            ?>
            @foreach ($our_services as $item)
                <?php  

                if(3 / $i != 1 || 6 / $i != 2 )
                { ?>
                    <div class=" advantages_item ">
                        <div class="advantages_item-main">
                            <img class="service_img" src="{{('upload/'.$item->image)}}" alt="">
                            <div class="advantages_item-title">
                                {{ $item->title }}
                            </div>
                        </div>
                        <div class="advantages_item-text">
                            {{ $item->description }}a
                        </div>
                    </div>
          <?php }else
                { ?>
                    <div class="advantages_item advantages_item-tree">
                        <div class="advantages_item-main">
                            <img class="service_img" src="{{('upload/'.$item->image)}}" alt="">
                            <div class="advantages_item-title">
                                {{ $item->title }}
                            </div>
                        </div>
                        <div class="advantages_item-text">
                            {{ $item->description }}
                        </div>
                    </div>
        <?php   }
            $i = $i + 1; ?>

            @endforeach
            <div class="advantages_item advantages_item-tree">
                <div class="advantages_item-main">
                    <img src="asset/images/contact-icon-white.png" alt="">
                    <div class="advantages_item-title">
                        Take your business where your customers are
                    </div>
                </div>
                <div class="advantages_item-text">
                    <a href="{{ route('contact.page') }}" class="header_main-btn btn-header-service ">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section>

        <!-- our services end -->

        <!-- start About Us -->
        <section class="brif">
            <div class="container">
                <div class="brif_wrapp">
                    <div class="brif_content" data-aos="fade-right">
                        @foreach ($services_offer as $item3)
                            
                        <div class="brif_title_media title_media">
                            {{$item3->title}}
                        </div>
                        <div class="our_offers">
                            <div class="left-side">
                                <div class="brif_text text">
                                    {{$item3->description}}
                                </div>
                                <div class="support_wrapper_media">
                                    <?php
                                    $array_of_sub_title = explode('|||',$item3->sub_title);
                                    for ($i=0; $i<count($array_of_sub_title) ; $i++) 
                                    {?> 
                                        <div class="support_item_media">
                                                <div class="support_item-text_media mg-media">
                                                    
                                                    {{$array_of_sub_title[$i]}}
                                                </div>
                                            </div>
                                    <?php } ?>
                                </div>
                                <div class="brif_info">
                                    <div class="brif_info-text text">
                                    {{$item3->sub_description}}
                                    </div>
                                </div>
                            </div>
                            <div class="right-side">
                                <div class="right-support-bottom-img" data-aos="fade-left" data-aos-delay="500">
                                    @foreach ($services_offer as $item3)
                                    <img src="{{asset('upload/'.$item3->image)}}" alt="">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="support_item_contact">
                            <div class="item_messan-wrpper service_icone_set">
                                @foreach ($footer_fifth as $fifth)    
                                    <a href="{{$fifth->link}}" class="item_messan-link">
                                        <img src="{{asset('upload/'.$fifth->image)}}" width="18" height="25" alt="">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="bottom-support-bottom-img" data-aos="fade-left" data-aos-delay="500">
                            @foreach ($services_offer as $item3)
                            <img src="{{asset('upload/'.$item3->image)}}" alt="">
                            @endforeach
                        </div>
                    <div class="follow-btn">
                        <a href="#" class="brif_btn btn sevices_about_btn">
                            Follow Us
                        </a>
                    </div>
                        <br>
                    @endforeach
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- End About Us -->

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
