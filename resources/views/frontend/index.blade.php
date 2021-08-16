@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('navs.general.home'))

@section('content')

<section id="home">
    <div class="container-fluid p-0">

        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
            <div class="rev_slider rev_slider_fullscreen" data-version="5.0">
                <ul>
                    @foreach ($sliders as $slider)
                    <!-- SLIDE 1 -->
                    <li data-index="rs-{{ $loop->index + 1 }}" data-transition="slidingoverlayhorizontal"
                        data-slotamount="default" data-easein="default" data-easeout="default"
                        data-masterspeed="default" data-thumb="{{asset('uploads/sliders/')}}/{{$slider->image}}"
                        data-rotate="0" data-saveperformance="off" data-title="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('uploads/sliders/')}}/{{$slider->image}}" alt="{{$slider->title}}"
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            class="rev-slidebg" data-bgparallax="10" data-no-retina>

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pl-20 pr-20"
                            id="rs-{{ $loop->index + 1 }}-layer-1" data-x="['middle']" data-hoffset="['0']"
                            data-y="['middle']" data-voffset="['-25']" data-fontsize="['35']" data-lineheight="['54']"
                            data-width="none" data-height="none" data-whitespace="nowrap"
                            data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 7; white-space: nowrap; font-weight:600;">{{$slider->title}}
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme text-white" id="rs-{{ $loop->index + 1 }}-layer-2"
                            data-x="['middle']" data-hoffset="['0']" data-y="['middle']" data-voffset="['35','35','40']"
                            data-fontsize="['16','18',24']" data-lineheight="['28']" data-width="none"
                            data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500"
                            data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                            {!! $slider->text !!}
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-resizeme" id="rs-{{ $loop->index + 1 }}-layer-3" data-x="['middle']"
                            data-hoffset="['0']" data-y="['middle']" data-voffset="['95','105','110']" data-width="none"
                            data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a
                                class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20"
                                href="{{ $slider->url }}">{{ trans('frontend.read_more')}}</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- end .rev_slider -->
        </div>
        <!--  Revolution slider scriopt -->
        <script>
        $(document).ready(function(e) {
            $(".rev_slider_fullscreen").revolution({
                sliderType: "standard",
                sliderLayout: "",
                dottedOverlay: "none",
                delay: 5000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "zeus",
                        enable: true,
                        hide_onmobile: false,
                        hide_under: 600,
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div></div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        }
                    },
                    bullets: {
                        enable: true,
                        hide_onmobile: false,
                        hide_under: 600,
                        style: "metis",
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 30,
                        space: 5,
                        tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span>'
                    }
                },
                responsiveLevels: [1240, 1024, 778],
                visibilityLevels: [1240, 1024, 778],
                gridwidth: [1170, 1024, 778, 480],
                gridheight: [600, 768, 960, 720],
                lazyType: "none",
                parallax: {
                    origo: "slidercenter",
                    speed: 1000,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                    type: "scroll"
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "0",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        });
        </script>
        <!-- Slider Revolution Ends -->
    </div>
</section>
<section id="tm-home-news" class="uk-section tm-filter-after">
    <div class="uk-container">

        <div class="uk-grid-large" uk-grid uk-height-match="target: > div > .uk-panel;">

            <div class="uk-width-1-3@m">
                <div class="tm-title-border-top span-block uk-panel uk-flex uk-flex-middle">
                    <h3 class="uk-h2"><span>Son</span> <span>Haberler</span></h3>
                </div>
            </div>

            <div class="uk-width-expand">
                <div class="uk-panel uk-flex uk-flex-middle">
                    <a class="uk-button tm-button-outline-primary tm-button-large uk-flex uk-flex-middle uk-flex-between"
                        href="{{URL('/news')}}">
                        TÜMÜNÜ GÖSTER
                        <span class="tm-button-icon" uk-icon="icon: arrow-right; ratio: 1.2;"></span>
                    </a>
                </div>
            </div>


        </div>

    </div>

    <div class="uk-container uk-container-large uk-container-expand-right uk-margin-medium-top">
        <div uk-slider="finite: true;" style="overflow: visible !important;">

            <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-3@s uk-grid" uk-height-match="target: > li > article;">

                    @foreach ($posts as $post)

                    <li>
                        <article class="uk-card uk-card-default uk-card-small uk-border-rounded">
                            <div class="uk-card-media-top">
                                <a href="{{route('frontend.new',$post->slug)}}" title="{{$post->title}}">
                                    <img src="{{asset('uploads/posts/')}}/{{ $post->f_image}}"
                                        style="width: 100px; height:80px" alt="{{$post->title}}" uk-img>
                                </a>
                            </div>
                            <div class="uk-card-body">
                                <h4>
                                    <a class="uk-link-text" href="haberler/anitkabir-ziyareti.html"
                                        title="{{$post->title}}">
                                        {{$post->title}}
                                    </a>
                                </h4>
                                <div class="uk-text-small">
                                    <p style="text-align: justify;" class="mt-10">{!! Str::words($post->text,20,'...')
                                        !!}</p>
                                </div>
                                <div class="uk-margin">
                                    <a href="{{route('frontend.new',$post->slug)}}" title="{{$post->title}}">Devamı
                                        <span uk-icon="icon: arrow-right; ratio: 1.2;"></span></a>
                                </div>
                            </div>
                        </article>
                    </li> @endforeach

                </ul>

                <a uk-icon="icon: arrow-left"
                    class="tm-circle tm-circle-white tm-circle-smaller uk-text-primary uk-position-center-left uk-position-small uk-box-shadow-large"
                    href="#" uk-slider-item="previous"></a>
                <a uk-icon="icon: arrow-right"
                    class="tm-circle tm-circle-white tm-circle-smaller uk-text-primary uk-position-center-right uk-position-small uk-box-shadow-large"
                    href="#" uk-slider-item="next"></a>
            </div>

        </div>
    </div>
</section>
<section id="tm-home-about" class="uk-section tm-background">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m" uk-grid uk-height-match="target: > div;">

            <div>

                <div class="uk-width-2-3@m">
                    <div class="tm-title-border-top span-block uk-panel uk-flex uk-flex-middle">
                        <h3 class="uk-h2"><span>{{ $about->about_title }} </h3>
                    </div>
                </div>

                <div class="uk-margin-medium uk-text-small">
                    <p>{!! $about->about_text !!}</p>
                </div>

                <div class="uk-margin">
                    <a class="uk-button uk-button-primary tm-button-large uk-flex uk-flex-middle uk-flex-between"
                        href="{{route('frontend.about')}}">
                        DETAYLAR
                        <span class="tm-button-icon" uk-icon="icon: arrow-right; ratio: 1.2;"></span>
                    </a>
                </div>

            </div>

            <div class="uk-width-expand uk-visible@s"></div>

            <div class="uk-width-2-5@m uk-flex uk-flex-middle">
                <div class="">
                    <img class="uk-position-relative"
                        src="{{asset('uploads/settings')}}/{{GeneralSiteSettings("site_logo")}}" style="width: 250px"
                        alt="{{GeneralSiteSettings("site_title")}}">
                </div>
            </div>

        </div>
    </div>
</section>

<section id="tm-home-news" class="uk-section tm-filter-after">
    <div class="uk-container">

        <div class="uk-grid-large" uk-grid uk-height-match="target: > div > .uk-panel;">

            <div class="uk-width-1-3@m">
                <div class="tm-title-border-top span-block uk-panel uk-flex uk-flex-middle">
                    <h3 class="uk-h2"><span>Duyurular</span></h3>
                </div>
            </div>

            <div class="uk-width-expand">
                <div class="uk-panel uk-flex uk-flex-middle">
                    <a class="uk-button tm-button-outline-primary tm-button-large uk-flex uk-flex-middle uk-flex-between"
                        href="{{URL('/announcements')}}">
                        TÜMÜNÜ GÖSTER
                        <span class="tm-button-icon" uk-icon="icon: arrow-right; ratio: 1.2;"></span>
                    </a>
                </div>
            </div>


        </div>

    </div>

    <div class="uk-container uk-container-large uk-container-expand-right uk-margin-medium-top">
        <div uk-slider="finite: true;" style="overflow: visible !important;">

            <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-3@s uk-grid" uk-height-match="target: > li > article;">

                    @foreach ($announcements->take(3) as $aaa)
                    <li>
                        <article class="uk-card uk-card-default uk-card-small uk-border-rounded">
                            <div class="uk-card-media-top">
                                <a href="{{route('frontend.announcements',$aaa->slug)}}" title="{{$aaa->title}}">
                                    <img src="{{asset('uploads/announcements/')}}/{{ $aaa->f_image}}"
                                        style="width: 100px; height:80px" alt="{{$post->title}}" uk-img>
                                </a>
                            </div>
                            <div class="uk-card-body">
                                <h4>
                                    <a class="uk-link-text" href="{{route('frontend.announcements',$aaa->slug)}}"
                                        title="{{$aaa->title}}">
                                        {{$aaa->title}}
                                    </a>
                                </h4>
                                <div class="uk-text-small">
                                    <p style="text-align: justify;" class="mt-10">{!! Str::words($post->text,10,'...')
                                        !!}</p>
                                </div>
                                <div class="uk-margin">
                                    <a href="{{route('frontend.announcements',$post->slug)}}"
                                        title="{{$post->title}}">Devamı <span
                                            uk-icon="icon: arrow-right; ratio: 1.2;"></span></a>
                                </div>
                            </div>
                        </article>
                    </li> 
                    
                    @endforeach

                </ul>

                <a uk-icon="icon: arrow-left"
                    class="tm-circle tm-circle-white tm-circle-smaller uk-text-primary uk-position-center-left uk-position-small uk-box-shadow-large"
                    href="#" uk-slider-item="previous"></a>
                <a uk-icon="icon: arrow-right"
                    class="tm-circle tm-circle-white tm-circle-smaller uk-text-primary uk-position-center-right uk-position-small uk-box-shadow-large"
                    href="#" uk-slider-item="next"></a>
            </div>

        </div>
    </div>
</section>

<section id="tm-home-events" class="uk-section tm-background">
    <div class="uk-container">

        <div class="tm-background-white uk-padding" style="padding-bottom: 10px;">
            <div class="uk-grid-large" uk-grid uk-height-match="target: > div > .uk-panel;">

                <div class="uk-width-1-3@m">
                    <div class="uk-panel uk-flex uk-flex-middle">
                        <h2 class="uk-text-bold">Etkinlikler</h2>
                    </div>
                </div>

                <div class="uk-width-1-3@m uk-visible@s uk-text-small">
                </div>

                <div class="uk-width-expand">
                    <div class="uk-panel uk-flex uk-flex-middle uk-flex-right">
                        <a class="uk-button tm-button-outline-primary tm-button-large uk-flex uk-flex-middle uk-flex-between"
                        href="{{route('frontend.events')}}">
                            TÜMÜNÜ GÖSTER
                            <span class="tm-button-icon" uk-icon="icon: arrow-right; ratio: 1.2;"></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="uk-container">
        <div class="tm-background-white uk-padding"> 
            
            <div class="uk-child-width-1-3@m" uk-grid uk-height-match="target: article > .tm-card-body > h3;">
            @foreach ($events->take(3) as $event)
                <article class="uk-card" style="opacity: .5;">
              
                    <div class="tm-card-header uk-flex uk-flex-between uk-flex-middle tm-padding-vertical">
                        <div>
                            <h5 class="uk-margin-remove uk-text-bold"> {{ date('d',strtotime($event->start_date)) }} {{ date('M',strtotime($event->start_date)) }}</h5>
                        </div>
                        <div>
                            <p class="uk-margin-remove uk-text-small"></p>
                        </div>
                    </div>
                    <div class="tm-card-body tm-padding-vertical-large uk-position-relative">
                        <span class="uk-label tm-label-muted uk-position-top-right">Etkinlik</span>
                        <h3 class="uk-text-bold uk-margin-remove-top">
                            <a class="uk-link-text" href="{{ route('frontend.event',$event->slug)}}"
                                >{{ $event->name}}</a>
                        </h3>
                        <div class="uk-margin uk-text-small">
                        {!! $event->text !!}
                        </div>
                        <ul class="uk-list uk-list-divider">
                                        <li>{{date('d/m/Y - H:i',strtotime($event->start_date)) }}
                                            - {{ date('d/m/Y - H:i',strtotime($event->end_date)) }}</li>
                                        <li> {{ $event->location }}
                                        </li>
                                    </ul>
                    </div>
                         
                </article>
        
                @endforeach
            </div>  
        </div>
    </div>
    
</section>


@endsection