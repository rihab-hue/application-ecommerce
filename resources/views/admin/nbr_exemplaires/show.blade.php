@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.nbr_exemplaire.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.nbr_exemplaire.fields.nbr_exp') }}
                    </th>
                    <td>
                        {{ $nbr_exemplaire->nbr_exp }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection