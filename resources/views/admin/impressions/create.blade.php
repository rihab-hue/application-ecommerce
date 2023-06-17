@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('global.impression.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.impressions.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                <label for="nom">{{ trans('global.impression.fields.nom') }}<span class="text-danger">*</label>
                <input type="text" id="nom" name="nom" class="form-control" value="{{ old('nom', isset($impression) ? $impression->nom : '') }}">
                @if($errors->has('nom'))
                    <p class="help-block">
                        {{ $errors->first('nom') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.impression.fields.nom_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection