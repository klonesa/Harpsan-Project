@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . 'Öneri & Şikayet')

@section('content')


<nav class="uk-navbar-container uk-margin" style="background-color:white; " uk-navbar="mode: click">
    <div class="uk-navbar-center">

        <ul class="uk-navbar-nav" style="text-color:white; text-align:center;">
            <li><a href="#mobilya">Mobilya</a></li>
            <li><a href="#konut">Konut</a></li>
            <li><a href="#araç">Araç</a></li>
        </ul>

    </div>
</nav>

<section class="uk-section uk-section-small">
    <div class="uk-container">


        <div class="uk-flex uk-flex-middle uk-grid-small " uk-grid>
            <div id="mobilya" class="uk-panel uk-width-1-3@m">
                <h4>Mobilya</h4>
                <div class="tm-title-border-top span-block uk-width-2-4@m">

                </div>
            </div>

            <div class="uk-width-expand">

            </div>
        </div>
        <div uk-slider>

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m">
                    @foreach ($companiesb as $comb )
                    <li>
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-media-top" style="text-align:center;">
                                    <a href="{{route('frontend.companie',$comb->slug)}}"></a> <img
                                        src="{{ URL::to('uploads/company',$comb->src)}}" style="max-height:200px;"
                                        alt=""></a>
                                </div>
                                <div class="uk-card-body">
                                    <a href="{{route('frontend.companie',$comb->slug)}}">
                                        <h3 class="uk-card-title">{{$comb->name}}</h3>
                                    </a>
                                    <p>{!!\Illuminate\Support\str::limit($comb->detail,200)!!}</p>
                                </div>
                            </div>

                        </div>
                    </li>
                    @endforeach
                </ul>

                <a style="background-color:black;" class="uk-position-center-left uk-position-small uk-hidden-hover"
                    href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a style="background-color:black;" class="uk-position-center-right uk-position-small uk-hidden-hover"
                    href="#" uk-slidenav-next uk-slider-item="next"></a>

            </div> </div>

            <br><br>
            <div class="uk-flex uk-flex-middle uk-grid-small " uk-grid>
                <div id="araç" class="uk-panel uk-width-1-3@m">
                    <h4>Araç</h4>
                    <div class="tm-title-border-top span-block uk-width-2-4@m">

                    </div>
                </div>

                <div class="uk-width-expand">

                </div>
            </div>


            <div uk-slider>

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m">
                        @foreach ($companiesb as $comb )
                        <li>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top" style="text-align:center;">
                                        <a href="{{route('frontend.companie',$comb->slug)}}"></a> <img
                                            src="{{ URL::to('uploads/company',$comb->src)}}" style="max-height:200px;"
                                            alt=""></a>
                                    </div>
                                    <div class="uk-card-body">
                                        <a href="{{route('frontend.companie',$comb->slug)}}">
                                            <h3 class="uk-card-title">{{$comb->name}}</h3>
                                        </a>
                                        <p>{!!\Illuminate\Support\str::limit($comb->detail,200)!!}</p>
                                    </div>
                                </div>

                            </div>
                        </li>
                        @endforeach
                    </ul>

                    <a style="background-color:black;" class="uk-position-center-left uk-position-small uk-hidden-hover"
                        href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a style="background-color:black;"
                        class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                        uk-slider-item="next"></a>

                </div>



                <br><br>
                <div class="uk-flex uk-flex-middle uk-grid-small " uk-grid>
                    <div id="konut" class="uk-panel uk-width-1-3@m">
                        <h4>Konut</h4>
                        <div class="tm-title-border-top span-block uk-width-2-4@m">

                        </div>
                    </div>

                    <div class="uk-width-expand">

                    </div>
                </div>
            </div>



            <div uk-slider>

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m">
                        @foreach ($companiesc as $comc )
                        <li>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top" style="text-align:center;">
                                        <a href="{{route('frontend.companie',$comc->slug)}}"></a> <img
                                            src="{{ URL::to('uploads/company',$comc->src)}}" style="max-height:200px;"
                                            alt=""></a>
                                    </div>
                                    <div class="uk-card-body">
                                        <a href="{{route('frontend.companie',$comc->slug)}}">
                                            <h3 class="uk-card-title">
                                                {!!\Illuminate\Support\str::limit($comc->name,50)!!}
                                            </h3>
                                        </a>

                                        <p>{!!\Illuminate\Support\str::limit($comc->detail,200)!!}</p>
                                    </div>
                                </div>

                            </div>
                        </li>
                        @endforeach

                    </ul>

                    <a style="background-color:black;" class="uk-position-center-left uk-position-small uk-hidden-hover"
                        href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a style="background-color:black;"
                        class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                        uk-slider-item="next"></a>

                </div>

                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

            </div>





            <a style="background-color:black; float:right;" href="#" uk-totop uk-scroll>Başa Dön</a>
        </div>

</section>



@endsection