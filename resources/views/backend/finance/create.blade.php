@extends('backend.layouts.app')
@section('content')


    <section id="basic-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Finans</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">


                            <form role="form" action="{{ route('admin.finance.store') }}" method="post"
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
                                                        <div class="select-basic">
                                                            <select class="form-control" name="get_month" id="get_month"
                                                                    required>
                                                                <option value="0">Paranın
                                                                    Alınacağı Ay Seçiniz.</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="card-title control-label" for="amount">Üyenin
                                                            Ödeyeceği Miktar</label>
                                                        <input id="amount_payable" name="amount_payable"
                                                               step="0.01"
                                                               type="number" class="form-control" aria-required="true"
                                                               required disabled>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="card-title control-label" for="amount">Kalan Ödeme
                                                            Miktarı</label>
                                                        <input id="remaining_amount" name="remaining_amount"
                                                               step="0.01"
                                                               type="number" class="form-control" aria-required="true"
                                                               required disabled>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="card-title control-label" for="amount">Ödeme
                                                            Sonrası Taksit Miktarı</label>
                                                        <input id="last_payment_amount" name="last_payment_amount"
                                                               step="0.01"
                                                               type="number" class="form-control" aria-required="true"
                                                               required disabled>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="card-title control-label" for="amount">Taksit
                                                            Sayısı</label>
                                                        <input id="number_of_payments" name="number_of_payments"
                                                               step="0.01"
                                                               type="number" class="form-control" aria-required="true"
                                                               required disabled>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="card-title control-label" for="name">Katılım
                                                            Masrafı</label>
                                                        <input id="participation_fee" name="participation_fee"
                                                               step="0.01"
                                                               type="number" class="form-control" aria-required="true"
                                                               required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="card-title control-label"
                                                               for="name">Depozito</label>
                                                        <input id="deposit" type="text" name="deposit" step="0.01"
                                                               class="form-control"
                                                               aria-required="true" required>
                                                    </div>

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
            let first_payment_amount = $('#first_payment_amount');
            let get_month = $('#get_month');
            let amount_payable = $('#amount_payable');
            let remaining_amount = $('#remaining_amount');
            let last_payment_amount = $('#last_payment_amount');
            let number_of_payments = $('#number_of_payments');

            $(document).on('change', '#amount', function (e) {
                let selected = $(this).find(":selected").val();
                if (selected === '10000') {
                    first_payment_amount.append(new Option("285", "285"));
                    first_payment_amount.append(new Option("444", "444"));
                    first_payment_amount.append(new Option("1000", "1000"));
                    amount_payable.val('4000');
                    remaining_amount.val('6000');
                    last_payment_amount.val('500');
                    number_of_payments.val('12');
                } else if (selected === '20000') {
                    first_payment_amount.append(new Option("285", "285"));
                    first_payment_amount.append(new Option("444", "444"));
                    first_payment_amount.append(new Option("1000", "1000"));
                    amount_payable.val('8000');
                    remaining_amount.val('12000');
                    last_payment_amount.val('1000');
                    number_of_payments.val('12');
                } else if (selected === '30000') {
                    first_payment_amount.append(new Option("285", "285"));
                    first_payment_amount.append(new Option("444", "444"));
                    first_payment_amount.append(new Option("1000", "1000"));
                    amount_payable.val('12000');
                    remaining_amount.val('18000');
                    last_payment_amount.val('1285');
                    number_of_payments.val('14');
                } else if (selected === '40000') {
                    first_payment_amount.append(new Option("285", "285"));
                    first_payment_amount.append(new Option("444", "444"));
                    first_payment_amount.append(new Option("1000", "1000"));
                    amount_payable.val('16000');
                    remaining_amount.val('24000');
                    last_payment_amount.val('1500');
                    number_of_payments.val('16');
                } else if (selected === '50000') {
                    first_payment_amount.append(new Option("285", "285"));
                    first_payment_amount.append(new Option("444", "444"));
                    first_payment_amount.append(new Option("1000", "1000"));
                    amount_payable.val('20000');
                    remaining_amount.val('30000');
                    last_payment_amount.val('1666');
                    number_of_payments.val('18');
                } else {
                    first_payment_amount.find('option').remove().end().append('<option value="0">Taksit Miktarı Seçiniz.</option>').val('0');

                    amount_payable.val('');
                    remaining_amount.val('');
                    last_payment_amount.val('');
                    number_of_payments.val('');
                }

            });
        });
    </script>
@endsection
