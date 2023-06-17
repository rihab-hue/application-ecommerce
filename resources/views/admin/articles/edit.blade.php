@extends('layouts.admin')

@section('styles')
    <style>
        .select2{
            width: 100% !important;
        }
    </style>
@endsection

@section('content')
    <div class="card">
        <div class="card-header p-2">
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Infos</a></li>
                <li class="nav-item"><a class="nav-link" href="#formats" data-toggle="tab">Formats</a></li>
                <li class="nav-item"><a class="nav-link" href="#papiers" data-toggle="tab">Papiers</a></li>
                <li class="nav-item"><a class="nav-link" href="#impressions" data-toggle="tab">Impressions</a></li>
                <li class="nav-item"><a class="nav-link" href="#pelliculages" data-toggle="tab">Pelliculages</a></li>
                <li class="nav-item"><a class="nav-link" href="#nbr_couleurs" data-toggle="tab">Nbr_couleurs</a></li>
                <li class="nav-item"><a class="nav-link" href="#nbr_exemplaires" data-toggle="tab">Nbr_exemplaires</a></li>
            </ul>
        </div>
        <div class="card-body">
            <form action="{{ route("admin.articles.update", [$article->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="tab-content">
                    <div class="tab-pane active" id="activity">
                        <div class="">
                            <div class="form-group {{ $errors->has('titre') ? 'has-error' : '' }}">
                                <label for="titre">{{ trans('global.article.fields.titre') }}*</label>
                                <input type="text" id="titre" name="titre" class="form-control" value="{{ old('titre', isset($article) ? $article->titre : '') }}">
                                @if($errors->has('titre'))
                                    <p class="help-block">
                                        {{ $errors->first('titre') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.article.fields.titre_helper') }}
                                </p>
                            </div>

                            <div class="form-group {{ $errors->has('meta_titre') ? 'has-error' : '' }}">
                                <label for="meta_titre">{{ trans('global.article.fields.meta_titre') }}</label>
                                <input type="text" id="meta_titre" name="meta_titre" class="form-control" value="{{ old('meta_titre', isset($article) ? $article->meta_titre : '') }}">
                                @if($errors->has('titre'))
                                    <p class="help-block">
                                        {{ $errors->first('meta_titre') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.article.fields.meta_titre_helper') }}
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                <label for="description">{{ trans('global.article.fields.description') }}</label>
                                <textarea id="description" name="description" class="form-control ">{{ old('description', isset($article) ? $article->description : '') }}</textarea>
                                @if($errors->has('description'))
                                    <p class="help-block">
                                        {{ $errors->first('description') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.article.fields.description_helper') }}
                                </p>
                            </div>

                            <div class="form-group {{ $errors->has('meta_description') ? 'has-error' : '' }}">
                                <label for="meta_description">{{ trans('global.article.fields.meta_description') }}</label>
                                <textarea id="meta_description" name="meta_description" class="form-control ">{{ old('meta_description', isset($article) ? $article->meta_description : '') }}</textarea>
                                @if($errors->has('meta_description'))
                                    <p class="help-block">
                                        {{ $errors->first('meta_description') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.article.fields.meta_description_helper') }}
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('prix') ? 'has-error' : '' }}">
                                <label for="prix">{{ trans('global.article.fields.prix') }}*</label>
                                <input type="number" id="prix" name="prix" class="form-control" value="{{ old('prix', isset($article) ? $article->prix : '') }}" step="0.01">
                                @if($errors->has('prix'))
                                    <p class="help-block">
                                        {{ $errors->first('prix') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.article.fields.prix_helper') }}
                                </p>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" {{ (isset($article) && $article->statut == 1 ) ? 'checked' : '' }} name="statut">
                                <label class="form-check-label" for="statut">
                                <b>{{ trans('global.article.fields.statut') }}</b>
                                </label>
                            </div>
                            <div>
                                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                            </div>            
                        </div>
                    </div>
                    <div class="tab-pane" id="formats">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Ajouter les formats possible</h3>
                                <div class="card-tools">
                                    <button id="addRow_format" type="button" class="btn btn-info">Add Row</button>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>Prix</th>
                                            <th>Nombres</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="newRow_format">
                                        @forelse($article->formats as $format)
                                            <tr class="inputFormRow_format">
                                                <td>
                                                    <select name="select_format[]" class="form-control m-input select2 w-100">
                                                        @foreach($formats as $item)
                                                            <option value="{{ $item->id }}" @if($format->id == $item->id) selected @endif >{{ $item->nom }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_format[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off" value="{{$format->pivot->prix}}">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_format[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off" value="{{$format->pivot->nomber}}">
                                                </td>
                                                <td>
                                                    <button id="removeRow_format" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr class="inputFormRow_format">
                                                <td>
                                                    <select name="select_format[]" class="form-control m-input select2 w-100">
                                                        <option value="">Choisir</option>
                                                        @foreach($formats as $item)
                                                            <option value="{{ $item->id }}">{{ $item->nom }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_format[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_format[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off">
                                                </td>
                                                <td>
                                                    <button id="removeRow_format" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="papiers">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Ajouter les papiers possible</h3>
                                <div class="card-tools">
                                    <button id="addRow_papier" type="button" class="btn btn-info">Add Row</button>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>Prix</th>
                                            <th>Nombres</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="newRow_papier">
                                    @forelse($article->papiers as $papier)
                                            <tr class="inputFormRow_papier">
                                                <td>
                                                    <select name="select_papier[]" class="form-control m-input select2 w-100">
                                                        @foreach($papiers as $item)
                                                            <option value="{{ $item->id }}" @if($papier->id == $item->id) selected @endif >{{ $item->nom }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_papier[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off" value="{{$papier->pivot->prix}}">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_papier[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off" value="{{$papier->pivot->nomber}}">
                                                </td>
                                                <td>
                                                    <button id="removeRow_papier" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr class="inputFormRow_papier">
                                                <td>
                                                    <select name="select_papier[]" class="form-control m-input select2 w-100">
                                                        <option value="">Choisir</option>
                                                        @foreach($papiers as $item)
                                                            <option value="{{ $item->id }}">{{ $item->nom }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_papier[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_papier[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off">
                                                </td>
                                                <td>
                                                    <button id="removeRow_papier" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="impressions">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Ajouter les impressions possible</h3>
                                <div class="card-tools">
                                    <button id="addRow_impression" type="button" class="btn btn-info">Add Row</button>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>Prix</th>
                                            <th>Nombres</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="newRow_impression">
                                    @forelse($article->impressions as $impression)
                                            <tr class="inputFormRow_impression">
                                                <td>
                                                    <select name="select_impression[]" class="form-control m-input select2 w-100">
                                                        @foreach($impressions as $item)
                                                            <option value="{{ $item->id }}" @if($impression->id == $item->id) selected @endif >{{ $item->nom }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_impression[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off" value="{{$impression->pivot->prix}}">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_impression[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off" value="{{$impression->pivot->nomber}}">
                                                </td>
                                                <td>
                                                    <button id="removeRow_impression" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr class="inputFormRow_impression">
                                                <td>
                                                    <select name="select_impression[]" class="form-control m-input select2 w-100">
                                                        <option value="">Choisir</option>
                                                        @foreach($impressions as $item)
                                                            <option value="{{ $item->id }}">{{ $item->nom }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_impression[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_impression[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off">
                                                </td>
                                                <td>
                                                    <button id="removeRow_impression" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="pelliculages">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Ajouter les pelliculages possible</h3>
                                <div class="card-tools">
                                    <button id="addRow_pelliculage" type="button" class="btn btn-info">Add Row</button>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>Prix</th>
                                            <th>Nombres</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="newRow_pelliculage">
                                    @forelse($article->pelliculages as $pelliculage)
                                            <tr class="inputFormRow_pelliculage">
                                                <td>
                                                    <select name="select_pelliculage[]" class="form-control m-input select2 w-100">
                                                        @foreach($pelliculages as $item)
                                                            <option value="{{ $item->id }}" @if($pelliculage->id == $item->id) selected @endif >{{ $item->nom }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_pelliculage[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off" value="{{$pelliculage->pivot->prix}}">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_pelliculage[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off" value="{{$pelliculage->pivot->nomber}}">
                                                </td>
                                                <td>
                                                    <button id="removeRow_pelliculage" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr class="inputFormRow_pelliculage">
                                                <td>
                                                    <select name="select_pelliculage[]" class="form-control m-input select2 w-100">
                                                        <option value="">Choisir</option>
                                                        @foreach($pelliculages as $item)
                                                            <option value="{{ $item->id }}">{{ $item->nom }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_pelliculage[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_pelliculage[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off">
                                                </td>
                                                <td>
                                                    <button id="removeRow_pelliculage" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="nbr_couleurs">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Ajouter les nbr_couleurs possible</h3>
                                <div class="card-tools">
                                    <button id="addRow_nbr_couleur" type="button" class="btn btn-info">Add Row</button>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>Prix</th>
                                            <th>Nombres</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="newRow_nbr_couleur">
                                    @forelse($article->nbr_couleurs as $nbr_couleur)
                                            <tr class="inputFormRow_nbr_couleur">
                                                <td>
                                                    <select name="select_nbr_couleur[]" class="form-control m-input select2 w-100">
                                                        @foreach($nbr_couleurs as $item)
                                                            <option value="{{ $item->id }}" @if($nbr_couleur->id == $item->id) selected @endif >{{ $item->nbr_coul }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_nbr_couleur[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off" value="{{$nbr_couleur->pivot->prix}}">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_nbr_couleur[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off" value="{{$nbr_couleur->pivot->nomber}}">
                                                </td>
                                                <td>
                                                    <button id="removeRow_nbr_couleur" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr class="inputFormRow_nbr_couleur">
                                                <td>
                                                    <select name="select_nbr_couleur[]" class="form-control m-input select2 w-100">
                                                        <option value="">Choisir</option>
                                                        @foreach($nbr_couleurs as $item)
                                                            <option value="{{ $item->id }}">{{ $item->nbr_coul }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_nbr_couleur[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_nbr_couleur[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off">
                                                </td>
                                                <td>
                                                    <button id="removeRow_nbr_couleur" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="nbr_exemplaires">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Ajouter les nbr_exemplaires possible</h3>
                                <div class="card-tools">
                                    <button id="addRow_nbr_exemplaire" type="button" class="btn btn-info">Add Row</button>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>Prix</th>
                                            <th>Nombres</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="newRow_nbr_exemplaire">
                                    @forelse($article->nbr_exemplaires as $nbr_exemplaire)
                                            <tr class="inputFormRow_nbr_exemplaire">
                                                <td>
                                                    <select name="select_nbr_exemplaire[]" class="form-control m-input select2 w-100">
                                                        @foreach($nbr_exemplaires as $item)
                                                            <option value="{{ $item->id }}" @if($nbr_exemplaire->id == $item->id) selected @endif >{{ $item->nbr_exp }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_nbr_exemplaire[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off" value="{{$nbr_exemplaire->pivot->prix}}">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_nbr_exemplaire[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off" value="{{$nbr_exemplaire->pivot->nomber}}">
                                                </td>
                                                <td>
                                                    <button id="removeRow_nbr_exemplaire" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr class="inputFormRow_nbr_exemplaire">
                                                <td>
                                                    <select name="select_nbr_exemplaire[]" class="form-control m-input select2 w-100">
                                                        <option value="">Choisir</option>
                                                        @foreach($nbr_exemplaires as $item)
                                                            <option value="{{ $item->id }}">{{ $item->nbr_exp }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_nbr_exemplaire[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_nbr_exemplaire[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off">
                                                </td>
                                                <td>
                                                    <button id="removeRow_nbr_exemplaire" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        //Initialize Select2 Elements
        $('.select2').select2({
            theme: 'bootstrap4',
            placeholder: "Choisir",
            allowClear: true,
            width: "100%"
        });
        // $(".select2").val(null).trigger('change');
        // add row
        $("#addRow_format").click(function () {
            var html = '';
            html += '<tr class="inputFormRow_format">';
            html += '<td><select name="select_format[]" class="form-control m-input select2 w-100">';
            @foreach($formats as $item)
                html += '<option value="{{ $item->id }}">{{ $item->nom }}</option>';
            @endforeach
            html += '</select>';
            html += '<td><input type="number" name="prix_format[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off"></td>';
            html += '<td><input type="number" name="nomber_format[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off"></td>';
            html += '<td><button id="removeRow_format" type="button" class="btn btn-danger">Remove</button></td>';
            html += '</tr>';

            $('#newRow_format').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow_format', function () {
            $(this).closest('.inputFormRow_format').remove();
        });

        // add row
        $("#addRow_papier").click(function () {
            var html = '';
            html += '<tr class="inputFormRow_papier">';
            html += '<td><select name="select_papier[]" class="form-control m-input select2 w-100">';
            @foreach($papiers as $item)
                html += '<option value="{{ $item->id }}">{{ $item->nom }}</option>';
            @endforeach
            html += '</select>';
            html += '<td><input type="number" name="prix_papier[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off"></td>';
            html += '<td><input type="number" name="nomber_papier[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off"></td>';
            html += '<td><button id="removeRow_papier" type="button" class="btn btn-danger">Remove</button></td>';
            html += '</tr>';

            $('#newRow_papier').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow_papier', function () {
            $(this).closest('.inputFormRow_papier').remove();
        });

        // add row
        $("#addRow_impression").click(function () {
            var html = '';
            html += '<tr class="inputFormRow_impression">';
            html += '<td><select name="select_impression[]" class="form-control m-input select2 w-100">';
            @foreach($impressions as $item)
                html += '<option value="{{ $item->id }}">{{ $item->nom }}</option>';
            @endforeach
            html += '</select>';
            html += '<td><input type="number" name="prix_impression[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off"></td>';
            html += '<td><input type="number" name="nomber_impression[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off"></td>';
            html += '<td><button id="removeRow_impression" type="button" class="btn btn-danger">Remove</button></td>';
            html += '</tr>';

            $('#newRow_impression').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow_impression', function () {
            $(this).closest('.inputFormRow_impression').remove();
        });

        // add row
        $("#addRow_pelliculage").click(function () {
            var html = '';
            html += '<tr class="inputFormRow_pelliculage">';
            html += '<td><select name="select_pelliculage[]" class="form-control m-input select2 w-100">';
            @foreach($pelliculages as $item)
                html += '<option value="{{ $item->id }}">{{ $item->nom }}</option>';
            @endforeach
            html += '</select>';
            html += '<td><input type="number" name="prix_pelliculage[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off"></td>';
            html += '<td><input type="number" name="nomber_pelliculage[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off"></td>';
            html += '<td><button id="removeRow_pelliculage" type="button" class="btn btn-danger">Remove</button></td>';
            html += '</tr>';

            $('#newRow_pelliculage').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow_pelliculage', function () {
            $(this).closest('.inputFormRow_pelliculage').remove();
        });

        // add row
        $("#addRow_nbr_couleur").click(function () {
            var html = '';
            html += '<tr class="inputFormRow_nbr_couleur">';
            html += '<td><select name="select_nbr_couleur[]" class="form-control m-input select2 w-100">';
            @foreach($nbr_couleurs as $item)
                html += '<option value="{{ $item->id }}">{{ $item->nbr_coul}}</option>';
            @endforeach
            html += '</select>';
            html += '<td><input type="number" name="prix_nbr_couleur[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off"></td>';
            html += '<td><input type="number" name="nomber_nbr_couleur[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off"></td>';
            html += '<td><button id="removeRow_nbr_couleur" type="button" class="btn btn-danger">Remove</button></td>';
            html += '</tr>';

            $('#newRow_nbr_couleur').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow_nbr_couleur', function () {
            $(this).closest('.inputFormRow_nbr_couleur').remove();
        });

        // add row
        $("#addRow_nbr_exemplaire").click(function () {
            var html = '';
            html += '<tr class="inputFormRow_nbr_exemplaire">';
            html += '<td><select name="select_nbr_exemplaire[]" class="form-control m-input select2 w-100">';
            @foreach($nbr_exemplaires as $item)
                html += '<option value="{{ $item->id }}">{{ $item->nbr_exp  }}</option>';
            @endforeach
            html += '</select>';
            html += '<td><input type="number" name="prix_nbr_exemplaire[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off"></td>';
            html += '<td><input type="number" name="nomber_nbr_exemplaire[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off"></td>';
            html += '<td><button id="removeRow_nbr_exemplaire" type="button" class="btn btn-danger">Remove</button></td>';
            html += '</tr>';

            $('#newRow_nbr_exemplaire').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow_nbr_exemplaire', function () {
            $(this).closest('.inputFormRow_nbr_exemplaire').remove();
        });
    </script>
@endsection