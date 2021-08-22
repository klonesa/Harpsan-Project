<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use App\Models\backend\Finance;
use App\Models\backend\FinancePayment;
use Illuminate\Http\Request;

class FinancePaymentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $finance = FinancePayment::query()
            ->join('users', 'users.id', '=', 'finance_payment.user_id')
            ->join('finance', 'finance.id', '=', 'finance_payment.finance_id')
            ->distinct()
            ->select(
                'users.full_name_tr',
                'finance.*'
            )->get();
        return view('backend.finance-payment.index', compact('finance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('backend.finance-payment.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $finance = new Finance();
        $finance->user_id = $request->user;
        $finance->name = $request->name;
        $finance->amount = $request->amount;
        $finance->first_payment_amount = $request->first_payment_amount ?? '';
        $finance->get_month = $request->get_month ?? '';
        $finance->amount_payable = $request->amount_payable ?? '';
        $finance->remaining_amount = $request->remaining_amount ?? '';
        $finance->last_payment_amount = $request->last_payment_amount ?? '';
        $finance->number_of_payments = $request->number_of_payments ?? '';
        $finance->participation_fee = $request->participation_fee ?? '';
        //$finance->deposit = $request->deposit?? '';
        $finance->description = $request->description ?? '';
        $finance->save();


        return redirect(route('admin.finance.index'));
    }

    public function show(Finance $finance)
    {
        //
    }

    public function edit($id)
    {
        $payment = FinancePayment::query()
            ->join('users', 'users.id', '=', 'finance_payment.user_id')
            ->join('finance', 'finance.id', '=', 'finance_payment.finance_id')
            ->distinct()
            ->select(
                'finance_payment.*',
                'users.full_name_tr',
                'finance.name'
            )->get();

        return view('backend.finance-payment.edit', compact('payment'));
    }

    public function update(Request $request, $id)
    {
        $payment = FinancePayment::find($id);

        $paid = 0;
        if (isset($request->paid)) {
            if ($request->paid) {
                $paid = 1;
            } else {
                $paid = 0;
            }
        }
        $payment->paid = $paid;
        $payment->payment_date = $request->date;
        $payment->description = $request->desc;
        $payment->save();



        return $payment;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Admin\Model\Finance $finance
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $finance = Finance::find($id);
        $finance->delete();
        return redirect()->back()->with('message', 'Finance Deleted Successfully');
    }
}
