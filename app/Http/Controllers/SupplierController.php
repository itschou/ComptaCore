<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Http\Requests\StoreSuppliersRequest;
use App\Http\Requests\UpdateSuppliersRequest;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSuppliersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $suppliers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $suppliers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSuppliersRequest $request, Supplier $suppliers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $suppliers)
    {
        //
    }
}
