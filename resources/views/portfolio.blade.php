{{-- @include('user_header') --}}
@extends('main')
@section('main-section')
    

<section class="wrapper_form">
    <div class="container">
        <form class="form" id="ajax_form_project" data-aos="fade-down">
            {{-- <div class="form_title_custom" id="">
                    Portfolio
                </div> --}}
            <h1 class="form_title_custom" id="">
                Portfolio
            </h1>
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
                    <span class="red">PROJECTS WE WORKED ON</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end -->
<!-- start -->

{{-- <section class="page_top" data-aos="fade-up">
<div class="container">
    <div class="dis_inline">
        <div class="poportfolio_btn" >
            <a href="#" class="page_top-btn-order btn-header-portfolio">
                All
            </a>
        </div>
        <div class="poportfolio_btn">
            <a href="#" class="page_top-btn-order btn-header-portfolio">
                Graphics
            </a>
        </div>
        <div class="poportfolio_btn">
            <a href="#" class="page_top-btn-order btn-header-portfolio">
                Website
            </a>
        </div>
        <div class="poportfolio_btn">
            <a href="#" class="page_top-btn-order btn-header-portfolio">
                Applications
            </a>
        </div>
    </div>
</div>
</section> --}}



<section class="portfolio_page" id="post-data" >
    @include('data')
</section>



<!-- start companies -->
<section class="page_top" data-aos="fade-left">
    <div class="container">
        @foreach ($portfolio_awards as $pa)
            <div class="support_title title">
                {{ $pa->title }}
            </div>
            <div class="support_text text">
                {{ $pa->description }}
            </div>
            <div class="support_wrapper_companies">
                <?php 
                    $array_image = explode('|||',$pa->image);  
                    for ($i=0; $i<count($array_image); $i++) 
                    { ?>
                <div class="support_item_companies">
                    <img src="{{ asset('upload/' . $array_image[$i]) }}" alt="">
                </div>
                <?php 
                    } ?>
            </div>
        @endforeach
    </div>
</section>
<!-- end companies -->
{{-- scroller --}}
<script>
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
</script>

@endsection
{{-- @include('user_footer') --}}



