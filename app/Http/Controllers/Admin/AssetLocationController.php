<?php

namespace App\Http\Controllers\Admin;

use App\AssetLocation;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAssetLocationRequest;
use App\Http\Requests\StoreAssetLocationRequest;
use App\Http\Requests\UpdateAssetLocationRequest;

class AssetLocationController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('asset_location_access'), 403);

        $assetLocations = AssetLocation::all();

        return view('admin.assetLocations.index', compact('assetLocations'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('asset_location_create'), 403);

        return view('admin.assetLocations.create');
    }

    public function store(StoreAssetLocationRequest $request)
    {
        abort_unless(\Gate::allows('asset_location_create'), 403);

        $assetLocation = AssetLocation::create($request->all());

        return redirect()->route('admin.asset-locations.index');
    }

    public function edit(AssetLocation $assetLocation)
    {
        abort_unless(\Gate::allows('asset_location_edit'), 403);

        return view('admin.assetLocations.edit', compact('assetLocation'));
    }

    public function update(UpdateAssetLocationRequest $request, AssetLocation $assetLocation)
    {
        abort_unless(\Gate::allows('asset_location_edit'), 403);

        $assetLocation->update($request->all());

        return redirect()->route('admin.asset-locations.index');
    }

    public function show(AssetLocation $assetLocation)
    {
        abort_unless(\Gate::allows('asset_location_show'), 403);

        return view('admin.assetLocations.show', compact('assetLocation'));
    }

    public function destroy(AssetLocation $assetLocation)
    {
        abort_unless(\Gate::allows('asset_location_delete'), 403);

        $assetLocation->delete();

        return back();
    }

    public function massDestroy(MassDestroyAssetLocationRequest $request)
    {
        AssetLocation::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
