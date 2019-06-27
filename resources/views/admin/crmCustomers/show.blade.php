@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.crmCustomer.title') }}
                </div>
                <div class="panel-body">

                    <div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.crmCustomer.fields.first_name') }}
                                    </th>
                                    <td>
                                        {{ $crmCustomer->first_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.crmCustomer.fields.last_name') }}
                                    </th>
                                    <td>
                                        {{ $crmCustomer->last_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.crmCustomer.fields.status') }}
                                    </th>
                                    <td>
                                        {{ $crmCustomer->status->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.crmCustomer.fields.email') }}
                                    </th>
                                    <td>
                                        {{ $crmCustomer->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.crmCustomer.fields.phone') }}
                                    </th>
                                    <td>
                                        {{ $crmCustomer->phone }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.crmCustomer.fields.address') }}
                                    </th>
                                    <td>
                                        {{ $crmCustomer->address }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.crmCustomer.fields.skype') }}
                                    </th>
                                    <td>
                                        {{ $crmCustomer->skype }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.crmCustomer.fields.website') }}
                                    </th>
                                    <td>
                                        {{ $crmCustomer->website }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.crmCustomer.fields.description') }}
                                    </th>
                                    <td>
                                        {!! $crmCustomer->description !!}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                            Back
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection