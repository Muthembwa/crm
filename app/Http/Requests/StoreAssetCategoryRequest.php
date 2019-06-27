<?php

namespace App\Http\Requests;

use App\AssetCategory;
use Illuminate\Foundation\Http\FormRequest;

class StoreAssetCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('asset_category_create');
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
