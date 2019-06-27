<?php

namespace App\Http\Requests;

use App\AssetCategory;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAssetCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('asset_category_edit');
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
