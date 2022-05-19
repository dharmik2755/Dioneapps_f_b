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
            <div class="page_top-left">
                <div class="crumbs">
                    <a href="#"> 	
                        WE ARE CREATIVE 
                    </a> 
                </div>

                <div class="page_top-title">
                    <span class="red">LET’S WORK TOGETHER</span>
                </div>
            </div>
            <div class="page_top-right">
                <div class="page_top-text">
                    At Dione Apps, we’re always hungry for fresh talent and rich expertise. Our team is full of dynamic and talented digital professionals, but we never stop looking for new ways to grow our full service web development company in Surat. We believe that investing in talent is the key to our company growth and to the ever-evolving services we offer to our clients. We want to deliver the best service, and hence we need the best people.
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end career title -->

<!-- start career WORK WITH DIONEAPPS -->
<section class="support" data-aos="fade-left">
    <div class="container">
        <div class="support_title title">
            PERKS TO WORK WITH DIONEAPPS
        </div>
        <div class="support_text text">
            Whatever your niche, if you have potential and ambition, there could be a place at Dione Apps for you. We understand the value of real digital talent.
        </div>
        <div class="support_wrapper">
            <div class="support_item">
                <div class="support_item img">
                    <img src="asset/images/teama.png" alt="">
                </div>
                <a href="/ru/support/base" class="support_item-title">
                    We take pride in our work
                </a>
                <div class="support_item-text">
                    With a custom-build methodology for every digital problem, it’s no wonder so many different industries seek us out.
                </div>
            </div>
            <div class="support_item">
                <div class="support_item img">
                <img src="asset/images/link.png" alt="">
                </div>
                <a href="/ru/support/base" class="support_item-title">
                    Growth and opportunity
                </a>
                <div class="support_item-text">
                    We empower employees to produce better results and meet their goals by keeping them motivated and productive.
                </div>
            </div>
            <div class="support_item">
                <div class="support_item img">
                <img src="asset/images/tech.png" alt="">
            </div>
                <a href="/ru/support/successful_site" class="support_item-title">
                    Inclusion and diversity
                </a>
                <div class="support_item-text">
                    We believe in nurturing an inclusive and diverse work environment that fosters deeper trust and commitment from employees.
                </div>
            </div>
            <div class="support_item">
                <div class="support_item img">
                <img src="asset/images/hi.png" alt="">
            </div>
                <a href="/ru/support/professional" class="support_item-title">
                    Exceeding industry standards
                </a>
                <div class="support_item-text">
                    We are constantly growing ourselves and keeping up to date with the ever-evolving trends in innovations of technology.
                </div>
            </div>
            <div class="support_item">
                <div class="support_item img">
                <img src="asset/images/badge.png" alt="">
            </div>
                <a href="/ru/support/professional" class="support_item-title">
                    Constant learning
                </a>
                <div class="support_item-text">
                    We encourage employees to pursue their curiosity and foster the lifelong learning instinct to keep up with the advancements.
                </div>
            </div>
            <div class="support_item">
                  <div class="support_item img">   
                <img src="asset/images/tin.png" alt="">
            </div>
                <a href="/ru/support/professional" class="support_item-title">
                    Build network
                </a>
                <div class="support_item-text">
                    We aim to turn jobs into highly specialized roles by building a dynamic professional network with industry experts and leaders.
                </div>
            </div>
        </div>
    </div>
</section>s
<!-- End career WORK WITH DIONEAPPS -->

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