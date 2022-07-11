 <!-- start footer -->
 <footer class="footer">
    <div class="footer_bottom">
        <div class="container">
            <div class="footer_bottom-wrapper">
                <!-- start footer DIONEAPPS -->
                <div class="footer_bottom-item" data-aos="fade-up">
                    @foreach ($footer_first as $ffuo)
                        <div class="bottom-item_title">
                            {{$ffuo->title}}
                        </div>
                        <div class="bottom-item_subtitle">
                            {{$ffuo->description}}
                        </div>
                    @endforeach
                </div>
                <!-- end footer DIONEAPPS -->

                <!-- start footer Our services -->
                <div class="footer_bottom-item item_none" data-aos="fade-up" data-aos-delay="200">
                    <div class="bottom-item_title">
                        @foreach ($footer_secound as $fser)
                        {{$fser->title}}
                        @endforeach
                    </div>
                    <ul class="bottom-item_list">
                        @foreach ($footer_secound as $fser)
                        <?php 
                            $secound_footer = explode('|||',$fser->services);

                            for ($i=0; $i<count($secound_footer); $i++) { ?>
                                <li>
                                    <a class="footer_text" href="#">{{$secound_footer[$i]}} </a>
                                </li>
                                <?php } ?>
                        @endforeach
                    </ul>
                </div>
                <!-- end footer Our services -->

                <!-- start footer Do More With -->
                <div class="footer_bottom-item item_none" data-aos="fade-up" data-aos-delay="400">
                    <div class="bottom-item_title">
                        Do More With
                    </div>
                    <ul class="bottom-item_list">
                        <li>
                            <a class="footer_text" href="{{url('/')}}">Home</a>
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
                </div>
                <!-- End footer Do More With -->

                <!-- start footer contact info -->
                <div class="footer_bottom-item" data-aos="fade-up">
                    <div class="bottom-item_title">
                        Contact Info
                    </div>
                    @foreach ($footer_forth as $ffth)
                        
                        <div class="bottom-item_subtitle">
                            <a href="{{$ffth->link}}">{{$ffth->description}}</a>
                        </div>
                    @endforeach
                    
                    <div class="bottom-item_messan">
                        <div class="item_messan-title footer_title">
                            Social media:
                        </div>
                        <div class="item_messan-wrpper">
                            @foreach ($footer_fifth as $fifth)    
                                <a href="{{$fifth->link}}" class="item_messan-link">
                                    <img src="{{asset('upload/'.$fifth->image)}}" width="18" height="25" alt="">
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- End footer contact info -->

            </div>
        </div>
    </div>
</footer>

{{-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- link js file -->
<script src="asset/js/html.js"></script>

<script type="text/javascript" src="https://smav.com.ua/js/rellax.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src="https://smav.com.ua/js/libs.min.js"></script>
<script type="text/javascript" src="https://smav.com.ua/js/main.js"></script>

{{-- for jquery validation --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" ></script>

{{-- for slider link script slick --}}
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="{{asset('assets/js/slick.js')}}"> </script>
</body>
</html>