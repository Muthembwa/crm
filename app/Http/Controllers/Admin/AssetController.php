<?php

namespace App\Http\Controllers\Admin;

use App\Asset;
use App\AssetCategory;
use App\AssetLocation;
use App\AssetStatus;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyAssetRequest;
use App\Http\Requests\StoreAssetRequest;
use App\Http\Requests\UpdateAssetRequest;
use App\User;

class AssetController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_unless(\Gate::allows('asset_access'), 403);

        $assets = Asset::all();

        return view('admin.assets.index', compact('assets'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('asset_create'), 403);

        $categories = AssetCategory::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $statuses = AssetStatus::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $locations = AssetLocation::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $assigned_tos = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.assets.create', compact('categories', 'statuses', 'locations', 'assigned_tos'));
    }

    public function store(StoreAssetRequest $request)
    {
        abort_unless(\Gate::allows('asset_create'), 403);

        $asset = Asset::create($request->all());

        foreach ($request->input('photos', []) as $file) {
            $asset->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('photos');
        }

        return redirect()->route('admin.assets.index');
    }

    public function edit(Asset $asset)
    {
        abort_unless(\Gate::allows('asset_edit'), 403);

        $categories = AssetCategory::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $statuses = AssetStatus::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $locations = AssetLocation::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $assigned_tos = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $asset->load('category', 'status', 'location', 'assigned_to');

        return view('admin.assets.edit', compact('categories', 'statuses', 'locations', 'assigned_tos', 'asset'));
    }

    public function update(UpdateAssetRequest $request, Asset $asset)
    {
        abort_unless(\Gate::allows('asset_edit'), 403);

        $asset->update($request->all());

        if (count($asset->photos) > 0) {
            foreach ($asset->photos as $media) {
                if (!in_array($media->file_name, $request->input('photos', []))) {
                    $media->delete();
                }
            }
        }

        $media = $asset->photos->pluck('file_name')->toArray();

        foreach ($request->input('photos', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $asset->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('photos');
            }
        }

        return redirect()->route('admin.assets.index');
    }

    public function show(Asset $asset)
    {
        abort_unless(\Gate::allows('asset_show'), 403);

        $asset->load('category', 'status', 'location', 'assigned_to');

        return view('admin.assets.show', compact('asset'));
    }

    public function destroy(Asset $asset)
    {
        abort_unless(\Gate::allows('asset_delete'), 403);

        $asset->delete();

        return back();
    }

    public function massDestroy(MassDestroyAssetRequest $request)
    {
        Asset::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
