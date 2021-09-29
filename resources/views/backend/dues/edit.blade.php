@extends('backend.layouts.app')
@section('content')

    <section id="basic-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Aidat Düzenle</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form role="form" action="{{ route('admin.dues.update',$dues->id) }}" method="post"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card overflow-hidden">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label class="card-title control-label"
                                                               for="date">Üye Seçimi</label>

                                                        <select id="user" name="user" class="form-control" required>
                                                            @foreach ($users as $user)
                                                                <option
                                                                    value="{{ $user->id }}"
                                                                    @if ($dues->user_id == $user->id)
                                                                    selected
                                                                    @endif
                                                                >{{ $user->full_name_tr }}</option>

                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="card-title control-label" for="date">Tarih</label>
                                                        <input id="date" type="date" class="form-control" name="date"
                                                               value="{{ $dues->date }}" min="2020-01-01"
                                                               aria-required="true" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="card-title control-label" for="dues">Aidat Tutarı</label>
                                                        <input id="dues" type="number" step="0.01" class="form-control"
                                                               name="dues" value="{{ $dues->dues }}"
                                                               aria-required="true" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="card-title control-label"
                                                               for="total">Toplam Tutar</label>
                                                        <input id="total" type="number" step="0.01" class="form-control"
                                                               name="total" value="{{ $dues->total }}"
                                                               aria-required="true" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="card-title control-label" for="description">Açıklama</label>
                                                        <textarea class="form-control" id="description"
                                                                  name="description"
                                                                  rows="3">{{ $dues->description }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
                                    <a type="button" class="btn btn-warning"
                                       href="{{   route('admin.dues.index')   }}">{{ trans('backend.back') }}</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
