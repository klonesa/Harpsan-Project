@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') )

@section('content')
<!-- Start main-content -->
<div class="main-content">

    <div class="uk-section">
        <div class="uk-container">
            <div uk-grid>
                <div class="uk-width-expand">@foreach($member_postings as $post)
                    <article
                        class="uk-card uk-card-default uk-card-body uk-card-small uk-margin-medium-top uk-box-shadow-hover-xlarge">
                        <div class="uk-flex uk-flex-middle" uk-grid>
                            <div class="uk-width-1-5@m">
                                <a href="{{ route('frontend.member_posting',$post->slug) }}">
                                    <img src="{{  asset('uploads/member_postings/')}}/{{ $post->image }}"
                                        alt=" {{ $post->name_tr }}" uk-img>
                                </a>
                            </div>
                            <div class="uk-width-expand">
                                <h4 class="uk-margin-small">
                                    <a class="uk-link-text uk-text-bold"
                                       href="{{ route('frontend.member_posting',$post->slug) }}" 
                                        title=" {{ $post->name_tr }}">
                                        {{ $post->name_tr }}
                                    </a>
                                </h4>
                                <div class="uk-flex uk-flex-middle uk-flex-between">
                                    <div>
                                        <p class="uk-margin-remove">
                                       <b>Konum</b>     {{$post->location_tr }}</p>
<b>Açıklama</b> <br>
                                        <div class="uk-margin">{!! $post->text_tr !!}</div>
                                    </div>
                                    <div class="uk-text-small uk-margin-medium-left uk-flex-none">
                                        <a href="{{ route('frontend.member_posting',$post->slug) }}"> Detaylı Bilgi<span
                                                uk-icon="icon: arrow-right;"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                    <ul class="uk-pagination uk-flex-center uk-margin-large" uk-margin>
                        <li >                    {{ $member_postings->links() }}

                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </div>


</div>
</section>




@endsection