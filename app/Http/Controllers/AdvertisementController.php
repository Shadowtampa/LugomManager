<?php

namespace App\Http\Controllers;

use App\DataTables\AdvertisementsDataTable;
use App\Http\Requests\StoreAdvertisementRequest;
use App\Http\Requests\UpdateAdvertisementRequest;
use App\Models\Advertisement;
use App\Models\Store;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AdvertisementsDataTable $dataTable)
    {
        return $dataTable->render('ads.index');
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
    public function store(StoreAdvertisementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Advertisement $advertisement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ad = Advertisement::whereId($id)->first();

        $stores = Store::all();
        // Retorna a view com os dados necessários
        return view('ads.edit', compact('ad', 'stores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdvertisementRequest $request, $id)
    {
        // Find the product by ID
        $ad = Advertisement::findOrFail($id);

        // Update the product with the validated data
        $ad->update($request->all());

        // Redirect to a view or route after successfully updating the product
        return redirect()->route('ads.index', $ad->id)->with('success', 'ad updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Advertisement $advertisement)
    {
        //
    }
}
