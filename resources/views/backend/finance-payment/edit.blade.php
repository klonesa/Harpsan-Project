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
                                                <input id="type{{$item->id}}" type="text" class="form-control"
                                                       name="type{{$item->id}}"
                                                       value="{{ $item->type == 'before' ? 'Ödeme Öncesi' : 'Ödeme Sonrası' }}"
                                                       aria-required="true"
                                                       readonly>
                                            </td>
                                            <td>
                                                <input id="number_of_payments{{$item->id}}" type="text"
                                                       class="form-control"
                                                       name="number_of_payments{{$item->id}}"
                                                       value="{{ $item->number_of_payments }}" aria-required="true"
                                                       readonly>
                                            </td>
                                            <td>
                                                <input id="paid{{$item->id}}" type="checkbox" class="form-control"
                                                       name="paid{{$item->id}}"
                                                       value="{{ $item->paid }}" aria-required="true"
                                                       required  @if ($item->paid === 1) checked @endif>
                                            </td>
                                            <td>
                                                <input id="payment_date{{$item->id}}" type="date" class="form-control"
                                                       name="payment_date{{$item->id}}"
                                                       value="{{ $item->payment_date }}" aria-required="true"
                                                       required>
                                            </td>
                                            <td>
                                                <input id="description{{$item->id}}" type="text" class="form-control"
                                                       name="description{{$item->id}}"
                                                       value="{!!$item->description!!}" aria-required="true"
                                                       required>
                                            </td>

                                            <td>
                                                {{-- <a href="#">
                                                     <i class="feather icon-edit font-medium-5"></i>
                                                 </a>--}}
                                                <a href="#"
                                                   id="{{$item->id}}"
                                                   class="submit ">
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
            $(document).on("click", ".submit", function (e) {
                let id = this.id;

                let paid = document.querySelector('#paid' + id).checked;
                //$('#paid' + id + ':checked').val();
                let date = $('#payment_date' + id).val();
                let desc = $('#description' + id).val();
                var data = {};
                data.paid = paid;
                data.date = date;
                data.desc = desc;

                $.ajax({
                    url: "{{  route('admin.financePayment.update', ':key')  }}".replace(':key', id),
                    type: 'PUT',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: data,
                    /* cache: false,
                     processData: false,
                     contentType: false,*/
                    success: function (response) {
                        console.log(response);
                    },
                    error: function (error) {
                        console.log(error);
                    }
                })
            });


        });
    </script>
@endsection
