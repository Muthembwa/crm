@extends('layouts.admin')
@section('content')
<div class="content">
    @can('assets_history_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route("admin.assets-histories.create") }}">
                    {{ trans('global.add') }} {{ trans('cruds.assetsHistory.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('cruds.assetsHistory.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable">
                            <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        {{ trans('cruds.assetsHistory.fields.asset') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assetsHistory.fields.status') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assetsHistory.fields.location') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assetsHistory.fields.assigned_user') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assetsHistory.fields.created_at') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($assetsHistories as $key => $assetsHistory)
                                    <tr data-entry-id="{{ $assetsHistory->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $assetsHistory->asset->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $assetsHistory->status->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $assetsHistory->location->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $assetsHistory->assigned_user->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $assetsHistory->created_at ?? '' }}
                                        </td>
                                        <td>
                                            @can('assets_history_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.assets-histories.show', $assetsHistory->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan
                                            @can('assets_history_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.assets-histories.edit', $assetsHistory->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan
                                            @can('assets_history_delete')
                                                <form action="{{ route('admin.assets-histories.destroy', $assetsHistory->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>
                                            @endcan
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.assets-histories.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('assets_history_delete')
  dtButtons.push(deleteButton)
@endcan

  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection