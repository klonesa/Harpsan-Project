@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . 'Öneri & Şikayet')

@section('content')


<nav class="uk-navbar-container uk-margin" style="background-color:white; " uk-navbar="mode: click">
    <div class="uk-navbar-center">

        <ul class="uk-navbar-nav" style="text-color:white; text-align:center;">
        <p uk-margin>
    <button class="uk-button uk-button-primary uk-button-small"><li><a style="color:white;" href="#mobilya">Mobilya - Beyaz Eşya</a></li></button>
    <button class="uk-button uk-button-primary uk-button-small"><li><a style="color:white;" href="#giyim">Ayakkabı - Giyim </a></li></button>
    <button class="uk-button uk-button-primary uk-button-small"><li><a style="color:white;" href="#icecek">Yiyecek - İçecek</a></li></button>
    <button class="uk-button uk-button-primary uk-button-small"> <li><a style="color:white;" href="#saglik">Sağlık - Eğitim</a></li></button>
    <button class="uk-button uk-button-primary uk-button-small">  <li><a style="color:white;" href="#otomotiv">Otomotiv</a></li></button>
    <button class="uk-button uk-button-primary uk-button-small"><li><a style="color:white;" href="#digerleri">Diğerleri</a></li></button>
</p>
            
            
            
           
          
            

        </ul>

    </div>
</nav>

<section class="uk-section uk-section-small">
    <div class="uk-container">


        <div class="uk-flex uk-flex-middle uk-grid-small " uk-grid>
            <div id="mobilya" class="uk-panel uk-width-1-3@m">
                <h4>Mobilya - Beyaz Eşya</h4>
                <div class="tm-title-border-top span-block uk-width-2-4@m">

                </div>
            </div>

            <div class="uk-width-expand">

            </div>
        </div>
        <div uk-slider>

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m">
                    @foreach ($companiesa as $coma )
                    <li>
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-media-top" style="text-align:center;">
                                    <a href="{{route('frontend.companie',$coma->slug)}}"></a> <img
                                        src="{{ URL::to('uploads/company',$coma->src)}}" style="max-height:200px;"
                                        alt=""></a>
                                </div>
                                <div class="uk-card-body">
                                    <a href="{{route('frontend.companie',$coma->slug)}}">
                                        <h3 class="uk-card-title">{{$coma->name}}</h3>
                                    </a>
                                    <p>{!!\Illuminate\Support\str::limit($coma->detail,200)!!}</p>
                                    <a href="{{route('frontend.companie',$coma->slug)}}"><button class="uk-button uk-button-danger">Detaylar</button></a>
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

            </div>
        </div>
    </div>

    <br><br> <div class="uk-container">


<div class="uk-flex uk-flex-middle uk-grid-small " uk-grid>
    <div id="giyim" class="uk-panel uk-width-1-3@m">
        <h4>Ayakkabı - Giyim</h4>
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
                            <a href="{{route('frontend.companie',$comb->slug)}}"><button class="uk-button uk-button-danger">Detaylar</button></a>

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

    </div>
</div>
</div>

<br><br> <div class="uk-container">


<div class="uk-flex uk-flex-middle uk-grid-small " uk-grid>
    <div id="icecek" class="uk-panel uk-width-1-3@m">
        <h4>Yiyecek - İçecek</h4>
        <div class="tm-title-border-top span-block uk-width-2-4@m">

        </div>
    </div>

    <div class="uk-width-expand">

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
                                <h3 class="uk-card-title">{{$comc->name}}</h3>
                            </a>
                            <p>{!!\Illuminate\Support\str::limit($comc->detail,200)!!}</p>
                            <a href="{{route('frontend.companie',$comc->slug)}}"><button class="uk-button uk-button-danger">Detaylar</button></a>

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

    </div>
</div>
</div>

<br><br> <div class="uk-container">


<div class="uk-flex uk-flex-middle uk-grid-small " uk-grid>
    <div id="saglik" class="uk-panel uk-width-1-3@m">
        <h4>Sağlık Eğitim</h4>
        <div class="tm-title-border-top span-block uk-width-2-4@m">

        </div>
    </div>

    <div class="uk-width-expand">

    </div>
</div>
<div uk-slider>

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m">
            @foreach ($companiesd as $comd )
            <li>
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top" style="text-align:center;">
                            <a href="{{route('frontend.companie',$comd->slug)}}"></a> <img
                                src="{{ URL::to('uploads/company',$comd->src)}}" style="max-height:200px;"
                                alt=""></a>
                        </div>
                        <div class="uk-card-body">
                            <a href="{{route('frontend.companie',$comd->slug)}}">
                                <h3 class="uk-card-title">{{$comd->name}}</h3>
                            </a>
                            <p>{!!\Illuminate\Support\str::limit($comd->detail,200)!!}</p>
                            <a href="{{route('frontend.companie',$comd->slug)}}"><button class="uk-button uk-button-danger">Detaylar</button></a>

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

    </div>
</div>
</div>

<br><br> <div class="uk-container">


        <div class="uk-flex uk-flex-middle uk-grid-small " uk-grid>
            <div id="otomotiv" class="uk-panel uk-width-1-3@m">
                <h4>Otomotiv</h4>
                <div class="tm-title-border-top span-block uk-width-2-4@m">

                </div>
            </div>

            <div class="uk-width-expand">

            </div>
        </div>
        <div uk-slider>

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m">
                    @foreach ($companiese as $come )
                    <li>
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-media-top" style="text-align:center;">
                                    <a href="{{route('frontend.companie',$come->slug)}}"></a> <img
                                        src="{{ URL::to('uploads/company',$come->src)}}" style="max-height:200px;"
                                        alt=""></a>
                                </div>
                                <div class="uk-card-body">
                                    <a href="{{route('frontend.companie',$come->slug)}}">
                                        <h3 class="uk-card-title">{{$come->name}}</h3>
                                    </a>
                                    <p>{!!\Illuminate\Support\str::limit($come->detail,200)!!}</p>
                                    <a href="{{route('frontend.companie',$come->slug)}}"><button class="uk-button uk-button-danger">Detaylar</button></a>

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

            </div>
        </div>
    </div>

    <br><br> <div class="uk-container">


        <div class="uk-flex uk-flex-middle uk-grid-small " uk-grid>
            <div id="digerleri" class="uk-panel uk-width-1-3@m">
                <h4>Diğerleri</h4>
                <div class="tm-title-border-top span-block uk-width-2-4@m">

                </div>
            </div>

            <div class="uk-width-expand">

            </div>
        </div>
        <div uk-slider>

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m">
                    @foreach ($companiesf as $comf )
                    <li>
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-media-top" style="text-align:center;">
                                    <a href="{{route('frontend.companie',$comf->slug)}}"></a> <img
                                        src="{{ URL::to('uploads/company',$comf->src)}}" style="max-height:200px;"
                                        alt=""></a>
                                </div>
                                <div class="uk-card-body">
                                    <a href="{{route('frontend.companie',$comf->slug)}}">
                                        <h3 class="uk-card-title">{{$comf->name}}</h3>
                                    </a>
                                    <p>{!!\Illuminate\Support\str::limit($comf->detail,200)!!}</p>
                                    <a href="{{route('frontend.companie',$comf->slug)}}"><button class="uk-button uk-button-danger">Detaylar</button></a>

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

            </div>
        </div>
    </div>

    <br><br>
    



    <a style="background-color:black; float:right;" href="#" uk-totop uk-scroll>Başa Dön</a>
    </div>

</section>



@endsection 