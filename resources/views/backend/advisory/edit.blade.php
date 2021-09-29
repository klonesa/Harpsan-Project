@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danışma ve İstişare Kurulu</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">


                        <form role="form" action="{{ route('admin.advisory.update',$advisory->id) }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="row clealfix">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>{{ trans('backend.image') }}</h2>
                                        </div>
                                        <div class="body">
                                            <input type="file" class="form-control dropify" id="image"
                                                data-default-file="{{ URL::to('uploads/advisory', $advisory->image) }}"
                                                data-allowed-file-extensions="png jpg jpeg" name="image">
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
                                                <div class="tab-content pt-1">
                                                    <div class="tab-pane active" id="home-team" role="tabpanel"
                                                        aria-labelledby="home-tab-justified">
                                                       
                                                        <h4 class="card-title">
                                                            {{ trans('backend.name') }}</h4>

                                                        <input type="text" class="form-control" name="name_tr"
                                                            value="{{   $advisory->name_tr }}" aria-required="true">
                                                            <h4 class="card-title">
                                                                                {{ trans('backend.position') }}</h4>

                                                                            <input type="text" class="form-control" name="position_tr" value="{{ $advisory->position_tr }}" aria-required="true">


                                                        <h4 class="card-title">
                                                            {{ trans('backend.text') }}</h4>
                                                        <textarea type="text" class="form-control"
                                                            name="text_tr">{!! $advisory->text_tr !!}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.phone') }}</h2>
            </div>
            <div class="body">

                <input type="text" autocomplete="off" name="phone"  value="{{ $advisory->phone }}" class="form-control">

            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.email') }}</h2>
            </div>
            <div class="body">

                <input type="text" autocomplete="off" name="e_mail"  value="{{ $advisory->e_mail }}" class="form-control">

            </div>
        </div>
    </div>

</div>

<div class="row clealfix">
    <div class="col-sm-6">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.twitter') }}</h2>
            </div>
            <div class="body">

                <input type="text" autocomplete="off" name="twitter"  value="{{ $advisory->twitter }}" class="form-control">

            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.facebook') }}</h2>
            </div>
            <div class="body">

                <input type="text" autocomplete="off" name="facebook" value="{{ $advisory->facebook }}" class="form-control">

            </div>
        </div>
    </div>


</div>


<div class="row clealfix">
    <div class="col-sm-6">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.instagram') }}</h2>
            </div>
            <div class="body">

                <input type="text" autocomplete="off" name="instagram" value="{{ $advisory->instagram }}"  class="form-control">

            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.linkedin') }}</h2>
            </div>
            <div class="body">

                <input type="text" autocomplete="off" name="linkedin"  value="{{ $advisory->linkedin }}" class="form-control">

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
                                    href="{{   route('admin.advisory.index')   }}">{{ trans('backend.back') }}</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
