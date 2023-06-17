@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.contact.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.contact.fields.Nom') }}
                    </th>
                    <td>
                        {{ $contact->Nom }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.contact.fields.Prenom') }}
                    </th>
                    <td>
                        {!! $contact->Prenom !!}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.contact.fields.Email') }}
                    </th>
                    <td>
                        ${{ $contact->Email }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.contact.fields.Telepone') }}
                    </th>
                    <td>
                        ${{ $contact->Telepone }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection