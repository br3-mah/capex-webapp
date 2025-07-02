<?php

namespace App\Http\Controllers;

use App\Models\MetaTransaction;
use App\Http\Requests\StoreMetaTransactionRequest;
use App\Http\Requests\UpdateMetaTransactionRequest;

class MetaTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMetaTransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMetaTransactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MetaTransaction  $metaTransaction
     * @return \Illuminate\Http\Response
     */
    public function show(MetaTransaction $metaTransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MetaTransaction  $metaTransaction
     * @return \Illuminate\Http\Response
     */
    public function edit(MetaTransaction $metaTransaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMetaTransactionRequest  $request
     * @param  \App\Models\MetaTransaction  $metaTransaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMetaTransactionRequest $request, MetaTransaction $metaTransaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MetaTransaction  $metaTransaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(MetaTransaction $metaTransaction)
    {
        //
    }
}
