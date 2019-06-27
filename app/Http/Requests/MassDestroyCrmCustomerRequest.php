<?php

namespace App\Http\Requests;

use App\CrmCustomer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyCrmCustomerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('crm_customer_delete'), 403, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:crm_customers,id',
        ];
    }
}
