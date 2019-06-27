<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\AssetLocation;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAssetLocationRequest;
use App\Http\Requests\UpdateAssetLocationRequest;

class AssetLocationApiController extends Controller
{
    public function index()
    {
        $assetLocations = AssetLocation::all();

        return $assetLocations;
    }

    public function store(StoreAssetLocationRequest $request)
    {
        return AssetLocation::create($request->all());
    }

    public function update(UpdateAssetLocationRequest $request, AssetLocation $assetLocation)
    {
        return $assetLocation->update($request->all());
    }

    public function show(AssetLocation $assetLocation)
    {
        return $assetLocation;
    }

    public function destroy(AssetLocation $assetLocation)
    {
        $assetLocation->delete();

        return response("OK", 200);
    }
}
