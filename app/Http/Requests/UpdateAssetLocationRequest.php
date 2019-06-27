<?php

namespace App\Http\Requests;

use App\AssetLocation;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAssetLocationRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('asset_location_edit');
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
