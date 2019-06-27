<?php

namespace App\Http\Requests;

use App\AssetLocation;
use Illuminate\Foundation\Http\FormRequest;

class StoreAssetLocationRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('asset_location_create');
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
