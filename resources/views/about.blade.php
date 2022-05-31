@include('user_header')

<!-- start about us title -->
<section class="wrapper_form">
    <div class="container">
        <form class="form" id="ajax_form_project" data-aos="fade-down">
            <div class="form_title_custom" id="">
                About Us
            </div>
        </form>
    </div>
</section>
<!-- about us title End -->



<!--  start about us information -->
<section class="page_top" data-aos="fade-right">
    <div class="container">
        @foreach ($renowned as $dt)
            <div class="page_top-wrapper">
                <div class="page_top-left">
                    <div class="page_top-title">
                        {{ $dt->title }}
                    </div>
                </div>
                <div class="page_top-right">
                    <div class="page_top-text">
                        {{ $dt->description }}
                    </div>
                </div>
            </div>
    </div>
    <div class="container">
        <div class="support_wrapper">
            <?php $seats_data = explode('|||', $dt->sub_title);
                    for($i=0;$i<count($seats_data);$i++)
                    { ?>
                        <div class="support_item">
                            <div class="support_item-text mg">
                                {{ $seats_data[$i]; }}  
                            </div>
                        </div>
            <?php } ?>
        </div>
    </div>
    @endforeach
</section>

<section class="page_top" data-aos="fade-left">
    <div class="container">
        @foreach ($renowneds as $rws)
            <div class="support_title title">
                {{ $rws->title }}
            </div>
            <div class="support_text text">
                {{ $rws->description }}
            </div>


            <div class="support_wrapper">
                    <?php  $GLOBALLY = explode('|||',$rws->sub_title);
                            for ($i=0; $i<count($GLOBALLY); $i++) 
                            { ?>
                            {{-- <div class="support_item"> --}}
                                    <a href="#" class="support_item-title support_item ">
                                        {{ $GLOBALLY[$i] }}
                                    </a>
                            {{-- </div> --}}
                    <?php } ?>
                    <?php  $GLOBALLY_sub_description = explode('|||',$rws->sub_description);
                        for ($i=0; $i<count($GLOBALLY_sub_description); $i++) 
                        { ?>
                            {{-- <div class="support_item"> --}}
                                <div class="support_item-text support_item">
                                    {{$GLOBALLY_sub_description[$i]}}
                                </div>
                            {{-- </div> --}}
                   <?php }?>   
            </div>
        @endforeach
    </div>
</section>
<!-- about us information end -->

<!-- counter penal -->
<div id="projectFacts" class="sectionClass">
    <div class="fullWidth eight columns">
        <div class="projectFactsWrap ">
            @foreach ($counter as $cr)
                
            <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
                <!-- <i class="fa fa-briefcase"></i> -->
                <p class="number"><span id="number1">{{ $cr->clients }}</span>+</p>
                <span class="span"></span>
                <p>Happy clients</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="55" style="visibility: visible;">
                <!-- <i class="fa fa-smile-o"></i> -->
                <p class="number"><span id="number2">{{ $cr->projects }}</span>+</p>
                
                <span class="span"></span>
                <p>Projects done</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="359" style="visibility: visible;">
                <!-- <i class="fa fa-coffee"></i> -->
                <p class="number"><span id="number3">{{ $cr->employees }}</span>+</p>
                
                <span class="span"></span>
                <p>Employees</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="246" style="visibility: visible;">
                <!-- <i class="fa fa-camera"></i> -->
                <p class="number"><span id="number4">{{ $cr->branches }}</span>+</p>
                
                <span class="span"></span>
                <p>Branches</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end counter penal -->


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
