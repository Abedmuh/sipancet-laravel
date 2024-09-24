<?php

namespace App\Http\Controllers;

use App\Models\Assets;
use App\Http\Requests\StoreAssetsRequest;
use App\Http\Requests\UpdateAssetsRequest;
use App\Utils\Export;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

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
            $filename = time() . '_' . $asset->kodeAsset . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('foto', $filename, 'public');
            $asset->foto = $filename;
        }

        $asset->save();

        return redirect()->route('penempatan.index')->with('success', 'Asset successfully stored.');
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
    public function edit($uuid)
    {
        $aset = Assets::where('uuid', $uuid)->first();

        if (!$aset) {
            return redirect()->route('assets.index')->with('error', 'Asset not found');
        }
        return view('assets.editdata', compact('aset'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAssetsRequest $request, $uuid)
    {
        $asset = Assets::where('uuid', $uuid)->first();

        if (!$asset) {
            return redirect()->route('assets.index')->with('error', 'Asset not found');
        }

        $asset->namaBarang    = $request->input('namaBarang');
        $asset->qrCode        = $request->input('qrCode');
        $asset->kodeTelkom    = $request->input('kodeTelkom');
        $asset->serialNumber  = $request->input('serialNumber');
        $asset->lokasi        = $request->input('lokasi');
        $asset->keterangan    = $request->input('keterangan');
        $asset->kondisi       = $request->input('kondisi');
        $asset->status        = $request->input('status');
        $asset->pelabuhan     = $request->input('pelabuhan');

        $asset->save();

        return redirect()->route('penempatan.index')->with('success', 'Asset successfully stored.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($uuid)
    {
        $assets = Assets::where('uuid', $uuid)->first();

        if (!$assets) {
            return redirect()->route('assets.index')->with('error', 'Asset not found');
        }

        // Check if the asset has a file associated with it
        if ($assets->foto) {
            $filePath = 'foto/' . $assets->foto; 

            if (Storage::disk('public')->exists($filePath)) {
                Storage::disk('public')->delete($filePath);
            }
        }
        $assets->delete();


        return redirect()->route('penempatan.index')->with('success', 'Asset deleted successfully');
    }

    public function exportExcel()
    {
        return Export::exportToExcel();
    }
}
