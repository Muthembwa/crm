<?php

namespace App\Http\Requests;

use App\Asset;
use Illuminate\Foundation\Http\FormRequest;

class StoreAssetRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('asset_create');
    }

    public function rules()
    {
        return [
            'category_id' => [
                'required',
                'integer',
            ],
            'name'        => [
                'required',
            ],
            'status_id'   => [
                'required',
                'integer',
            ],
            'location_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
