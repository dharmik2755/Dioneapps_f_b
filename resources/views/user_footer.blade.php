 <!-- start footer -->
 <footer class="footer">
     <div class="footer_bottom">
         <div class="container">
             <div class="footer_bottom-wrapper">
                 <!-- start footer DIONEAPPS -->
                 <div class="footer_bottom-item" <?php if ($_SERVER['REQUEST_URI'] != '/portfolio') {
                     echo 'data-aos="fade-up"';
                 } ?>>
                     @foreach ($footer_first as $ffuo)
                         <div class="bottom-item_title">
                             {{ $ffuo->title }}
                         </div>
                         <div class="bottom-item_subtitle">
                             {{ $ffuo->description }}
                         </div>
                     @endforeach
                 </div>
                 <!-- end footer DIONEAPPS -->

                 <!-- start footer Our services -->
                 <div class="footer_bottom-item item_none" <?php if ($_SERVER['REQUEST_URI'] != '/portfolio') {
                     echo 'data-aos="fade-up" data-aos-delay="200"';
                 } ?>>
                     <div class="bottom-item_title">
                         OUR SERVICE
                     </div>
                     <ul class="bottom-item_list">
                         @foreach ($specializ_id as $sd)
                             <li>
                                 <a class="footer_text text_transform"
                                     href="{{ url('/development/' . $sd->id) }}">{{ $sd->development_name }} </a>
                             </li>
                         @endforeach
                     </ul>
                 </div>
                 <!-- end footer Our services -->

                 <!-- start footer Do More With -->
                 {{-- <div class="footer_bottom-item item_none" data-aos="fade-up" data-aos-delay="400">
                    <div class="bottom-item_title">
                        Do More With
                    </div>
                    <ul class="bottom-item_list">
                        <li>
                            <a class="footer_text" href="{{url('/portfolio')}}">Home</a>
                        </li>
                        <li>
                            <a class="footer_text" href="{{url('/about')}}">About Us</a>
                        </li>
                        <li>
                            <a class="footer_text" href="{{url('/service')}}">Service</a>
                        </li>
                        <li>
                            <a class="footer_text" href="{{url('/portfolio')}}">Portfolio</a>
                        </li>
                        <li>
                            <a class="footer_text" href="{{url('/career')}}">Career</a>
                        </li>
                        <li>
                            <a class="footer_text" href="{{url('/contactus')}}">Contact Us</a>
                        </li>

                    </ul>
                </div> --}}
                 {{-- <div class="footer_bottom-item item_none" data-aos="fade-up" data-aos-delay="400">
                    <div class="bottom-item_title">
                        Social media
                    </div>
                    <div class="item_messan-wrpper">
                        @foreach ($footer_fifth as $fifth)    
                                <a href="{{$fifth->link}}" class="item_messan-link" target="_blank" >
                                    <img src="{{URL('upload/'.$fifth->image)}}" width="18" height="25" alt="">
                                </a>
                        @endforeach
                    </div>
                </div> --}}
                 <!-- End footer Do More With -->

                 <!-- start footer contact info -->
                 <div class="footer_bottom-item" <?php if ($_SERVER['REQUEST_URI'] != '/portfolio') {
                     echo 'data-aos="fade-up"';
                 } ?>>
                     <div class="bottom-item_title">
                         CONTACT INFO
                     </div>
                     @foreach ($footer_forth as $ffth)
                         <div class="bottom-item_subtitle">
                             <a class="footer_text" href="{{ $ffth->link }}"
                                 target="_blank">{{ $ffth->description }}</a>
                         </div>
                     @endforeach
                     @foreach ($contact_media_info as $cmi)
                         <div class="bottom-item_subtitle">
                             <i class="{{ $cmi->code }}"></i>
                             <a class="footer_text_2" href="{{ $cmi->title_link }}" target="_blank">
                                 {{ $cmi->title }}
                             </a><br>
                         </div>
                     @endforeach

                     {{-- <div class="bottom-item_messan item_view"> --}}
                     {{-- <div class="item_messan-title footer_title">
                            Social media:
                        </div> --}}
                     <div class="item_messan-wrpper service_icone_set ">
                         @foreach ($footer_fifth as $fifth)
                             <a href="{{ $fifth->link }}" class="item_messan-link" target="_blank">
                                 <img src="{{ URL('upload/' . $fifth->image) }}" width="22" height="25"
                                     alt="">
                             </a>
                         @endforeach
                     </div>

                     {{-- </div> --}}
                 </div>
                 <!-- End footer contact info -->
             </div>
         </div>
     </div>
     <div class="container">
         <div class="footer_right">
             © 2022 , All right reserved
         </div>
     </div>
 </footer>

 {{-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> --}}
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 <!-- Link counter js file -->
 <script type="text/javascript" src="{{ url('asset/js/html.js') }}"></script>

 {{-- <script type="text/javascript" src="{{ url('public/asset/js/rellax.min.js') }}"></script>
 <script type="text/javascript" src="{{ url('public/asset/js/aos.js') }}"></script>
 <script type="text/javascript" src="{{ url('public/asset/js/libs.min.js') }}"></script>
 <script type="text/javascript" src="{{ url('public/asset/js/main.js') }}"></script> --}}
 
 <script type="text/javascript" src="https://smav.com.ua/js/rellax.min.js"></script>
 <script  type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script type="text/javascript" src="https://smav.com.ua/js/libs.min.js"></script>
 <script type="text/javascript" src="https://smav.com.ua/js/main.js"></script>

 {{-- for jquery validation --}}
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

 {{-- for slider link script slick --}}
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
 <script type="text/javascript" src="{{ url('asset/js/slick.js') }}"></script>

 {{-- swiper slider in about page CDN link --}}
 <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

 </body>

 </html>
