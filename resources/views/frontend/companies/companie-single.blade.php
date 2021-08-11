@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title'))

@section('content')

<!-- Start main-content -->
<div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" >
        <div class="container pt-10 pb-10">
            <!-- Section Content -->
            <div class="section-content pt-10">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-white">Anlaşma Şartları</h3>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <section>
        <div class="container">
        <div class="main-content">
  
  <!-- Section: inner-header -->
  
  <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header" style=" height:auto; text-align:center;" >
                  <div  class="post-thumb thumb"  > <img src="{{ URL::to('uploads/company',$companie->src)}}" alt="" class=" center "  style="width:20%;"> </div>
                </div>
                <div class="entry-content">
                  <div class="entry-meta media no-bg no-border mt-15 pb-20">
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 "><a href="#">Detaylar</a></h4>
                        </div>
                    </div>
                  </div>
                  <p class="mb-15">{!!$companie->detail!!}</p>
              
                </div>
              </article>
         
            </div>
          </div>
        </div>
      </div>
    </section>
</div>


        </div>
    </section>
</div>
<!-- end main-content -->

@endsection
