@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title'))

@section('content')

<div class="uk-section">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-expand">
                <article class="uk-article uk-card uk-card-default uk-border-rounded">
                    <div class="uk-card-body">
                        <h1 class="uk-h3 uk-link-text uk-text-center">{{ $announcement->title_tr}}</h1>
                        <div id="exportContent" class="uk-margin">
                            <div class="uk-margin uk-text-center">
                                <img src="{{asset('uploads/announcements/')}}/{{ $announcement->f_image}}"
                                    alt="{{ $announcement->title}}" style="max-width:40%">
                            </div>
                            <p>{!! $announcement->text_tr !!}</p>



                        </div>


                    </div>
                </article>
            </div>
        </div>
    </div>
</div>


@endsection