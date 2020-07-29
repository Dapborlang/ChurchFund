<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use App\Donor;
class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $columns = \DB::connection()->getSchemaBuilder()->getColumnListing("donors");
        $table=Donor::orderBy('name')
        ->get();
        $card_header='Donor';
        $route='transaction';
        return view('donor.index', compact('columns','table','card_header','route'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donor=Donor::findOrFail($id);
        return view('donor.show',compact('donor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }

    public function print($id,$bal)
    {
        $transaction=Transaction::findOrFail($id);
        $pdf = \PDF::loadView('donor.receipt',compact('bal','transaction'))->setPaper('A4', 'portrait')->setWarnings(false)->save('receipt.pdf');
        return $pdf->stream();
    }
}
