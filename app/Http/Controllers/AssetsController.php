<?php

namespace App\Http\Controllers;

use App\Models\Assets;
use App\Http\Requests\StoreAssetsRequest;
use App\Http\Requests\UpdateAssetsRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

class AssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assets = Assets::all();
        return view('assets.lihatdata', compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('assets.inputdata');
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

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('foto', $filename, 'public');
            $asset->foto = $path;
        }

        $asset->save();

        return redirect()->route('/penempatan')->with('success', 'Asset successfully stored.');
    }

    /**
     * Display the specified resource.
     */
    public function show($uuid)
    {
        $assets = Assets::where('uuid', $uuid)->first();

        if (!$assets) {
            return redirect()->route('assets.index')->with('error', 'Asset not found');
        }
        return view('assets.showdata', compact('assets'));
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
