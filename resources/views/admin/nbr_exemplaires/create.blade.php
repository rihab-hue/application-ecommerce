@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('global.nbr_exemplaire.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.nbr_exemplaires.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('nbr_exp') ? 'has-error' : '' }}">
                <label for="nbr_exp">{{ trans('global.nbr_exemplaire.fields.nbr_exp') }}<span class="text-danger">*</label>
                <input type="number" id="nbr_exp" name="nbr_exp" class="form-control" value="{{ old('nbr_exp', isset($nbr_exemplaire) ? $nbr_exemplaire->nbr_exp : '') }}">
                @if($errors->has('nbr_exp'))
                    <p class="help-block">
                        {{ $errors->first('nbr_exp') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.nbr_exemplaire.fields.nbr_exp_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection