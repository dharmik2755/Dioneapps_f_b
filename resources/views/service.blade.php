{{-- @include('user_header') --}}
@extends('main')
@section('main-section')
    <!-- start about us title -->
    <section class="wrapper_form">
        <div class="container">
            <form class="form" id="ajax_form_project" data-aos="fade-down">
                {{-- <div class="form_title_custom" id="">
                Service
            </div> --}}
                <h1 class="form_title_custom">
                    Service
                </h1>
            </form>
        </div>
    </section>
    <!-- about us title End -->

    <!-- start service title -->
    <section class="page_top" data-aos="fade-right">
        <div class="container">
            <div class="page_top-wrapper">
                @foreach ($service_page as $sp)
                    <div class="page_top-left header_title">
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

    {{-- <section class="advantages">
    <div class="container">
        <h3 class="advantages_titlte title" data-aos="fade-right">
            Our Services
        </h3>
        <p class="advantages_text text" data-aos="fade-right">
        </p>
        <div class="advantages_wrapper" data-aos="fade-right">
            <?php
            $i = 1;
            $j = 1;
            ?>
            @foreach ($our_services as $item)
                <?php  

                if(3 * $i != $j)
                {
                    ?>
                <div class=" advantages_item ">
                    <div class="advantages_item-main">
                        <img class="service_img" src="{{ 'upload/' . $item->image }}" alt="">
                        <div class="advantages_item-title">
                            {{ $item->title }}
                        </div>
                    </div>
                    <div class="advantages_item-text">
                        {{ $item->description }}
                    </div>
                </div>
                <?php
             
                } else
                { 
                    ?>
                <div class="advantages_item advantages_item-tree">
                    <div class="advantages_item-main">
                        <img class="service_img" src="{{ 'upload/' . $item->image }}" alt="">
                        <div class="advantages_item-title">
                            {{ $item->title }}
                        </div>
                    </div>
                    <div class="advantages_item-text">
                        {{ $item->description }}
                    </div>
                </div>
                <?php  
                $i++;
                }
                $j++; 
                ?>
            @endforeach
        </div>
    </div>
<section> --}}
    <!-- our services end -->



    {{-- start update our service --}}
    <section>
        <div class="container">
            <h3 class="advantages_titlte title" data-aos="fade-right">
                Our Services
            </h3>
            <p class="advantages_text text" data-aos="fade-right">
            </p>
            <?php
            $i = 1;
            $n = 2;
            ?>
            @foreach ($our_services as $item)
                <?php 
                        if($i % $n !=0)
                        {
                    ?>
                <div class="advantages_wrapper" data-aos="fade-right">
                    <div class="card">
                        <div class="profile-sidebar">
                            <img src="{{URL('upload/' . $item->image) }}" alt="">
                        </div>
                        <div class="profile-main">
                            <div class="profile-position">
                                {{ $item->title }}
                            </div>
                            <p class="profile-body">
                                {{ $item->description }}
                            </p>
                        </div>
                    </div>
                </div>
                <?php 
                    }
                    else { 
                    ?>
                <div class="advantages_wrapper" data-aos="fade-left">
                    <div class="card_right">
                        <div class="profile-main-left">
                            <div class="profile-position">
                                {{ $item->title }}
                            </div>
                            <p class="profile-body">
                                {{ $item->description }}
                            </p>
                        </div>
                        <div class="profile-sidebar">
                            <img src="{{ URL('upload/' . $item->image) }}" alt="">
                        </div>
                    </div>
                </div>
                <?php 
                    }
                    $i = $i + 1;
                    ?>
            @endforeach
        </div>
    </section>
    {{-- end update our service --}}

    <!-- start About Us -->
    <section class="brif">
        <div class="container">
            <div class="brif_wrapp">
                <div class="brif_content" data-aos="fade-right">
                    @foreach ($services_offer as $item3)
                        <div class="brif_title_media title_media">
                            {{ $item3->title }}
                        </div>
                        <div class="our_offers">
                            <div class="left-side">
                                <div class="brif_text text srevice_page_des">
                                    {{ $item3->description }}
                                </div>
                                <div class="support_wrapper_media support_right">
                                    <?php
                                            $array_of_sub_title = explode('|||',$item3->sub_title);
                                            for ($i=0; $i<count($array_of_sub_title) ; $i++) 
                                        {?>
                                    <div class="support_item_media ">
                                        <div class="support_item-text_media mg-media_line">
                                            {{ $array_of_sub_title[$i] }}
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="brif_info">
                                    <div class="brif_info-text text">
                                        {{ $item3->sub_description }}
                                    </div>
                                </div>
                            </div>
                            <div class="right-side">
                                <div class="right-support-bottom-img" data-aos="fade-left" data-aos-delay="500">
                                    @foreach ($services_offer as $item3)
                                        <img src="{{ URL('upload/' . $item3->image) }}" alt="">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="support_item_contact">
                            <div class="item_messan-wrpper service_icone_set">
                                @foreach ($footer_fifth as $fifth)
                                    <a href="{{ $fifth->link }}" class="item_messan-link">
                                        <img src="{{ URL('upload/' . $fifth->image) }}" width="22" height="28"
                                            alt="">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="bottom-support-bottom-img" data-aos="fade-left" data-aos-delay="500">
                            @foreach ($services_offer as $item3)
                                <img src="{{ URL('upload/' . $item3->image) }}" alt="">
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
    <!-- End Contact Us-->
@endsection
{{-- @include('user_footer') --}}
