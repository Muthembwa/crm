<?php

namespace App\Http\Controllers\Admin;

use App\AssetStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAssetStatusRequest;
use App\Http\Requests\StoreAssetStatusRequest;
use App\Http\Requests\UpdateAssetStatusRequest;

class AssetStatusController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('asset_status_access'), 403);

        $assetStatuses = AssetStatus::all();

        return view('admin.assetStatuses.index', compact('assetStatuses'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('asset_status_create'), 403);

        return view('admin.assetStatuses.create');
    }

    public function store(StoreAssetStatusRequest $request)
    {
        abort_unless(\Gate::allows('asset_status_create'), 403);

        $assetStatus = AssetStatus::create($request->all());

        return redirect()->route('admin.asset-statuses.index');
    }

    public function edit(AssetStatus $assetStatus)
    {
        abort_unless(\Gate::allows('asset_status_edit'), 403);

        return view('admin.assetStatuses.edit', compact('assetStatus'));
    }

    public function update(UpdateAssetStatusRequest $request, AssetStatus $assetStatus)
    {
        abort_unless(\Gate::allows('asset_status_edit'), 403);

        $assetStatus->update($request->all());

        return redirect()->route('admin.asset-statuses.index');
    }

    public function show(AssetStatus $assetStatus)
    {
        abort_unless(\Gate::allows('asset_status_show'), 403);

        return view('admin.assetStatuses.show', compact('assetStatus'));
    }

    public function destroy(AssetStatus $assetStatus)
    {
        abort_unless(\Gate::allows('asset_status_delete'), 403);

        $assetStatus->delete();

        return back();
    }

    public function massDestroy(MassDestroyAssetStatusRequest $request)
    {
        AssetStatus::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
