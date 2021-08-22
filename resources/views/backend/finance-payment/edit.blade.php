@extends('backend.layouts.app')
@section('content')

    <section id="basic-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{$payment[0]->full_name_tr}} / {{$payment[0]->name}}- Ödeme Düzenle</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table add-rows">
                                    <thead>
                                    <tr>
                                        <th class="col-sm-2">Tip</th>
                                        <th class="col-sm-1">Taksit</th>
                                        <th class="col-sm-1">Ödeme</th>
                                        <th class="col-sm-2">Tarih</th>
                                        <th>Açıklama</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($payment as $i => $item )
                                        <tr>
                                            <td>
                                                <input id="type" type="text" class="form-control"
                                                       name="type"
                                                       value="{{ $item->type == 'before' ? 'Ödeme Öncesi' : 'Ödeme Sonrası' }}"
                                                       aria-required="true"
                                                       readonly>
                                            </td>
                                            <td>
                                                <input id="number_of_payments" type="text" class="form-control"
                                                       name="number_of_payments"
                                                       value="{{ $item->number_of_payments }}" aria-required="true"
                                                       readonly>
                                            </td>
                                            <td>
                                                <input id="paid" type="checkbox" class="form-control"
                                                       name="paid"
                                                       value="{{ $item->paid }}" aria-required="true"
                                                       required>
                                            </td>
                                            <td>
                                                <input id="payment_date" type="date" class="form-control"
                                                       name="payment_date"
                                                       value="{{ $item->payment_date }}" aria-required="true"
                                                       required>
                                            </td>
                                            <td>
                                                <input id="description" type="text" class="form-control"
                                                       name="description"
                                                       value="{!!$item->description!!}" aria-required="true"
                                                       required>
                                            </td>

                                            <td>
                                                <a href="#">
                                                    <i class="feather icon-edit font-medium-5"></i>
                                                </a>
                                                <a href="{{   route('admin.financePayment.update',$item->id) }}">
                                                    <i class="feather icon-save font-medium-5"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>

                                </table>
                            </div>

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

        });
    </script>
@endsection
