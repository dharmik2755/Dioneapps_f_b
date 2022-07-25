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

            @foreach ($career_page_titles as $cpt)
                <div class="page_top-left">
                    {{-- <div class="crumbs">
                        <a href="#">
                            WE ARE CREATIVE
                        </a>
                    </div> --}}

                    <div class="page_top-title">
                        <span class="red">{{ $cpt->title }}</span>
                    </div>
                </div>
                <div class="page_top-right">
                    <div class="page_top-text">
                        {{ $cpt->description }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- end career title -->

<!-- start career WORK WITH DIONEAPPS -->
<section class="support" data-aos="fade-left">
    <div class="container">
        @foreach ($career_page_perkss as $cpp)
            <div class="support_title title">
                {{ $cpp->title }}
            </div>
            <div class="support_text text">
                {{ $cpp->description }}
            </div>
        @endforeach


        @foreach ($career_page_perkss as $item)
            <div class="support_wrapper">
                <?php 
                    $picture = explode('|||', $item->image);
                    $GLOBALLY = explode('|||',$item->sub_title);
                    $ex_sub_description = explode('|||',$item->sub_description);
                    for ($i=0; $i<count(explode('|||',$item->sub_title)); $i++) {
                    ?>
                    <div class="support_item career_width">
                        <div class="support_item img">
                            <img src="{{ asset('upload/' . $picture[$i]) }}" alt="">
                        </div>
                        <a href="#" class="support_item-title">
                            {{ $GLOBALLY[$i] }}
                        </a>
                        <div class="support_item-text">
                            {{ $ex_sub_description[$i] }}
                        </div>
                    </div>
                <?php } ?>
            </div>
        @endforeach
    </div>
</section>
<!-- End career WORK WITH DIONEAPPS -->

<!-- start Contact Us -->
<!-- End Contact Us-->

@include('user_footer')

