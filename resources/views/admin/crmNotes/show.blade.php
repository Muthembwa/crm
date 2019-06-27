@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.crmNote.title') }}
                </div>
                <div class="panel-body">

                    <div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.crmNote.fields.customer') }}
                                    </th>
                                    <td>
                                        {{ $crmNote->customer->first_name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.crmNote.fields.note') }}
                                    </th>
                                    <td>
                                        {!! $crmNote->note !!}
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