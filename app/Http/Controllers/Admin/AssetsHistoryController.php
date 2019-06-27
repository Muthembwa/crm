<?php

namespace App\Http\Controllers\Admin;

use App\AssetsHistory;
use App\Http\Controllers\Controller;

class AssetsHistoryController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('assets_history_access'), 403);

        $assetsHistories = AssetsHistory::all();

        return view('admin.assetsHistories.index', compact('assetsHistories'));
    }
}
