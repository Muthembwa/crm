<?php

namespace App\Http\Controllers\Admin;

use App\AssetCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAssetCategoryRequest;
use App\Http\Requests\StoreAssetCategoryRequest;
use App\Http\Requests\UpdateAssetCategoryRequest;

class AssetCategoryController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('asset_category_access'), 403);

        $assetCategories = AssetCategory::all();

        return view('admin.assetCategories.index', compact('assetCategories'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('asset_category_create'), 403);

        return view('admin.assetCategories.create');
    }

    public function store(StoreAssetCategoryRequest $request)
    {
        abort_unless(\Gate::allows('asset_category_create'), 403);

        $assetCategory = AssetCategory::create($request->all());

        return redirect()->route('admin.asset-categories.index');
    }

    public function edit(AssetCategory $assetCategory)
    {
        abort_unless(\Gate::allows('asset_category_edit'), 403);

        return view('admin.assetCategories.edit', compact('assetCategory'));
    }

    public function update(UpdateAssetCategoryRequest $request, AssetCategory $assetCategory)
    {
        abort_unless(\Gate::allows('asset_category_edit'), 403);

        $assetCategory->update($request->all());

        return redirect()->route('admin.asset-categories.index');
    }

    public function show(AssetCategory $assetCategory)
    {
        abort_unless(\Gate::allows('asset_category_show'), 403);

        return view('admin.assetCategories.show', compact('assetCategory'));
    }

    public function destroy(AssetCategory $assetCategory)
    {
        abort_unless(\Gate::allows('asset_category_delete'), 403);

        $assetCategory->delete();

        return back();
    }

    public function massDestroy(MassDestroyAssetCategoryRequest $request)
    {
        AssetCategory::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
