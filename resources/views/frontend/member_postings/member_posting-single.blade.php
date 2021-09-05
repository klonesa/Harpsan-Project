@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') )

@section('content')

<!-- Start main-content -->
<div class="main-content">


    <div class="uk-section">
        <div class="uk-container">

            <div uk-grid>
                <div class="uk-width-expand">
                    <article class="uk-article uk-card uk-card-default uk-border-rounded">

                        <div class="tm-event-media uk-card-media-top uk-grid-collapse" uk-grid>
                            <div class="uk-width-3-5@m">
                                <img src="{{  asset('uploads/member_posting/')}}/{{ $member_posting->image }}" alt="{{$member_posting->name}}"
                                    uk-img>
                            </div>
                            <div class="uk-width-expand">
                                <div class="uk-card uk-card-body">
                                    <div class="tm-event date">
                                        
                                    </div>
                                    <div class="tm-event-name">
                                        <h1 class="uk-h4 uk-text-bold uk-margin-small-bottom">{{$member_posting->name_tr}}</h1>
                                    </div>
 
                                    <div class="tm-event-register uk-margin-medium-top">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tm-event-body uk-card-body">
                            <div uk-grid>

                                <div class="uk-width-3-5@m">
                                    <div class="tm-event-details uk-panel">
                                        <h4 class="uk-text-bold">Etkinlik Detayı</h4>

                                        <div>
                                            <p class="MsoNormal">{!! $member_posting->text_tr !!}
                                            <p class="MsoNormal"></p>
                                            <p></p>

                                            <p class="MsoNormal"></p>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="uk-width-expand">
                                    <div class="tm-event-meta uk-panel">
                                       <b>Lokasyon: </b> 
                                        <p class="uk-margin-remove-top">{{$member_posting->location_tr}}</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </article>
                </div>
            </div>

        </div>
    </div>



</div>
</section>
</div>
<!-- end main-content -->

@endsection