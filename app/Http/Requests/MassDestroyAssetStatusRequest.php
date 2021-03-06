<?php

namespace App\Http\Requests;

use App\AssetStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyAssetStatusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('asset_status_delete'), 403, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:asset_statuses,id',
        ];
    }
}
