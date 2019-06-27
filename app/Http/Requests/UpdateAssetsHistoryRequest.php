<?php

namespace App\Http\Requests;

use App\AssetsHistory;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAssetsHistoryRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('assets_history_edit');
    }

    public function rules()
    {
        return [
        ];
    }
}
