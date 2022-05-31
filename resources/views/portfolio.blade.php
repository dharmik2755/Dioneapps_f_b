@include('user_header')

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
            
                    <a href="#contacts" class="page_top-btn-order btn-header">
                        All
                    </a>
                    <a href="#contacts" class="page_top-btn-order btn-header">
                        Graphics
                    </a>
                    <a href="#contacts" class="page_top-btn-order btn-header">
                        Mobile Apps
                    </a>
                    <a href="#contacts" class="page_top-btn-order btn-header">
                        Web side
                    </a>
                
            
        </div>
    </div>
</section>
<!-- end -->
<!-- start -->
<?php 
$limit = 5;
$show_page_data = ceil($record / $limit);
 ?>
<section class="portfolio_page">
    @foreach ($portfolio_latest_works as $item)
        <div class="portfolio_page-item" style="background-image: url({{ asset('upload/'.$item->black_image)}})">
            <div class="cases_left-hover portfolio_page-item_hover" 
                style="background-image: url({{ asset('upload/'.$item->color_image)}})">
                    <div class="cases_left-title">
                        {{$item->title}}
                </div>
            </div>
        </div>
    @endforeach
</section>
<!----------------------pagination-------------------- -->
<div class="container">
    <div class="text-center" >                             
        <div align="center" style="margin-top: 15px;" >                             
            <?php if ($page>1-0) 
                { ?>
                    <a class=" btnp btn-success" href="{{url('portfolio/'.$page-1)}}"><<</a>
            <?php } ?>
            <!----------------------------------------------------------------------->
            <?php $cnt=0; 
            for ($i=$page; $i<$show_page_data ; $i++) 
            { ?>    
              <?php if ($cnt<3) 
                    { ?>

                        <a class=" btnp btn-primary" href="{{url('portfolio/'.$i)}}"><?php echo $i; ?></a>
        
                <?php } $cnt++; ?>
            <?php } ?>

            <?php if ($show_page_data>2 && $page<$show_page_data-1) 
                    {?>
                    ...
            <?php } ?>
            <!--------------------------------------------------------------------->
            <?php if ($page<$show_page_data-1) 
                {?>
                    <a class=" btnp btn-success" href="{{url('portfolio/'.$page+1)}}">>></a>
            <?php } ?>
        </div>
    </div>  
</div> 
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

@include('user_footer')