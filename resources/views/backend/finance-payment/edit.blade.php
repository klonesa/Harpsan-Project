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
                                        <th>Tip</th>
                                        <th>Tarih</th>
                                        <th>Taksit</th>
                                        <th>Ödeme</th>
                                        <th>Açıklama</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($payment as $item)
                                        <tr>
                                            <td>{{ $item->type }}</td>
                                            <td>{{ $item->payment_date }}</td>
                                            <td>{{ $item->number_of_payments}}</td>
                                            <td>{{ $item->paid}}</td>
                                            <td>{!!$item->description!!}</td>

                                            <td>
                                                <a href="{{   route('admin.financePayment.edit',$item->id) }}"> <i
                                                        class="feather icon-edit font-medium-5"></i> </a>

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
