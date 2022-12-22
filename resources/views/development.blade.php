{{-- @include('user_header') --}}
@extends('main')
@section('main-section')
    <section class="development_top" data-aos="fade-down">
        <div class="container">
            @foreach ($development_data as $data)
                <div class="development">
                    <div class="left_development">
                        <h1 class="left_development_title">{{ $data->title }}</h1>
                        <p class="left_development_des">
                            {{ $data->description }}
                        </p>
                        <div class="page_top-btn-order btn-header">
                            Contact Us
                        </div>
                    </div>
                    <div class="right_development" data-aos="fade-left">
                        <img src="{{ asset('all_img/Rectangle_16.svg') }}" alt="development image"
                            class="development_image1">
                        <img src="{{ asset('all_img/Rectangle_15.svg') }}" alt="development image"
                            class="development_image2">
                        <img src="{{ asset('upload/' . $data->image2) }}" alt="development-image">
                    </div>
                </div>
            @endforeach
        </div>
    </section><br><br><br>

    {{-- start Application development --}}
    <section class="des_dev_top">
        <div class="container">
            @foreach ($app_develop_title as $adt)
                <div class="des_box">
                    <div class="inner_des_box">
                        <h2 class="box_title">
                            {{ $adt->title }}
                        </h2>
                        <div class="box_des">
                            {{ $adt->des }}
                        </div>
                    </div>
                    <div class="inner_des_box">
                        <div class="des_box_title">
                            <div class="back_img_1"></div>
                            {{ $adt->ios }}
                        </div>
                        <div class="des_box_des">
                            {{ $adt->ios_des }}
                        </div>
                    </div>
                    <div class="inner_des_box">
                        <div class="des_box_title">
                            <div class="back_img_2"></div>
                            {{ $adt->android }}
                        </div>
                        <div class="des_box_des">
                            {{ $adt->android_des }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    {{-- end --}}

    {{-- start web development --}}
    <section class="des_dev_top">
        <div class="container">
            @foreach ($web_develop_title as $wdt)
                <div class="web_box">
                    <div class="web_title">
                        {{ $wdt->title }}
                    </div>
                    <div class="web_des">
                        {{ $wdt->description }}
                    </div>
                </div>
            @endforeach
        </div>
    </section><br>
    {{-- end --}}

    {{-- start ui-ux design --}}
    <section class="des_dev_top">
        <div class="container">
            @foreach ($uiux_develop_title as $udt)
                <div class="ui_ux_box">
                    <div class="ui_ux_title">
                        {{ $udt->title }}
                    </div>
                    <div class="ui_ux_des">
                        {{ $udt->description }}
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    {{-- end --}}

    {{-- start features --}}
    <section class="page_top fatures_page_top features" data-aos="fade-right">
        <div class="container">
            @foreach ($features_development as $fd)
                <div class="page_top-wrapper about_wrapper features_box">
                    <div class="page_top-right about_right">
                        <img src="{{ asset('upload/' . $fd->image) }}" class="page_top-title about_img features_img"
                            alt="features image">
                    </div>
                    <div class="page_top-left  about_top features_right">
                        <div class="features_back"></div>
                        <div class="page_top-title about_title features_title">
                            {{ $fd->title }}
                        </div>
                        <div class="brif_info">
                            <?php $select_data = explode(',',$fd->sub_title);
                                for ($i=0; $i < count($select_data); $i++) { ?>
                            <div class="support_item_media ">
                                <div class="support_item-text_media mg-media_line features_width ">
                                    {{ $select_data[$i] }}
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    {{-- end --}}

    <div class="line_img">
        <img src="{{ asset('all_img/Line Design 1.svg') }}" alt="line design" class="line_inner_img1">
    </div>

    {{-- start web development describe --}}
    <section class="brif">
        <?php
        $i = 1;
        $n = 2; ?>
        @foreach ($company_work_features as $cwf)
            <?php if ($i % $n != 0) 
            { ?>
            <div class="container">
                <div class="web_box_web">
                    <div class="web_left">
                        <div class="web_left_inner" data-aos="fade-right">
                            <div class="web_des_title">
                                {{ $cwf->title }}
                            </div>
                            <div class="web_des_des">
                                {{ $cwf->description }}
                            </div>
                        </div>
                    </div>
                    <div class="web_right" data-aos="fade-left">
                        <div class="web_right_inner">
                            <img src="{{ asset('upload/' . $cwf->image) }}" alt="CUSTOM WEBSITE DEVELOPMENT"
                                class="web_right_img">
                        </div>
                    </div>
                </div>
            </div>
            <?php
            } else {
            ?>
            <div class="container">
                <div class="web_box_web">
                    <div class="web_right_part" data-aos="fade-right">
                        <div class="web_right_inner">
                            <img src="{{ asset('upload/' . $cwf->image) }}" alt="BANCKEND & APIs Image"
                                class="web_right_img">
                        </div>
                    </div>
                    <div class="web_left" data-aos="fade-left">
                        <div class="web_left_inner">
                            <div class="web_des_title ">
                                {{ $cwf->title }}
                            </div>
                            <div class="web_des_des">
                                {{ $cwf->description }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } 
            $i = $i + 1;
            ?>
        @endforeach
    </section>
    {{-- end --}}

    <?php $id = request()->segment(2);
    if ($id != 4) { ?>
    <div class="line_img">
        <img src="{{ asset('all_img/Line Design 1.svg') }}" alt="line design" class="line_inner_img2">
    </div>
    <?php }    ?>

    <!-- start development company projects describe -->
    <?php
    $i = 1;
    $n = 2;
    ?>
    @foreach ($company_project as $cp)
        <?php
        if ($i % $n != 0)
        { ?>
        <section class="brif">
            <div class="container">
                <div class="develop_info">
                    <div class="brif_content content_left" data-aos="fade-right">
                        <div class="brif_title title">
                            {{ $cp->title }}
                        </div>
                        <div class="text">
                        </div>
                        <div class="brif_text">
                            {{ $cp->sub_title }}
                        </div>
                        <div class="brif_info">
                            <div class="brif_info-text text development_size">
                                {{ $cp->description }}
                            </div>
                        </div>
                        <div>
                            <?php
                            $a=0; 
                            foreach (explode(',', $cp->image) as $picture) 
                            {  ?>
                            <a href="{{ asset('upload/' . $picture) }}" style="<?php if ($a != 0) {
                                echo 'display: none';
                            } ?>"
                                data-lightbox='mygallery[$a]' class="button_dev develop_btn">
                                View Project
                            </a>
                            <?php
                            $a++;
                            } ?>
                        </div>
                    </div>
                    <div class="develop_img" data-aos="fade-left" data-aos-delay="500">
                        <?php
                            $c=0; 
                            foreach (explode(',', $cp->image) as $picture) 
                            {  ?>
                        <a href="{{ asset('upload/' . $picture) }}" data-lightbox='mygallery[$b]'>
                            <img style="<?php if ($c != 0) {
                                echo 'display: none';
                            } ?>" src="{{ asset('upload/' . $picture) }}" alt="">
                        </a>
                        <?php
                            $c++;
                            } ?>
                    </div>
                </div>
            </div>
        </section>
        <?php 
        } else {
        ?>
        <section class="brif">
            <div class="container">
                <div class="develop_info">
                    <div class="develop_img_left left_dev" data-aos="fade-right" data-aos-delay="500">
                        <?php
                            $d=0; 
                            foreach (explode(',', $cp->image) as $picture) 
                            {  ?>
                        <a href="{{ asset('upload/' . $picture) }}" data-lightbox='mygallery[$d]'>
                            <img style="<?php if ($d != 0) {
                                echo 'display: none';
                            } ?>" src="{{ asset('upload/' . $picture) }}" alt="">
                        </a>
                        <?php
                            $d++;
                            } ?>
                    </div>
                    <div class="brif_content content_left" data-aos="fade-left">
                        <div class="brif_title title">
                            {{ $cp->title }}
                        </div>
                        <div class="text">
                        </div>
                        <div class="brif_text">
                            {{ $cp->sub_title }}
                        </div>
                        <div class="brif_info">
                            <div class="brif_info-text text development_size">
                                {{ $cp->description }}
                            </div>
                        </div>
                        <?php
                            $e=0; 
                            foreach (explode(',', $cp->image) as $picture) 
                            {  ?>
                        <a href="{{ asset('upload/' . $picture) }}" style="<?php if ($e != 0) {
                            echo 'display: none';
                        } ?>"
                            data-lightbox='mygallery[$e]' class="button_dev develop_btn">
                            View Project
                        </a>
                        <?php
                            $e++;
                            } ?>
                    </div>
                </div>
            </div>
        </section>
        <?php } 
        $i = $i + 1;
    ?>
    @endforeach


    {{-- <section class="brif">
        <div class="container">
            <div class="develop_info">
                <div class="brif_content content_left" data-aos="fade-right">
                    <div class="brif_title title">
                        Ecommerce Website
                    </div> --}}

    {{-- <div class="text">
                </div>
                <div class="brif_text">
                    flutter app
                </div> --}}

    {{-- <div class="brif_info">
                        <div class="brif_info-text text development_size">
                            With a custom-build methodology for every digital problem, it’s no wonder so many different
                            industries seek us out. With a custom-build methodology for every digital problem, it’s no
                            wonder so many different industries seek us out.
                        </div>
                    </div>
                    <div>
                        <a href="{{ asset('all_img/Imac@2x.png') }}" data-lightbox='mygallery'
                            class="button_dev develop_btn">
                            View Project
                        </a>
                    </div>
                </div>
                <div class="develop_img" data-aos="fade-left" data-aos-delay="500">
                    <a>
                        <img src="{{ asset('all_img/Imac@2x.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- end development company projects describe -->

    {{-- start --}}
    <?php $url_id =  request()->segment(2);
        if ($url_id != 4) {
    ?>

    <section class="brif">
        <div class="page-wrapper">
            <div class="container">
                <div class="employee title ">RELEVANT PROJECTS</div>
            </div>
            <div class="post-slider_one team_slider_height ">
                <div class="post-wrapper projects">
                    @foreach ($portfolio_latest_works as $plw)
                        <div class="post">
                            <a href="#">
                                <img src="{{ asset('upload/' . $plw->color_image) }}" alt="project image"
                                    class="projects_image">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section><br>
    <?php } ?>
    {{-- end --}}

    {{-- start --}}
    <div class="use_width">
        <section class="brif language_brif">
            <div class="container">
                <div class="title">Languages We Work On for Applicatons</div>
                <div class="development_use">
                    @foreach ($specialized as $sd)
                        <img src="{{ asset('upload/' . $sd->image) }}" alt="Languages image" class="development_img">
                    @endforeach
                </div>
            </div>
        </section>
    </div><br><br><br>
    {{-- end --}}

    {{-- start --}}
    <section class="brif language_brif">
        <div class="container">
            <div class="title">OTHER SERVICES</div>
            <div class="services_use">
                @foreach ($our_services as $our)
                    <div class="services_box">
                        <img src="{{ asset('upload/'.$our->image) }}" height="100" width="100"
                            alt="SERVICES image" class="develop_service">
                        <div class="servise_des">{{$our->title}}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- end --}}


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
                    <div class="contact_button">
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
