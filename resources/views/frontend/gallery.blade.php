@extends('frontend.layouts.app')
@section('title', GeneralSiteSettings('site_title') . ' | ' . trans('backend.gallery'))
@section('content')


<section id="tm-home-news" class="uk-section tm-filter-after">
    <div class="uk-container">

        <div class="uk-grid-large" uk-grid uk-height-match="target: > div > .uk-panel;">
        <h1 class="uk-heading-bullet">Medya Galerisi</h1>
            <div class="uk-width-1-1@m">
            @foreach ($galleries as $gallery)
            <div class="uk-h3">{{ $gallery->title}}</div>

                <div class="tm-title-border-top span-block uk-panel uk-flex uk-flex-middle">
                <div id="grid" class="gallery-isotope grid-3 gutter clearfix">
                    <!-- Portfolio Item Start -->
                    

                    <!-- Portfolio Item Start -->
               
                    <div class="uk-child-width-1-4@m" uk-grid uk-lightbox="animation: scale">
                        @foreach ($gallery->gallery_images->take(4) as $image)
                        <div>
                            <a class="uk-inline" href="{{asset('uploads/galleries/')}}/{{ $image->gallery_image_path}}"
                                data-caption="Caption 3">
                                <img src="{{asset('uploads/galleries/')}}/{{ $image->gallery_image_path}}"
                                    alt="{{ $gallery->title}}">
                            </a>
                        </div>
                        @endforeach
                        </ul>
                    </div>
                </div>

               
            </div>
            <!-- Portfolio Item End -->





            <nav>
                <ul class="pagination theme-colored">
                    {{ $galleries->links() }}
                </ul>
            </nav>


          

        </div>
        <!-- End Portfolio Gallery Grid -->

    </div>
    @endforeach
    </div>
    </div>
    </div>
</section>


@endsection