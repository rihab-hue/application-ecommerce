@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.impression.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.impression.fields.nom') }}
                    </th>
                    <td>
                        {{ $impression->nom }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection