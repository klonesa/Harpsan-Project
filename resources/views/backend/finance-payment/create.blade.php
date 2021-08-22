@extends('backend.layouts.app')
@section('content')


    <section id="basic-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ödeme Ekle</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">


                            <form role="form" action="{{ route('admin.financePayment.store') }}" method="post"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card overflow-hidden">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label class="card-title control-label"
                                                               for="user">Kullanıcı</label>
                                                        <select id="user" name="user" class="form-control" required>
                                                            @foreach ($users as $user)
                                                                <option
                                                                    value="{{ $user->id }}"> {{ $user->full_name_tr }} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="card-title control-label" for="name">Adı</label>
                                                        <input id="name" type="text" class="form-control" name="name"
                                                               aria-required="true" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="card-title control-label" for="amount">Çekilecek
                                                            Miktar</label>
                                                        <div class="select-basic">
                                                            <select class="form-control" name="amount" id="amount"
                                                                    required>
                                                                <option value="0">Çekilecek Miktar Seçiniz.</option>
                                                                <option value="10000">10000</option>
                                                                <option value="20000">20000</option>
                                                                <option value="30000">30000</option>
                                                                <option value="40000">40000</option>
                                                                <option value="50000">50000</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="card-title control-label" for="amount">Ödeme
                                                            Öncesi Taksit Miktarı</label>
                                                        <div class="select-basic">
                                                            <select class="form-control" name="first_payment_amount"
                                                                    id="first_payment_amount" required>
                                                                <option value="0">Taksit Miktarı Seçiniz.</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="card-title control-label" for="amount">Paranın
                                                            Alınacağı Ay</label>
                                                        <input id="get_month" name="get_month"
                                                               step="0.01"
                                                               type="number" class="form-control" aria-required="true"
                                                               required readonly>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="card-title control-label" for="amount">Üyenin
                                                            Ödeyeceği Miktar</label>
                                                        <input id="amount_payable" name="amount_payable"
                                                               step="0.01"
                                                               type="number" class="form-control" aria-required="true"
                                                               required readonly>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="card-title control-label" for="amount">Kalan Ödeme
                                                            Miktarı</label>
                                                        <input id="remaining_amount" name="remaining_amount"
                                                               step="0.01"
                                                               type="number" class="form-control" aria-required="true"
                                                               required readonly>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="card-title control-label" for="amount">Ödeme
                                                            Sonrası Taksit Miktarı</label>
                                                        <input id="last_payment_amount" name="last_payment_amount"
                                                               step="0.01"
                                                               type="number" class="form-control" aria-required="true"
                                                               required readonly>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="card-title control-label" for="amount">Taksit
                                                            Sayısı</label>
                                                        <input id="number_of_payments" name="number_of_payments"
                                                               step="0.01"
                                                               type="number" class="form-control" aria-required="true"
                                                               required readonly>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="card-title control-label" for="name">Katılım
                                                            Masrafı</label>
                                                        <input id="participation_fee" name="participation_fee"
                                                               step="0.01"
                                                               type="number" class="form-control" aria-required="true"
                                                               required>
                                                    </div>

                                                    {{--<div class="form-group">
                                                        <label class="card-title control-label"
                                                               for="name">Depozito</label>
                                                        <input id="deposit" type="text" name="deposit" step="0.01"
                                                               class="form-control"
                                                               aria-required="true" required>
                                                    </div>--}}

                                                    <div class="form-group">
                                                        <label class="card-title control-label" for="description">Açıklama</label>
                                                        <textarea class="form-control" id="description"
                                                                  name="description" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>


                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
                                    <a type="button" class="btn btn-warning"
                                       href="{{   route('admin.finance.index')   }}">{{ trans('backend.back') }}</a>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            let data = {
                "10000": {
                    "first_payment_amount": {
                        "285": "14",
                        "444": "9",
                        "1000": "4"
                    },
                    "amount_payable": "4000",
                    "remaining_amount": "6000",
                    "last_payment_amount": "500",
                    "number_of_payments": "12"
                },
                "20000": {
                    "first_payment_amount": {
                        "533": "15",
                        "800": "10",
                        "1600": "5"
                    },
                    "amount_payable": "8000",
                    "remaining_amount": "12000",
                    "last_payment_amount": "1000",
                    "number_of_payments": "12"
                },
                "30000": {
                    "first_payment_amount": {
                        "750": "16",
                        "1090": "11",
                        "2000": "6"
                    },
                    "amount_payable": "12000",
                    "remaining_amount": "18000",
                    "last_payment_amount": "1285",
                    "number_of_payments": "14"
                },
                "40000": {
                    "first_payment_amount": {
                        "940": "17",
                        "1333": "12",
                        "2285": "7"
                    },
                    "amount_payable": "16000",
                    "remaining_amount": "24000",
                    "last_payment_amount": "1500",
                    "number_of_payments": "16"
                },
                "50000": {
                    "first_payment_amount": {
                        "1111": "18",
                        "1538": "13",
                        "2500": "8"
                    },
                    "amount_payable": "20000",
                    "remaining_amount": "30000",
                    "last_payment_amount": "1666",
                    "number_of_payments": "18"
                }
            };

            let amount = $('#amount');
            let first_payment_amount = $('#first_payment_amount');
            let get_month = $('#get_month');
            let amount_payable = $('#amount_payable');
            let remaining_amount = $('#remaining_amount');
            let last_payment_amount = $('#last_payment_amount');
            let number_of_payments = $('#number_of_payments');

            $(document).on('change', '#amount', function (e) {
                first_payment_amount.find('option').remove().end().append('<option value="0">Taksit Miktarı Seçiniz.</option>').val('0');
                get_month.val('0');

                let selected = $(this).find(":selected").val();
                let sel = data[selected];
                if (sel) {
                    amount_payable.val(sel.amount_payable);
                    remaining_amount.val(sel.remaining_amount);
                    last_payment_amount.val(sel.last_payment_amount);
                    number_of_payments.val(sel.number_of_payments);
                    $.each(sel.first_payment_amount, function (key, value) {
                        first_payment_amount.append(new Option(key, key));
                    });
                } else {
                    amount_payable.val('0');
                    remaining_amount.val('0');
                    last_payment_amount.val('0');
                    number_of_payments.val('0');
                    get_month.val('0');
                }

            });
            $(document).on('change', '#first_payment_amount', function (e) {
                get_month.val('0');
                let selected = $(this).find(":selected").val();
                let selectedAmount = amount.find(":selected").val();
                let sel = data[selectedAmount].first_payment_amount[selected];
                get_month.val(sel);
            });
        });
    </script>
@endsection
