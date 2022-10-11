{{-- @include('user_header') --}}
@extends('main')

@section('main-section')
    <!-- start about us title -->
    <section class="wrapper_form">
        <div class="container">
            <form class="form" id="ajax_form_project" data-aos="fade-down">
                {{-- <div class="form_title_custom" id="">
                About Us
            </div> --}}
                <h1 class="form_title_custom">
                    About Us
                </h1>
            </form>
        </div>
    </section>
    <!-- about us title End -->

    @foreach ($we_expert as $we)
        <section class="wrapper_about" style="background-image: url({{ asset('upload/' . $we->image) }});">
            <div class="container">
                <div class="about_first_box">
                    <div class="about_left_box" data-aos="fade-right">
                        <div class="about_left_box_t page_top-title">
                            {{ $we->title }}
                        </div>
                        <div class="about_left_box_d about_page_top_des">
                            {!! $we->description !!}
                        </div>
                    </div>
                    <div class="about_right_box">
                    </div>
                </div>
            </div>
        </section>
    @endforeach

    <!--  start about us information -->
    <section class="page_top" data-aos="fade-right">
        <div class="container">
            @foreach ($renowned as $dt)
                <div class="page_top-wrapper about_warper">
                    <div class="page_top-left">
                        <div class="page_top-title about_page_title">
                            {{ $dt->title }}
                        </div>
                    </div>
                    <div class="page_top-right about_page_des">
                        <div class="page_top-text about_page_innerdes">
                            {!! $dt->description !!}
                        </div>
                    </div>
                </div>
        </div>
        <div class="container">
            <div class="support_wrapper">
                <?php $seats_data = explode(',', $dt->sub_title);
                    for($i=0;$i<count($seats_data);$i++)
                    { ?>
                <div class="support_item">
                    <div class="support_item-text mg-media_line">
                        {{ $seats_data[$i] }}
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        @endforeach
    </section>

    <section class="page_top">
        <div class="container">
            <div class="counter_box" data-aos="fade-up">
                @foreach ($about_counter as $about_data)
                    <div class="counter_inner_box">
                        <div class="counter_child_1_perent">
                            <div class="counter_child_1">
                                <span class="count_info">{{ $about_data->number }}</span> +
                            </div>
                        </div>
                        <div class="counter_child_2">
                            <h3>{{ $about_data->title }}</h3>
                            <p>{{ $about_data->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="page_top aos-init" data-aos="fade-right">
        <div class="container">
            <div class="globally">
                @foreach ($renowneds as $rws)
                    <div class="globally_left_side">
                        <div class="support_title title globally_title red">
                            {{ $rws->title }}
                        </div>
                        <div class="support_text text globally_desciption">
                            {{ $rws->description }}
                        </div>
                    </div>
                    <div class="globally_right_side">
                        <div class="support_wrapper ">
                            <?php
                    $GLOBALLY_sub_description = explode(' | ',$rws->sub_description); 
                    $GLOBALLY = explode(' | ',$rws->sub_title);
                            for ($i=0; $i<count($GLOBALLY); $i++) 
                            { ?>
                            <div class="support_item">
                                <a href="#" class="support_item-title support_item ">
                                    {{ $GLOBALLY[$i] }}
                                </a>
                                <div class="support_item-text support_item">
                                    {{ $GLOBALLY_sub_description[$i] }}
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- 
<div class="page-wrapper">
    <div class="employee title ">Meet our Team</div>
    <div class="post-slider_one team_slider_height">
        <div class="post-wrapper slick-slider">
            <div class="post slick-slide">
                <a href="#">
                    <img src="http://localhost:8000/about_page/fa.jpg" alt="" class="employee_image">
                </a>
                <div class="post-info">
                    <div class="employee_title">
                        Monalika Agarwal
                    </div>
                    <div class="employee_description">
                        <a href="#">Team Manager</a>
                    </div>
                </div>
            </div>
            <div class="post slick-slide">
                <a href="#">
                    <img src="http://localhost:8000/about_page/fa.jpg" alt="" class="employee_image">
                </a>
                <div class="post-info">
                    <div class="employee_title">
                        Monalika Agarwal
                    </div>
                    <div class="employee_description">
                        <a href="#">Team Manager</a>
                    </div>
                </div>
            </div>
            <div class="post slick-slide">
                <a href="#">
                    <img src="http://localhost:8000/about_page/fa.jpg" alt="" class="employee_image">
                </a>
                <div class="post-info">
                    <div class="employee_title">
                        Monalika Agarwal
                    </div>
                    <div class="employee_description">
                        <a href="#">Team Manager</a>
                    </div>
                </div>
            </div>
            <div class="post slick-slide">
                <a href="#">
                    <img src="http://localhost:8000/about_page/fa.jpg" alt="" class="employee_image">
                </a>
                <div class="post-info">
                    <div class="employee_title">
                        Monalika Agarwal
                    </div>
                    <div class="employee_description">
                        <a href="#">Team Manager</a>
                    </div>
                </div>
            </div>
            <div class="post slick-slide">
                <a href="#">
                    <img src="http://localhost:8000/about_page/fa.jpg" alt="" class="employee_image">
                </a>
                <div class="post-info">
                    <div class="employee_title">
                        Monalika Agarwal
                    </div>
                    <div class="employee_description">
                        <a href="#">Team Manager</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


    {{-- <section class="page_top" data-aos="fade-left">
    <div class="container">
        @foreach ($renowneds as $rws)
            <div class="support_title title">
                {{ $rws->title }}
            </div>
            <div class="support_text text">
                {{ $rws->description }}
            </div>
            <div class="support_wrapper"> --}}
    <?php
                    // $GLOBALLY_sub_description = explode('|||',$rws->sub_description); 
                    // $GLOBALLY = explode('|||',$rws->sub_title);
                    //         for ($i=0; $i<count($GLOBALLY); $i++) 
                            { ?>
    {{-- <div class="support_item"> --}}
    {{-- <a href="#" class="support_item-title support_item ">
                    {{ $GLOBALLY[$i] }}
                </a> --}}
    {{-- <div class="support_item-text support_item">
                    {{ $GLOBALLY_sub_description[$i] }}
                </div> --}}
    {{-- </div> --}}
    <?php } ?>
    <?php
    // $GLOBALLY_sub_description = explode('|||',$rws->sub_description);
    //     for ($i=0; $i<count($GLOBALLY_sub_description); $i++)
    //     {
    ?>
    {{-- <div class="support_item">
                <div class="support_item-text support_item">
                {{$GLOBALLY_sub_description[$i]}}
                </div>
                 </div> --}}
    <?php
    //    }
    ?>
    {{-- </div>
        @endforeach
    </div>
</section> --}}
    <!-- about us information end -->


    <!-- counter penal -->
    {{-- <div id="projectFacts" class="sectionClass">
    <div class="fullWidth eight columns">
        <div class="projectFactsWrap ">
            @foreach ($counter as $cr)
                <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
                    <i class="fa fa-briefcase"></i>
                    <p class="number"><span id="number1">{{ $cr->clients }}</span>+</p>
                    <span class="span"></span>
                    <p>Happy clients</p>
                </div>
                <div class="item wow fadeInUpBig animated animated" data-number="55" style="visibility: visible;">
                    <i class="fa fa-smile"></i>
                    <p class="number"><span id="number2">{{ $cr->projects }}</span>+</p>
                    <span class="span"></span>
                    <p>Projects done</p>
                </div>
                <div class="item wow fadeInUpBig animated animated" data-number="359" style="visibility: visible;">
                    <i class="fa fa-coffee"></i>
                    <p class="number"><span id="number3">{{ $cr->employees }}</span>+</p>
                    <span class="span"></span>
                    <p>Employees</p>
                </div>
                <div class="item wow fadeInUpBig animated animated" data-number="246" style="visibility: visible;">
                    <i class="fa fa-camera"></i>
                    <p class="number"><span id="number4">{{ $cr->branches }}</span>+</p>
                    <span class="span"></span>
                    <p>Branches</p>
                </div>
            @endforeach
        </div>
    </div>
</div> --}}
    <!-- end counter penal -->


    <!-- start project Contact Us -->
    <section class="wrapper_form-project">
        <div class="container">
            @foreach ($project_detail as $pd)
                <form class="form" data-aos="fade-down">
                    <div class="crumbs">
                        <h2 class="support_item-text project_title">{{ $pd->title }}</h2>
                    </div>
                    <div class="form_title project_description" id="">
                        {{ $pd->description }}
                    </div>
                    {{-- <div>
                        <a href="{{ route('contact.page') }}" class="page_top-btn-order btn-header project_btn">
                            Contact Us
                        </a>
                    </div> --}}
                    <div class="contact_button" >
                        <a href="{{ route('contact.page') }}" class=" new_button2  project_btn">
                         Contact Us
                        </a>
                    </div>
                </form>
            @endforeach
        </div>
    </section>
    <!-- End project Contact Us-->
@endsection
{{-- @include('user_footer') --}}
