<?php

namespace App\Http\Controllers;

use App\Models\Assets;
use App\Http\Requests\StoreAssetsRequest;
use App\Http\Requests\UpdateAssetsRequest;
use Illuminate\Support\Facades\Validator;

class AssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return (view('assets.lihatdata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return (view('assets.inputdata', compact(Assets::all())));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAssetsRequest $request)
    {
        $asset = new Assets();

        $asset->namaBarang    = $request->input('namaBarang');
        $asset->kodeAsset     = $request->input('kodeAsset');
        $asset->qrCode        = $request->input('qrCode');
        $asset->kodeTelkom    = $request->input('kodeTelkom');
        $asset->serialNumber  = $request->input('serialNumber');
        $asset->lokasi        = $request->input('lokasi');
        $asset->keterangan    = $request->input('keterangan');
        $asset->kondisi       = $request->input('kondisi');
        $asset->status        = $request->input('status');
        $asset->pelabuhan     = $request->input('pelabuhan');

        // Save the data to the database
        $asset->save();

        // Optionally redirect or return a response
        return redirect()->route('assets.lihatdata')->with('success', 'Asset successfully stored.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Assets $assets)
    {
        //show detail by id
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assets $assets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAssetsRequest $request, Assets $assets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assets $assets)
    {
        //
    }
}
