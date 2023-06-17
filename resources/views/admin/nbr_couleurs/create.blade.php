@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('global.nbr_couleur.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.nbr_couleurs.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('nbr_coul') ? 'has-error' : '' }}">
                <label for="nbr_coul">{{ trans('global.nbr_couleur.fields.nbr_coul') }}<span class="text-danger">*</label>
                <input type="number" id="nbr_coul" name="nbr_coul" class="form-control" value="{{ old('nbr_coul', isset($nbr_couleur) ? $nbr_couleur->nbr_coul : '') }}">
                @if($errors->has('nbr_coul'))
                    <p class="help-block">
                        {{ $errors->first('nbr_coul') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.nbr_couleur.fields.nbr_coul_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection