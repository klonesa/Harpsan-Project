@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Reklam Düzenle</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">


            <form role="form" action="{{ route('admin.advertisement.update',$advertisement->id) }}" method="post" enctype="multipart/form-data" >
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
<div class="row clealfix">
    <div class="col-sm-12">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.image') }}</h2>
            </div>
            <div class="body">
                <input type="file" class="form-control dropify" id="f_image" data-default-file="{{ URL::to('uploads/advertisement/',$advertisement->f_image) }}"
                    data-allowed-file-extensions="png jpg jpeg" name="f_image">
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="card overflow-hidden">
            <div class="card-content">
                <div class="card-body">
                   
                    <!-- Tab panes -->
                
                        <div class="tab-pane" id="messages-slider" role="tabpanel"
                            aria-labelledby="messages-tab-justified">
                            <h4 class="card-title">
                                {{ trans('backend.title') }}</h4>

                            <input type="text" class="form-control" name="title" value="{{   $advertisement->title }}"
                                aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.text') }}</h4>
                            <textarea type="text" class="form-control" name="text">{!! $advertisement->text !!}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clealfix">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.url') }}</h2>
                        </div>
                        <div class="body">
                            <input value="@if (old('url')){{ old('url') }}@else{{ $advertisement->url }}@endif" type="text"
                                autocomplete="off" name="url" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="header">
                            <h2>Konum</h2>
                        </div>
                        <div class="body">
                            <div class="multiselect_div">
                                <select id="single-selection" name="ad_order" class="form-control">
                                    <option @if($advertisement->ad_order == 0) selected @endif value="0" >Slider Altı</option>
                                    <option @if($advertisement->ad_order == 1) selected @endif value="1">Sol</option>
                                    <option @if($advertisement->ad_order == 2) selected @endif value="2">Sağ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="box-footer">
    <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
    <a type="button" class="btn btn-warning" href="{{   route('admin.advertisement.index')   }}">{{ trans('backend.back') }}</a>
</div>

            </form>
       </div>
    </div>
    </div>
    </div>
    </div>
    </section>

    @endsection
