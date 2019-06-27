<?php

namespace App\Http\Requests;

use App\CrmDocument;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyCrmDocumentRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('crm_document_delete'), 403, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:crm_documents,id',
        ];
    }
}
