<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Asset;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAssetRequest;
use App\Http\Requests\UpdateAssetRequest;

class AssetApiController extends Controller
{
    public function index()
    {
        $assets = Asset::all();

        return $assets;
    }

    public function store(StoreAssetRequest $request)
    {
        return Asset::create($request->all());
    }

    public function update(UpdateAssetRequest $request, Asset $asset)
    {
        return $asset->update($request->all());
    }

    public function show(Asset $asset)
    {
        return $asset;
    }

    public function destroy(Asset $asset)
    {
        $asset->delete();

        return response("OK", 200);
    }
}
