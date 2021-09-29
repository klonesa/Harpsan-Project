@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('backend.events') }}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">

                <form method="post" class="validate" autocomplete="off" action="{{route('admin.events.update', $id)}}"
                    enctype="multipart/form-data">
                    {{ csrf_field()}}
                    {{ method_field('PATCH') }}
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">{{ trans('backend.image') }}</label>
                                            <input type="file" class="form-control dropify"   name="image"
                                                data-max-file-size="8M"
                                                data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"
                                        data-default-file="{{asset('uploads/events')}}/{{$event->image}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">{{ trans('backend.start_date') }}</label>
                                            <input type="dateTime-local" class="form-control"
                                                value="{{ Carbon\Carbon::parse($event->start_date)->format('Y-m-d\TH:i')}}" name="start_date"
                                                value="{{ old('start_date') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">{{ trans('backend.end_date') }}</label>
                                            <input type="dateTime-local" class="form-control" value="{{ Carbon\Carbon::parse($event->end_date)->format('Y-m-d\TH:i')}}" name="end_date"
                                                value="{{ old('end_date') }}" required>

                                        </div>
                                    </div>

                                </div>
                            </div>





<!-- Tab panes -->
<div class="tab-content pt-1">
    <div class="tab-pane active" id="home-event" role="tabpanel" aria-labelledby="home-tab-justified">
       
        <h4 class="card-title">
            {{ trans('backend.name') }}</h4>

        <input type="text" class="form-control" name="name_tr" value="{{   $event->name_tr }}" aria-required="true">
        <h4 class="card-title">
            {{ trans('backend.location') }}</h4>

        <input type="text" class="form-control" name="location_tr" value="{{ $event->location_tr }}"
            aria-required="true">


        <h4 class="card-title">
            {{ trans('backend.text') }}</h4>
        <textarea type="text" class="form-control" name="text_tr">{!! $event->text_tr !!}</textarea>
    </div>

<br>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
                                <a type="button" class="btn btn-warning"
                                    href="{{   route('admin.events.index')   }}">{{ trans('backend.back') }}</a>
                            </div>
                        </form>

  </div>
</div>
</div>
</div>
</div>
</section>

@endsection
