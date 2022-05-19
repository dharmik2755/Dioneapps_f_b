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
            <div class="support_item_contact">
                <div class="support_item-icon fa-lg" >
                    <i class="fa-solid fa-phone"></i>
                </div>
                <a href="tel:+380973596510" class="support_item-title">
                    +91 7211140033
                </a>
                <div class="support_item-text">
                    Assistance hours: Monday – Friday, 9 am to 5 pm
                </div>
            </div>
            <div class="support_item_contact">
                <div class="support_item-icon fa-lg" >
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <a href="https://web.telegram.org/@smav01" class="support_item-title">
                    info@dioneapps.com
                </a>
                <div class="support_item-text">
                    Our support team will get back to in 24-h during standard business hours.
                </div>
            </div>
            <div class="support_item_contact">
                <div class="support_item-icon fa-lg" >
                    <i class="fa-brands fa-skype"></i>
                </div>
                <a href="mailto:support@host.com" class="support_item-title">
                    support.dioneapps
                </a>
                <div class="support_item-text">
                    We Are Online: Monday – Friday, 9 am to 5 pm
                </div>
            </div>
            <div class="support_item_contact">
                <div class="item_messan-wrpper">
                    <a href="#" class="item_messan-link-media">
                        <img src="asset/images/fa.svg" width="18" height="25" alt="">
                    </a>
                    <a href="#" class="item_messan-link-media">
                        <img src="asset/images/tw.svg" width="15" height="17" alt="">
                    </a>
                    <a href="#" class="item_messan-link-media">
                        <img src="asset/images/in.svg" width="15" height="17" alt="">
                    </a>
                    <a href="#" class="item_messan-link-media">
                        <img src="asset/images/insta.svg" width="15" height="17" alt="">
                    </a>
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
            <div class="contacts_title title">
                Contact Us
            </div>
            <div class="contacts_text text">
                Planning a project? Please send your requirements and we’ll get back to you at the earliest.
            </div>
            <div class="form-wrapper">
                <div class="form_mail" data-aos="fade-up-right">
                    <a href="#" class="form_mail-link">
                        <img src="asset/images/contactus.png" alt="" >
                    </a>
                </div>

                <form class="form_bottom" id="ajax_form" data-aos="fade-up-left">

                    <div class="footer-form_title">
                        GET IN TOUCH
                    </div>
                    <div id="result_form_success" style="display: none">form success</div>
                    <div id="result_form_error" style="display: none">form error</div>
                    <div class="inp_cont-wrapper">
                        <input type="text" name="name" class="form_inp-cont" placeholder="name">
                        <input type="text" name="telephone" class="form_inp-cont" placeholder="Phone No">
                    </div>
                    <input type="text" name="email" class="form_inp-mail" placeholder="Email">
                    <textarea name="message" class="form_inp-text" placeholder="Message"></textarea>
                    <div class="footer_btn-wrpper">
                        <button class="footer_btn btn" id="form-footer" type="submit">
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