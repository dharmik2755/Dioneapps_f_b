{{-- @include('user_header') --}}
@extends('main')
@section('main-section')
    <section class="wrapper_form">
        <div class="container">
            <form class="form" id="ajax_form_project" data-aos="fade-down">
                <h1 class="form_title_custom" id="">
                    Portfolio
                </h1>
            </form>
        </div>
    </section>

    <!-- start -->
    <section class="page_top" data-aos="fade-right">
        <div class="container">
            <div class="page_top-left">
                <div class="page_top-title">
                    <span class="p-title-color">PROJECTS WE WORKED ON</span>
                </div>
            </div>
        </div>
    </section>
    <!-- end -->

    {{-- old portfolio show data --}}
    {{-- <section class="portfolio_page" id="post-data" >
    @include('data')
    </section> --}}

    <section class="page_top">
        <div class="container">
            <div class="dis_inline">
                <div class="poportfolio_btn">
                    <label class="port_label all" for="all" checked>All</label>
                    <label class="port_label graphics" for="graphics">ui/UX & Graphics</label>
                    <label class="port_label website" for="website">Website</label>
                    <label class="port_label applications" for="applications">Applications</label>
                </div>
            </div>
        </div>
    </section>

    <input type="radio" name="filter" id="all" checked>
    <input type="radio" name="filter" id="graphics">
    <input type="radio" name="filter" id="website">
    <input type="radio" name="filter" id="applications">

    <div class="port_gallery_ayush">
        @foreach ($portfolio as $port)
            <?php if($port->service_type == "applications") { ?>

            <div class="port_card_ayush {{ $port->service_type }}">
                <div class="container ">
                    <div class="port">
                        <div class="port_width">
                            <div class="port_box_left">
                                <div class="port_left">
                                    <h2 class="port_title">{{ $port->title }}</h2>
                                    <div class="port_des">{{ $port->description }}</div>
                                    <div class="port_button">
                                        <?php if($port->playstore_link) { ?>
                                            <a href="{{ $port->playstore_link }}" target="_blank">
                                                <img src="{{ URL('upload/portfolio/playStore.png') }}" class="play-app-store"
                                                alt="playStore link" />
                                            </a>
                                        <?php } ?>
                                        <?php if($port->appstore_link) { ?>
                                        <a href="{{ $port->appstore_link }}" target="_blank">
                                            <img src="{{ URL('upload/portfolio/appStore.svg') }}"
                                                class="play-app-store"alt="appStore link" />
                                        </a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="port_right">
                                    <img src="{{ URL('upload/' . $port->image) }}" loading="lazy" alt="project image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php } else if($port->service_type == "website") { ?>

            <div class="port_card_ayush {{ $port->service_type }}">
                <div class="container">
                    <div class="port">
                        <div class="port_width">
                            <div class="port_box_left">
                                <div class="port_left">
                                    <h2 class="port_title">{{ $port->title }}</h2>
                                    <div class="port_des">{{ $port->description }}</div>
                                    <div class="port_button">
                                        <?php if($port->web_link) { ?>
                                        <a href="{{ $port->web_link }}" target="_blank">
                                            <img src="{{ URL('upload/portfolio/web.svg') }}" class="play-app-store"
                                                alt="web link">
                                        </a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="port_right">
                                    <img src="{{ URL('upload/' . $port->image) }}" loading="lazy" alt="project image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php } else if($port->service_type == "graphics") { ?>

            <div class="port_card_ayush {{ $port->service_type }}">
                <div class="container">
                    <div class="port">
                        <div class="port_width">
                            <div class="port_box_left">
                                <div class="port_left">
                                    <h2 class="port_title">{{ $port->title }}</h2>
                                    <div class="port_des">{{ $port->description }}</div>
                                    <div class="port_button_uiux">
                                        <?php 
                                        $service_data = explode(',' , $port->graphic); 
                                        if (in_array("uiux", $service_data)) { ?>
                                            <div>
                                                <img src="{{ URL('upload/portfolio/figma_logo.svg') }}" class="uiux_store"
                                                    alt="uiux image">
                                            </div>
                                        <?php } 
                                        if (in_array('ai', $service_data)) { ?>
                                            <div>
                                                <img src="{{ URL('upload/portfolio/ai.svg') }}" class="uiux_store"
                                                    alt="Illustrator image">
                                            </div>
                                        <?php } 
                                        if (in_array("ps",$service_data)) { ?>
                                            <div>
                                                <img src="{{ URL('upload/portfolio/ps.svg') }}" class="uiux_store"
                                                    alt="Photoshop image">
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="port_right">
                                    <img src="{{ URL('upload/' . $port->image) }}" loading="lazy" alt="project image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        @endforeach
    </div>
    {{-- <script>
        var page = 1;
        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() >= $('.portfolio_page').height()) {
                // alert();
                page++;
                loadMoreData(page);
            }
        });


        function loadMoreData(page) {
            $.ajax({
                    url: '?page=' + page,
                    type: 'GET',
                    beforeSend: function() {
                        $(".ajax-load").show();
                    }
                })
                .done(function(data) {
                    if (data.html == " ") {
                        $('.ajax-load').html("no more recordes found");
                    }
                    $('.ajax-load').hide();
                    $("#post-data").append(data.html);
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    alert("Server Not responding.....");

                });
        }
    </script> --}}
@endsection
{{-- @include('user_footer') --}}
