@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('frontend.members'))

@section('content')
<!-- Start main-content -->
<div class="main-content">

<section class="inner-header divider layer-overlay overlay-dark bg-silver-light">
        <div class="container pt-20 pb-30">
            <!-- Section Content -->
            <div class="section-content text-center">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
 
<br>

                               <h2>                                Harp-San Market Ürünleri
                            </h2>
                                </div>




                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="inner-header divider">
        <div class="col-md-2 col-sm-6">

        </div>
        <div class="col-md-8 col-sm-6">
            <article class="post  mb-30">
                <div class="entry-header">
                </div>
                <div class="entry-content p-20 pr-10">
                    <div class="entry-meta media mt-0 no-bg no-border">
                        <div class="media-body pl-15">
                            <div class="event-content   flip">
                                <div class="row">
                                   
                                        <div class="col-md-4">                                        <img src="{{asset('uploads/markets/1.jpeg')}}" style="width: 250px; height: 250px" alt="">
                                        </div>
                                        <div class="col-md-4">      <img src="{{asset('uploads/markets/2.jpeg')}}"  style="width: 250px; height: 250px" alt=""> </div>
                                        
                                            <div class="col-md-4">     <img src="{{asset('uploads/markets/3.jpeg')}}"   style="width: 250px; height: 250px"alt=""> </div>
                                        
                                                <div class="col-md-4">      <img src="{{asset('uploads/markets/4.jpeg')}}"  style="width: 250px; height: 250px" alt=""> </div>
                                        
                                                    <div class="col-md-4">     <img src="{{asset('uploads/markets/5.jpeg')}}"  style="width: 250px; height: 250px" alt=""> </div>
                                        
                                                        <div class="col-md-4">     <img src="{{asset('uploads/markets/6.jpeg')}}"   style="width: 250px; height: 250px"alt=""> </div>
                                        
                                                            <div class="col-md-4">     <img src="{{asset('uploads/markets/7.jpeg')}}"  style="width: 250px; height: 250px" alt=""> </div>
                                        
                                                                <div class="col-md-4">   <img src="{{asset('uploads/markets/8.jpeg')}}"  style="width: 250px; height: 250px" alt=""> </div>
                                        
                                   
                                </div>
                               

                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-md-2 col-sm-6">

        </div>
    </section>



     



</div>
<!-- end main-content -->

@endsection
