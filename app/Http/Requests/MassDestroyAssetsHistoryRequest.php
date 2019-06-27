<?php

namespace App\Http\Requests;

use App\AssetsHistory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyAssetsHistoryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('assets_history_delete'), 403, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:assets_histories,id',
        ];
    }
}
