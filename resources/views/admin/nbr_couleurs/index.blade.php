@extends('layouts.admin')
@section('content')
@can('nbr_couleur_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.nbr_couleurs.create") }}">
                {{ trans('global.add') }} {{ trans('global.nbr_couleur.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('global.nbr_couleur.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('global.nbr_couleur.fields.nbr_coul') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($nbr_couleurs as $key => $nbr_couleur)
                        <tr data-entry-id="{{ $nbr_couleur->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $nbr_couleur->nbr_coul ?? '' }}
                            </td>
                            <td>
                                @can('nbr_couleur_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.nbr_couleurs.show', $nbr_couleur->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan
                                @can('nbr_couleur_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.nbr_couleurs.edit', $nbr_couleur->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan
                                @can('nbr_couleur_delete')
                                    <form action="{{ route('admin.nbr_couleurs.destroy', $nbr_couleur->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.nbr_couleurs.massDestroy') }}",
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
@can('nbr_couleur_delete')
  dtButtons.push(deleteButton)
@endcan

  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection