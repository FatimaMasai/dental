<?php

namespace App\Http\Controllers;

use App\Models\CategoriaVenta;
use App\Http\Requests\StoreCategoriaVentaRequest;
use App\Http\Requests\UpdateCategoriaVentaRequest;

class CategoriaVentaController extends Controller
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
     * @param  \App\Http\Requests\StoreCategoriaVentaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoriaVentaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoriaVenta  $categoriaVenta
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriaVenta $categoriaVenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoriaVenta  $categoriaVenta
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoriaVenta $categoriaVenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoriaVentaRequest  $request
     * @param  \App\Models\CategoriaVenta  $categoriaVenta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoriaVentaRequest $request, CategoriaVenta $categoriaVenta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoriaVenta  $categoriaVenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoriaVenta $categoriaVenta)
    {
        //
    }
}
