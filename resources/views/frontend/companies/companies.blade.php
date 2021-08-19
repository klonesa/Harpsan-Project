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
            <div id="mobilya" class="uk-panel uk-width-1-3@m"><h4>Mobilya</h4>
                <div class="tm-title-border-top span-block uk-width-2-4@m">
                    
                </div>
            </div>

            <div class="uk-width-expand">

            </div>
        </div>
        <div class="uk-child-width-1-3@m" uk-grid  >
        @foreach ($companiesa as $coma )
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top" style="text-align:center;" >
                        <a href="{{route('frontend.companie',$coma->slug)}}"></a> <img src="{{ URL::to('uploads/company',$coma->src)}}" style="max-height:200px;" alt=""></a>
                    </div>
                    <div class="uk-card-body">
                        <a href="{{route('frontend.companie',$coma->slug)}}"> <h3 class="uk-card-title">{{$coma->name}}</h3></a>  
                        <p >{!!\Illuminate\Support\str::limit($coma->detail,200)!!}</p>
                    </div>
                </div>
             
            </div>
            @endforeach
        </div>
        <br><br>
        <div class="uk-flex uk-flex-middle uk-grid-small " uk-grid>
            <div id="araç" class="uk-panel uk-width-1-3@m"><h4>Araç</h4>
                <div class="tm-title-border-top span-block uk-width-2-4@m">
                    
                </div>
            </div>

            <div class="uk-width-expand">

            </div>
        </div>
        <div class="uk-child-width-1-3@m" uk-grid  >
        @foreach ($companiesb as $comb )
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top" style="text-align:center;" >
                        <a href="{{route('frontend.companie',$comb->slug)}}"></a> <img src="{{ URL::to('uploads/company',$comb->src)}}" style="max-height:200px;" alt=""></a>
                    </div>
                    <div class="uk-card-body">
                        <a href="{{route('frontend.companie',$comb->slug)}}"> <h3 class="uk-card-title">{{$comb->name}}</h3></a>  
                        <p >{!!\Illuminate\Support\str::limit($comb->detail,200)!!}</p>
                    </div>
                </div>
             
            </div>
            @endforeach
        </div><br><br>
        <div class="uk-flex uk-flex-middle uk-grid-small " uk-grid>
            <div id="konut" class="uk-panel uk-width-1-3@m"><h4>Konut</h4>
                <div class="tm-title-border-top span-block uk-width-2-4@m">
                    
                </div>
            </div>

            <div class="uk-width-expand">

            </div>
        </div>
        <div class="uk-child-width-1-3@m" uk-grid  >
        @foreach ($companiesc as $comc )
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top" style="text-align:center;" >
                        <a href="{{route('frontend.companie',$comc->slug)}}"></a> <img src="{{ URL::to('uploads/company',$comc->src)}}" style="max-height:200px;" alt=""></a>
                    </div>
                    <div class="uk-card-body">
                        <a href="{{route('frontend.companie',$comc->slug)}}"> <h3 class="uk-card-title">{{$comc->name}}</h3></a>  
                        <p >{!!\Illuminate\Support\str::limit($comc->detail,200)!!}</p>
                    </div>
                </div>
             
            </div>
            @endforeach
        </div>
        <a  style="background-color:black; float:right;" href="#" uk-totop uk-scroll>Başa Dön</a>
</div>

</section>



@endsection