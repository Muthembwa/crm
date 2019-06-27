<?php

namespace App\Http\Requests;

use App\AssetsHistory;
use Illuminate\Foundation\Http\FormRequest;

class StoreAssetsHistoryRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('assets_history_create');
    }

    public function rules()
    {
        return [
        ];
    }
}
