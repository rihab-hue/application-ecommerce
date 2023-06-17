@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.article.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.article.fields.titre') }}
                    </th>
                    <td>
                        {{ $article->titre}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.article.fields.prix') }}
                    </th>
                    <td>
                        {{ $article->prix }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.article.fields.formats') }}
                    </th>
                    <td>
                        @forelse($article->formats as $item)
                            {{ $item->nom . ' (' . (!is_null($item->pivot->prix) ? ('prix: ' . $item->pivot->prix) : '') . (!is_null($item->pivot->nomber) ? (', nombres: ' . $item->pivot->nomber) : '') . ')'}}<br>
                        @empty
                        @endforelse
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.article.fields.papiers') }}
                    </th>
                    <td>
                        @forelse($article->papiers as $item)
                            {{ $item->nom . ' (' . (!is_null($item->pivot->prix) ? ('prix: ' . $item->pivot->prix) : '') . (!is_null($item->pivot->nomber) ? (', nombres: ' . $item->pivot->nomber) : '') . ')'}}<br>
                        @empty
                        @endforelse
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.article.fields.impressions') }}
                    </th>
                    <td>
                        @forelse($article->impressions as $item)
                            {{ $item->nom . ' (' . (!is_null($item->pivot->prix) ? ('prix: ' . $item->pivot->prix) : '') . (!is_null($item->pivot->nomber) ? (', nombres: ' . $item->pivot->nomber) : '') . ')'}}<br>
                        @empty
                        @endforelse
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.article.fields.pelliculages') }}
                    </th>
                    <td>
                        @forelse($article->pelliculages as $item)
                            {{ $item->nom . ' (' . (!is_null($item->pivot->prix) ? ('prix: ' . $item->pivot->prix) : '') . (!is_null($item->pivot->nomber) ? (', nombres: ' . $item->pivot->nomber) : '') . ')'}}<br>
                        @empty
                        @endforelse
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.article.fields.nbr_couleurs') }}
                    </th>
                    <td>
                        @forelse($article->nbr_couleurs as $item)
                            {{ $item->nbr_coul . ' (' . (!is_null($item->pivot->prix) ? ('prix: ' . $item->pivot->prix) : '') . (!is_null($item->pivot->nomber) ? (', nombres: ' . $item->pivot->nomber) : '') . ')'}}<br>
                        @empty
                        @endforelse
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.article.fields.nbr_exemplaires') }}
                    </th>
                    <td>
                        @forelse($article->nbr_exemplaires as $item)
                            {{ $item->nbr_exp . ' (' . (!is_null($item->pivot->prix) ? ('prix: ' . $item->pivot->prix) : '') . (!is_null($item->pivot->nomber) ? (', nombres: ' . $item->pivot->nomber) : '') . ')'}}<br>
                        @empty
                        @endforelse
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection