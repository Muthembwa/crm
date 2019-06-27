<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\AssetCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAssetCategoryRequest;
use App\Http\Requests\UpdateAssetCategoryRequest;

class AssetCategoryApiController extends Controller
{
    public function index()
    {
        $assetCategories = AssetCategory::all();

        return $assetCategories;
    }

    public function store(StoreAssetCategoryRequest $request)
    {
        return AssetCategory::create($request->all());
    }

    public function update(UpdateAssetCategoryRequest $request, AssetCategory $assetCategory)
    {
        return $assetCategory->update($request->all());
    }

    public function show(AssetCategory $assetCategory)
    {
        return $assetCategory;
    }

    public function destroy(AssetCategory $assetCategory)
    {
        $assetCategory->delete();

        return response("OK", 200);
    }
}
