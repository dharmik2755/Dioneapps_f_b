@include('user_header')

<!-- start about us title -->
<section class="wrapper_form">
    <div class="container">
        <form class="form" id="ajax_form_project" data-aos="fade-down">
            <div class="form_title_custom" id="">
                Career
            </div>
        </form>
    </div>
</section>
<!-- about us title End -->



<!-- start career title -->
<section class="page_top" data-aos="fade-right">
    <div class="container">
        <div class="page_top-wrapper">

            @foreach ($career_page_titles as $cpt)
                <div class="page_top-left">
                    <div class="crumbs">
                        <a href="#">
                            WE ARE CREATIVE
                        </a>
                    </div>

                    <div class="page_top-title">
                        <span class="red">{{ $cpt->title }}</span>
                    </div>
                </div>
                <div class="page_top-right">
                    <div class="page_top-text">
                        {{ $cpt->description }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- end career title -->

<!-- start career WORK WITH DIONEAPPS -->
<section class="support" data-aos="fade-left">
    <div class="container">
        @foreach ($career_page_perkss as $cpp)
            <div class="support_title title">
                {{ $cpp->title }}
            </div>
            <div class="support_text text">
                {{ $cpp->description }}
            </div>
        @endforeach


        @foreach ($career_page_perkss as $item)
            <div class="support_wrapper">
                <?php 
                    $picture = explode('|||', $item->image);
                    $GLOBALLY = explode('|||',$item->sub_title);
                    $ex_sub_description = explode('|||',$item->sub_description);
                    for ($i=0; $i<count(explode('|||',$item->sub_title)); $i++) {
                    ?>
                    <div class="support_item">
                        <div class="support_item img">
                            <img src="{{ asset('upload/' . $picture[$i]) }}" alt="">
                        </div>
                        <a href="/ru/support/base" class="support_item-title">
                            {{ $GLOBALLY[$i] }}
                        </a>
                        <div class="support_item-text">
                            {{ $ex_sub_description[$i] }}
                        </div>
                    </div>
                <?php } ?>
            </div>
        @endforeach
    </div>
</section>
<!-- End career WORK WITH DIONEAPPS -->

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
                        <input type="text" id="name" name="name" class="form_inp-cont" placeholder="name">
                        <input type="text" id="phone_number" name="phone_number" class="form_inp-cont"
                            placeholder="Phone No">
                    </div>
                    <input type="text" id="email" name="email" class="form_inp-mail" placeholder="Email">
                    <textarea name="message" id="message" class="form_inp-text" placeholder="Message"></textarea>
                    <div class="footer_btn-wrpper">
                        <button class="footer_btn btn" type="submit" name="send_us">
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
            data: {
                "_token": "{{ csrf_token() }}",
                name: name,
                phone_number: phone_number,
                email: email,
                message: message,
            },

            //Display Response Success Message
            success: function(data) {
                console.log(data.success)
                document.getElementById("contactForm").reset();
            },
        });
    });
</script>
