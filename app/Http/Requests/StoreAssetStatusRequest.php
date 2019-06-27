<?php

namespace App\Http\Requests;

use App\AssetStatus;
use Illuminate\Foundation\Http\FormRequest;

class StoreAssetStatusRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('asset_status_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
        ];
    }
}
