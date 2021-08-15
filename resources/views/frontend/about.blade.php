@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . trans('frontend.about'))

@section('content')
<!-- Section: inner-header -->
<section class="inner-header divider parallax layer-overlay overlay-dark-5">


    <div class="uk-section ">
        <div class="uk-container">
            <div class="uk-grid-large" uk-grid>
                <div class="uk-width-1-2@m ">
                    <div class="uk-panel">
                        <div class="tm-title-border-top span-block uk-width-2-3@m">
                            <h2>
                            {{ $about->about_title}}
                            </h2>
                        </div>
                        <div class="uk-margin-medium">
                            <p>{!! $about->about_text !!}</p>

                         
                        </div>
                    </div>
                </div>

                <div class="uk-width-expand uk-visible@s"></div>

                <div class="uk-width-2-5@m">

                    <div class="" uk-slideshow="animation: scale; ratio:5:4 ">

                        <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

                            <ul class="uk-slideshow-items">
                                <li>
                                    <img src="{{ URL::to('uploads/about',$about->about_image)}}" alt=""  uk-img
                                        title="" style="    height: 300px;
    width: 300px;" >
                                </li>
                            </ul>

                            <div class="tm-slidenav uk-position-bottom-right uk-position-small">
                                <a class="tm-slidenav-left" style="color: #666;" href="#" uk-slidenav-previous
                                    uk-slideshow-item="previous"></a>
                                <a class="tm-slidenav-right" style="color: #666;" href="#" uk-slidenav-next
                                    uk-slideshow-item="next"></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div id="misyon" class="uk-section ">
        <div class="uk-container">
            <div uk-grid>
                <div class="uk-width-1-2@m ">
                    <div class="uk-panel">
                        <div class="tm-title-border-top span-block uk-width-2-3@m">
                            <h2>
                                <span>{{ $about->mission_title}}</span>
                            </h2>

                        </div>

                        <div class="uk-margin-medium">
                            <p>{!! $about->mission_text !!}</p>
                        </div>
                    </div>
                </div>


                <div class="uk-width-2-5@m">
                </div>


            </div>

        </div>
    </div>
    <div id="vizyon" class="uk-section ">
        <div class="uk-container">
            <div uk-grid>
                <div class="uk-width-1-2@m ">
                    <div class="uk-panel">
                        <div class="tm-title-border-top span-block uk-width-2-3@m">
                            <h2>
                                <span>Vizyon</span>
                            </h2>

                        </div>

                        <div class="uk-margin-medium">
                            <p>{!! $about->vision_text !!}</p>
                        </div>
                    </div>
                </div>

                <div class="uk-width-expand uk-visible@s"></div>

                <div class="uk-width-2-5@m">
                </div>


            </div>

        </div>
    </div>


  


            @endsection