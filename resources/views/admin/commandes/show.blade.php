@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans(' global.commande.title') }}
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.commande.fields.name') }}
                    </th>
                    <td>
                        {{ $commande->user->name}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.commande.fields.email') }}
                    </th>
                    <td>
                        {{ $commande->user->email }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.commande.fields.article') }}
                    </th>
                    <td>
                        {{ $commande->article->titre }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.commande.fields.format') }}
                    </th>
                    <td>
                        {{ $commande->format->nom }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.commande.fields.papier') }}
                    </th>
                    <td>
                        {{ $commande->papier }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.commande.fields.impression') }}
                    </th>
                    <td>
                        {{ $commande->impression }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.commande.fields.pelliculage') }}
                    </th>
                    <td>
                        {{ $commande->pelliculage }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.commande.fields.nbr_couleur') }}
                    </th>
                    <td>
                        {{ $commande->nbr_couleur }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.commande.fields.nbr_exemplaire') }}
                    </th>
                    <td>
                        {{ $commande->nbr_exemplaire}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.commande.fields.qte') }}
                    </th>
                    <td>
                        {{ $commande->qte }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.commande.fields.prix_unitaire') }}
                    </th>
                    <td>
                        {{ $commande->prix_unitaire}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection