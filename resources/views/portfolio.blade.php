@include('user_header')
{{-- slider js and css
<link href="{{ asset('asset/css/slick.css')}}" rel="stylesheet">
<link href="{{ asset('asset/css/slick-theme.css')}}" rel="stylesheet">
<script src="{{ asset('asset/js/slick.min.js')}}"></script> --}}

{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <!-- start about us title -->
    <section class="wrapper_form">
        <div class="container">
            <form class="form" id="ajax_form_project" data-aos="fade-down">
                <div class="form_title_custom" id="">
                    Portfolio
                </div>            
            </form>
        </div>
    </section>
    <!-- about us title End -->

<!-- start -->
<section class="page_top" data-aos="fade-right">
    <div class="container">
        <div class="page_top-wrapper">
            <div class="page_top-left">
                <div class="page_top-title">
                    <span class="red">Our Latest Creative Work</span>
                </div>
                <!-- <div class="page_top-btn-wrapper">
                    <a href="#contacts" class="page_top-btn-order btn">
                        Contact Us
                    </a>
                </div> -->
            </div>
            
                    <a href="#" class="page_top-btn-order btn-header">
                        All
                    </a>
                    <a href="#" class="page_top-btn-order btn-header">
                        Graphics
                    </a>
                    <a href="#" class="page_top-btn-order btn-header">
                        Mobile Apps
                    </a>
                    <a href="#" class="page_top-btn-order btn-header">
                        Web side
                    </a>
        </div>
    </div>
</section>
<!-- end -->
<!-- start -->
<?php 
// $limit = 5;
// $show_page_data = ceil($record / $limit);
 ?>
 
<section class="portfolio_page" id="post-data">
    
   @include('data')

        
</section>
        {{-- <div class="ajax-load text-center" style="display: none;" >
            <p><img src="{{ asset('loader/load.gif') }}" width="50" alt=""> Loading More </p>
        </div> --}}

{{-- <style>
    .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
</style>         --}}
{{-- <section class="vertical-center-4 slider ">
            <div>
            <img src="{{asset('asset/images/badges-1.png')}}" height="100" width="100" >
            </div>
            <div>
            <img src="{{asset('asset/images/badges-2.png')}}" height="100" width="100">
            </div>
            <div>
            <img src="{{asset('asset/images/badges-3.png')}}" height="100" width="100">
            </div>
            <div>
            <img src="{{asset('asset/images/badges-4.png')}}" height="100" width="100">
            </div>
  </section> --}}

<!----------------------pagination-------------------- -->
{{-- <div class="container">
    <div class="row">
        <div align="center" style="margin-top: 15px;">
            {{ $portfolio_latest_works->links() }}
        </div> --}}
    {{-- <div class="text-center" >                             
        <div align="center" style="margin-top: 15px;" >                              --}}
            <?php 
            // if ($page>1-0) 
            //     { 
                    ?>
                    {{-- <a class=" btnp btn-success" href="{{url('portfolio/'.$page-1)}}"><<</a> --}}
            <?php 
            // } 
            ?>
            <!----------------------------------------------------------------------->
            <?php 
            // $cnt=0; 
            // for ($i=$page; $i<$show_page_data ; $i++) 
            // { 
                ?>    
              <?php 
            //   if ($cnt<3) 
            //         {
                         ?>

                        {{-- <a class=" btnp btn-primary" href="{{url('portfolio/'.$i)}}"><?php 
                        // echo $i; 
                        ?></a> --}}
        
                <?php 
                // } $cnt++;
                 ?>
                <?php 
                // }
                 ?>

            <?php 
            // if ($show_page_data>2 && $page<$show_page_data-1) 
            //         {
                        ?>
                    {{-- ... --}}
            <?php 
            // } 
            ?>
            <!--------------------------------------------------------------------->
            <?php 
            // if ($page<$show_page_data-1) 
            //     {
                    ?>
                    {{-- <a class=" btnp btn-success" href="{{url('portfolio/'.$page+1)}}">>></a> --}}
            <?php 
            // }
            ?>
        {{-- </div> --}}
    {{-- </div>   --}}
    {{-- </div>
</div>  --}}
<!-- end -->

<!-- start companies -->
<section class="page_top" data-aos="fade-left">
    <div class="container">
        @foreach ($portfolio_awards as $pa)
            
            <div class="support_title title">
                {{$pa->title}}
            </div>
            <div class="support_text text">
                {{$pa->description}}
            </div>
            <div class="support_wrapper_companies">
                <?php 
                    $array_image = explode('|||',$pa->image);  
                    for ($i=0; $i<count($array_image); $i++) { ?> 
                        
                        <div class="support_item_companies">
                            <img src="{{asset('upload/'.$array_image[$i])}}" alt="">
                        </div>
                    <?php } ?>
            </div>
        @endforeach
    </div>
</section>
<!-- end companies -->



 <!-- start project Contact Us -->
 <section class="wrapper_form-project">
    <div class="container">
        @foreach ($project_detail as $pd)
        <form class="form" data-aos="fade-down">
            <div class="crumbs">
                <h2 class="support_item-text">{{ $pd->title }}</h2>
            </div>
            <div class="form_title" id="">
                {{ $pd->description }}
            </div>
            <a href="{{ route('contact.page') }}" class="page_top-btn-order btn-header">
                Contact Us
            </a>
        </form>
        @endforeach
    </div>
</section>
<!-- End project Contact Us-->

{{-- scroller --}}
<script>
     var page = 1;
     $(window).scroll(function(){
        if($(window).scrollTop() + $(window).height() >= $('.portfolio_page').height())
        {
            // alert();
            page++;
            loadMoreData(page);
        }
    });


    function loadMoreData(page)
    {
        $.ajax({
            url: '?page=' + page,
            type: 'GET',
            beforeSend: function()
            {
                $(".ajax-load").show();
            }
        })
        .done(function(data)
        {
            if(data.html == " ")
            {
                $('.ajax-load').html("no more recordes found");
            }
            $('.ajax-load').hide();
            $("#post-data").append(data.html);
        })
        .fail(function(jqXHR,ajaxOptions,thrownError){
            alert("Server Not responding.....");

        });
    }
   
    
</script>

{{-- slider sclick --}}
{{-- <script type="text/javascript">
    $(document).on('ready', function() {
      $(".vertical-center-4").slick({
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
      });
      $(".vertical-center-3").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".vertical-center-2").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 2,
        slidesToScroll: 2
      });
      $(".vertical-center").slick({
        dots: true,
        vertical: true,
        centerMode: true,
      });
      $(".vertical").slick({
        dots: true,
        vertical: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 3
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
      $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
    });
</script> --}}

@include('user_footer')
