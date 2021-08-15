@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('frontend.events'))

@section('content')
<!-- Start main-content -->
<div class="main-content">

<div class="uk-section">
        <div class="uk-container">
            <div uk-grid>
                <div class="uk-width-expand">@foreach($events as $event)
                                            <article class="uk-card uk-card-default uk-card-body uk-card-small uk-margin-medium-top uk-box-shadow-hover-xlarge">
                            <div class="uk-flex uk-flex-middle" uk-grid>
                                                                <div class="uk-width-1-5@m">
                                    <a href="{{ route('frontend.event',$event->slug) }}">
                                        <img src="{{  asset('uploads/events/')}}/{{ $event->image }}" alt=" {{ $event->name_tr }}" uk-img>
                                    </a>
                                </div>
                                                                <div class="uk-width-expand">
                                    <p class="uk-margin-remove uk-text-danger uk-text-small uk-text-bold">{{ date('M',strtotime($event->start_date)) }} {{ date('d',strtotime($event->start_date)) }}  {{ date('Y',strtotime($event->start_date)) }}</p>
                                    <h4 class="uk-margin-small">
                                        <a  class="uk-link-text uk-text-bold" href="{{ route('frontend.event',$event->slug) }}" title=" {{ $event->name_tr }}">
                                            {{ $event->name_tr }}
                                        </a>
                                    </h4>
                                    <div class="uk-flex uk-flex-middle uk-flex-between">
                                        <div>
                                            <p class="uk-margin-remove">{{ trans('frontend.location')." : ".$event->location }}</p>
                                            <div class="uk-margin">{!! $event->text_tr !!}</div>
                                        </div>
                                        <div class="uk-text-small uk-margin-medium-left uk-flex-none">
                                            <a href="{{ route('frontend.event',$event->slug) }}"> Detaylı Bilgi<span uk-icon="icon: arrow-right;"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>    
                        @endforeach        
                    <ul class="uk-pagination uk-flex-center uk-margin-large" uk-margin>
    <li class="uk-disabled">
        {{ $events->links() }}
    </li>
</ul>

                </div>
            </div>

        </div>
    </div>

  
	</div>
</section>




@endsection
