<?php

namespace App\Http\Controllers\api;

use App\Models\Instituicao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InstituicaoStoreRequest;
use App\Http\Resources\InstituicaoResource;

class InstituicaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            return InstituicaoResource::collection(Instituicao::all());
        }
        catch(\Exception $e){
            return response()->json($e->getMessage(), 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InstituicaoStoreRequest $request)
    {
        // $request->validated();

        // Instituicao::create($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        try{
            $instituicao = Instituicao::find($id);
            return response()->json($instituicao, 200);
        }
        catch(\Exception $e){
            return response()->json($e->getMessage(), 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
