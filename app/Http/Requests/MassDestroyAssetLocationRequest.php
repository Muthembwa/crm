<?php

namespace App\Http\Requests;

use App\AssetLocation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyAssetLocationRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('asset_location_delete'), 403, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:asset_locations,id',
        ];
    }
}
