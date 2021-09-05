@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('backend.teams') }}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">


                        <form role="form" action="{{ route('admin.shopping.update',$shopping->id) }}" method="post"
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
                                                data-default-file="{{ URL::to('uploads/shopping', $shopping->image) }}"
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
                                                    <div class="tab-pane active" id="home-unit" role="tabpanel"
                                                        aria-labelledby="home-tab-justified">

                                                        <h4 class="card-title">Ürün Adı</h4>

                                                        <input type="text" class="form-control" name="name"
                                                            aria-required="true"
                                                            value="{{ old('name', $shopping->name) }}">

                                                       
                                                            <br>
                                                                    <h4 class="card-title">Kategori</h4>
                                                                </div>
                                                                <div class="body">
                                                                    <div class="multiselect_div">
                                                                        <select id="single-selection" name="category"
                                                                            class="form-control">
                                                                            <option value="Temel Gıdalar">
                                                                                Temel Gıdalar</option>
                                                                            <option value="Kuru Yemiş">Kuru Yemiş</option>
                                                                            <option value="Kuru Gıdalar">Kuru Gıdalar</option>
                                                                            <option value="Sıvı Gıdalar">Sıvı Gıdalar</option>
                                                                            <option value="Baharat">Baharat </option>
                                                                            <option value="Diğerleri">Diğerleri</option>
                                                                        </select>
                                                                
                                                          
                                                        </div>
                                                        <h4 class="card-title"> Açıklama </h4>
                                                        <input type="text" class="form-control" name="description"
                                                            aria-required="true"
                                                            value="{{ old('description', $shopping->description) }}">


                                                        <h4 for="inputState">Birim </h4>
                                                        <select id="type" name="type" class="form-control">
                                                            <option value="">Seçiniz...</option>
                                                            <option name="choice1"
                                                                {{ ($shopping->type) == 'Kilogram' ? 'selected' : '' }}
                                                                value="Kilogram">Kilogram</option>
                                                            <option name="choice2"
                                                                {{ ($shopping->type) == 'Gram' ? 'selected' : '' }}
                                                                value="Gram">Gram</option>
                                                            <option name="choice3"
                                                                {{ ($shopping->type) == 'Adet' ? 'selected' : '' }}
                                                                value="Adet">Adet</option>
                                                            <option name="choice4"
                                                                {{ ($shopping->type) == 'Santimetre' ? 'selected' : '' }}
                                                                value="Santimetre">Santimetre</option>
                                                        </select>
                                                        <h4 class="card-title">
                                                            Fiyat</h4>

                                                        <input type="text" class="form-control" name="price"
                                                            aria-required="true"
                                                            value="{{ old('price', $shopping->price) }}">
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
                            href="{{   route('admin.shopping.index')   }}">{{ trans('backend.back') }}</a>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection