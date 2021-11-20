@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('backend.about_page_settings') }}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">


                            <form role="form" action="{{ route('admin.about.update') }}" method="post"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="header">
                                                <h2>{{ trans('backend.about_image') }}</h2>
                                            </div>
                                            <div class="body">

                                                <input type="file" class="dropify"
                                                    data-default-file="{{ URL::to('uploads/about', $about->about_image) }}"
                                                    data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"
                                                    name="about_image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="header">
                                                <h2>{{ trans('backend.counter') }}{{ trans('backend.image') }}</h2>
                                            </div>
                                            <div class="body">

                                                <input type="file" class="dropify"
                                                    data-default-file="{{ URL::to('uploads/about', $about->counter_image) }}"
                                                    data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"
                                                    name="counter_image">
                                            </div>
                                        </div>
                                    </div>
                                </div>


<div class="row">
    <div class="col-sm-12">
        <div class="card overflow-hidden">
            <div class="card-header">
                <h4 class="card-title">{{ trans('backend.url') }}</h4>
            </div>
<input type="text" class="form-control" name="url" value="{{   $about->url }}"
    aria-required="true">


            </div>
            </div>
            </div>




                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card overflow-hidden">
                                            <div class="card-header">
                                                <h4 class="card-title">{{ trans('backend.about_title') }}</h4>
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                                   
                                                    <!-- Tab panes -->
                                                    <div class="tab-content pt-1">
                                                        <div class="tab-pane active" id="home-just" role="tabpanel"
                                                            aria-labelledby="home-tab-justified">
                                                            <input type="text" class="form-control"
                                                                name="about_title_tr"
                                                                value="{{   $about->about_title_tr }}" aria-required="true"><br>
                                                            <h4 class="card-title">{{ trans('backend.about_text') }} </h4>
                                                            <textarea type="text" class="form-control"
                                                                name="about_text_tr">{!! $about->about_text_tr !!}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<div class="row">
    <div class="col-sm-12">
        <div class="card overflow-hidden">
            <div class="card-header">
                <h4 class="card-title">{{ trans('backend.mission_title') }}</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                   
                    <!-- Tab panes -->
                    <div class="tab-content pt-1">
                        <div class="tab-pane active" id="home-mission" role="tabpanel"
                            aria-labelledby="home-tab-mission">
                        
                            <input type="text"
                                class="form-control" name="mission_title_tr" value="{{   $about->mission_title_tr }}"
                                aria-required="true">
                            <h4 class="card-title"><br>
                                {{ trans('backend.mission_text') }}</h4>
                            <textarea type="text" class="form-control"
                                name="mission_text_tr">{!! $about->mission_text_tr !!}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card overflow-hidden">
            <div class="card-header">
                <h4 class="card-title">{{ trans('backend.vision_title') }}</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                   
                    <!-- Tab panes -->
                    <div class="tab-content pt-1">
                        <div class="tab-pane active" id="home-vision" role="tabpanel"
                            aria-labelledby="home-tab-justified">
                        
   <input type="text" class="form-control" name="vision_title_tr" value="{{   $about->vision_title_tr }}"
                                aria-required="true">
                            <h4 class="card-title"><br>
                                {{ trans('backend.vision_text') }}</h4>
                            <textarea type="text" class="form-control"
                                name="vision_text_tr">{!! $about->vision_text_tr !!}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <div class="row">
    <div class="col-sm-12">
        <div class="card overflow-hidden">
            <div class="card-header">
                <h4 class="card-title">{{ trans('backend.objectives_title') }}</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <!-- Tab panes -->
                    <div class="tab-content pt-1">
                        <div class="tab-pane active" id="home-objectives" role="tabpanel"
                            aria-labelledby="home-tab-justified">
                             <input type="text" class="form-control" name="objectives_title_tr"
                                value="{{   $about->objectives_title_tr }}" aria-required="true">
                            <h4 class="card-title"><br>
                                {{ trans('backend.objectives_text') }}</h4>
                            <textarea type="text" class="form-control"
                                name="objectives_text_tr">{!! $about->objectives_text_tr !!}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 

 




<div class="row">
    <div class="col-sm-12">
        <div class="card overflow-hidden">

            <div class="card-content">
                <div class="card-body">

    <button type="submit" class="btn btn-primary btn-round">{{ trans('backend.save') }}</button>
    <a type="button" class="btn btn-warning" href="{{   route('admin.dashboard')   }}">{{ trans('backend.back') }}</a>


                </div>
            </div>
        </div>
    </div>
</div>




                            </form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

@endsection
