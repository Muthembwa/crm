<?php

namespace App\Http\Requests;

use App\AssetCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyAssetCategoryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('asset_category_delete'), 403, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:asset_categories,id',
        ];
    }
}
