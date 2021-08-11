@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . 'Öneri & Şikayet')

@section('content')


<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5">
        <div class="container pt-10 pb-10">
            <!-- Section Content -->
            <div class="section-content pt-10">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-white">Anlaşmalı Firmalar</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <div class="container">
        <div class="row multi-row-clearfix">
            <div class="blog-posts">
                @foreach ($companies as $com )
                <div class="col-md-3">
                    <article class="post clearfix mb-30 bg-lighter">
                        <div class="entry-header">
                            <div class="post-thumb thumb" style="max-height:180px; text-align:center; background-color: white;">
                                <img src="{{ URL::to('uploads/company',$com->src)}}" width="auto" height="175" alt="{{$com->name}}" >
                            </div>
                        </div>
                        <div class="entry-content p-20 pr-10" style="min-height:250px; max-height:250px; background-color: white;">
                            <div class="entry-meta media mt-0 no-bg no-border">
                                <div class="media-body" >
                                    <div class="event-content  flip " style="text-align:center; background-color: white;">
                                        <h4 class="entry-title text-white text-uppercase  m-0 mt-5" ><a
                                                href="#">{{$com->name}}</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div style="height:1px; background-color:orange; margin-top:10px; margin-bottom:10px; "></div> 
                            <p><b>Adres:</b> {{$com->adress}}</p>
                            <span>{!!\Illuminate\Support\str::limit($com->detail,200)!!}</span>

                        </div>
            
                <div class="card-footer" style="bottom:0; text-align:center;background-color: white;">

               
                                <a href="{{route('frontend.companie',$com->slug)}}"><button type="button"
                                        class="btn btn-warning">Anlaşma Şartlarını Gör</button></a>
                                <div class="clearfix"></div>
                            
                </div>
                </article>
            </div>
            @endforeach
        </div>
        <div class="col-md-12">
            <nav style="text-align:center;">
            {{ $companies->links() }}
            </nav>
        </div>
    </div>
</div>
</div>
</div>
<!-- end main-content -->


@endsection