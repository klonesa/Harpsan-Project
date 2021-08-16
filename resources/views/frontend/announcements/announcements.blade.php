@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title'))

@section('content')



<section class="uk-section uk-section-small ">
    <div class="uk-container">

        <div class="uk-flex uk-flex-middle uk-grid-small" uk-grid>
            <div class="uk-panel uk-width-1-3@m"><h2>Duyurular</h2>
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
        @foreach ($announcements as $announcement)  
                  <div>
                <div class="uk-card uk-card-default" >
                    <div class="uk-card-media-top" style="text-align:center;" >
                        <a href="{{route('frontend.announcement',$announcement->slug)}}"> <img src="{{asset('uploads/announcements/')}}/{{$announcement->f_image}}" alt="{{$announcement->title}}" style="max-height:200px;"></a>
                    </div>
                    <div class="uk-card-body">

                        <a href="{{route('frontend.announcement',$announcement->slug)}}"> <h3 class="uk-card-title">{{$announcement->title_tr}}</h3></a>  
                        <p  style="    text-align: justify;" class="mt-10">{!! Str::words($announcement->text_tr,30,'...')!!}</p>
                        <ul style="margin-left:10px;"> 
                            <li class="font-16 text-white font-weight-600">{{ date('d',strtotime($announcement->date)) }} {{ date('M',strtotime($announcement->date)) }}</li>
                            

                          </ul>
                          <a style="float:right;" href="{{route('frontend.announcement',$announcement->slug)}}" class="btn-read-more"> <button class="uk-button uk-button-default uk-button-small">{{ trans('frontend.read_more') }}</button></a>
                     
                    </div>
                    
                    
                </div>
             
            </div>
            @endforeach
        </div>
       
</div>
       
</section>



@endsection