@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . 'Öneri & Şikayet')

@section('content')



<section class="uk-section uk-section-small ">
    <div class="uk-container">

        <div class="uk-flex uk-flex-middle uk-grid-small" uk-grid>
            <div class="uk-panel uk-width-1-3@m"><h2>Anlaşmalı Firmalar</h2>
                <div class="tm-title-border-top span-block uk-width-2-4@m">
                    
                </div>
            </div>

            <div class="uk-width-expand">

            </div>
        </div>
    </div>
</section>

<section class="uk-section uk-section-small">
    <div class="uk-container">
        

        <div class="uk-child-width-1-3@m" uk-grid  >
        @foreach ($companies as $com )
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top" style="text-align:center;" >
                        <img src="{{ URL::to('uploads/company',$com->src)}}" style="max-height:200px; min-height 200px;" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">{{$com->name}}</h3>
                        <p >{!!\Illuminate\Support\str::limit($com->detail,200)!!}</p>
                    </div>
                </div>
             
            </div>
            @endforeach
        </div>
       
</div>
       
</section>



@endsection