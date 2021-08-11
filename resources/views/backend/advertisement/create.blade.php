@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Reklamlar</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">


                        <form role="form" action="{{ route('admin.advertisement.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row clealfix">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>Resim Ekle</h2>
                                        </div>
                                        <div class="body">
                                            <input type="file" class="dropify" data-default-file=""
                                                data-allowed-file-extensions="png jpg jpeg" name="f_image" required>
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
                                                <div class="tab-pane" id="messages-unit" role="tabpanel"
                                                    aria-labelledby="messages-tab-justified">
                                                    <h4 class="card-title">
                                                        {{ trans('backend.title') }}</h4>

                                                    <input type="text" class="form-control" name="title"
                                                        aria-required="true">
                                                    <h4 class="card-title">
                                                        {{ trans('backend.text') }}</h4>
                                                    <textarea type="text" class="form-control"
                                                        name="text"> </textarea>
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

                                                        <input type="text" autocomplete="off" name="url"
                                                            class="form-control">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="header">
                                                        <h2>{{ trans('backend.ad_order') }}</h2>
                                                    </div>
                                                    <div class="body">
                                                        <div class="multiselect_div">
                                                            <select id="single-selection" name="ad_order"
                                                                class="multiselect multiselect-custom">
                                                                <option value="0">Slider Altı</option>
                                                                <option value="1">Sol</option>
                                                                <option value="2">Sağ</option>
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
                                <a type="button" class="btn btn-warning"
                                    href="{{   route('admin.advertisement.index')   }}">{{ trans('backend.back') }}</a>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection