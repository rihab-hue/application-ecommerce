@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.nbr_couleur.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.nbr_couleur.fields.nbr_coul') }}
                    </th>
                    <td>
                        {{ $nbr_couleur->nbr_coul }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection