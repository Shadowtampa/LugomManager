<?php

namespace App\Http\Controllers;

use App\DataTables\SocialsDataTable;
use App\Http\Requests\StoreSocialRequest;
use App\Http\Requests\UpdateSocialRequest;
use App\Models\Social;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SocialsDataTable $dataTable)
    {
            return $dataTable->render('socials.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("socials.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSocialRequest $request)
    {

        // Adiciona o campo store_id com o valor 1 aos dados da requisição
        $requestData = $request->all();
        $requestData['store_id'] = 1;

        // Cria o registro com os dados da requisição modificada
        $social = Social::create($requestData);

        // Redirect to a view or route after successfully storing the product
        return redirect()->route('socials.index')->with('success', 'Social created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Social $social)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Social $social)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSocialRequest $request, Social $social)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Social $social)
    {
        //
    }
}
