@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('backend.company') }}</h4>
                    @include('includes.partials.messages')
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form method="post" action="{{route('admin.company.store')}}" enctype="multipart/form-data"> @csrf
                          
                                <div class="form-group">
                                    <label for="inputEmail4">Firma Adı </label>
                                    <input name="name" type="text" class="form-control" id="inputEmail4" placeholder="Firma Adı">
                                </div>
                                <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="header">
                                                        <h2>Kategori</h2>
                                                    </div>
                                                    <div class="body">
                                                        <div class="multiselect_div">
                                                            <select id="single-selection" name="category"
                                                                class="multiselect multiselect-custom">
                                                                <option value="Mobilya-Beyaz Eşya">Mobilya-Beyaz Eşya</option>
                                                                <option value="Ayakkabı - Giyim">Ayakkabı - Giyim</option>
                                                                <option value="Yiyecek - İçecek">Yiyecek - İçecek</option>
                                                                <option value="Sağlık - Eğitim">Sağlık - Eğitim</option>
                                                                <option value="Otomotiv">Otomotiv</option>
                                                                <option value="Diğerleri">Diğerleri</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                        
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Addres</label>
                                    <input name="adress" type="text" class="form-control" id="inputAddress"
                                        placeholder="1234 Tuna Caddesi">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputAddress2">Konum</label>
                                    <input name="konum" type="text" class="form-control" id="inputAddress2"
                                        placeholder="Kayseri , İstanbul">
                                </div>
                            </div>
                            <div class="form-row">
                                
                                <div class="form-group col-md-6">

                    
                                        <label for="exampleFormControlTextarea1"> Detaylar :</label>
                                        <textarea name="detail" class="form-control" id="exampleFormControlTextarea1"
                                            rows="2"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                    <div class="card main-sectionx">
                    <label for="exampleFormControlTextarea1"> Logo</label>
                        <div class="body">
                            <input type="file" class="dropify"  data-allowed-file-extensions="png jpg jpeg"
                                name="src" >
                        </div>
                    </div>

                </div>
                                    <button type="submit" class="btn btn-primary">Ekle</button>
                        </form>
   

    </div>
    </div>
    </div>
    </div>
    </div>
</section>

@endsection