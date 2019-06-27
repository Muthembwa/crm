<?php

namespace App\Http\Requests;

use App\AssetStatus;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAssetStatusRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('asset_status_edit');
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
