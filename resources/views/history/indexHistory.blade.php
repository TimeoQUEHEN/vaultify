<x-layout>
    <div>
        <div>
            <h1>Titre</h1>
        </div>
        @if(!empty($histoires))
            {{--LES COMMENTAIRES SONT POUR LE FILTRAGE MAIS C'EST PAS LE BON--}}
            <h4>Filtrage par genre</h4>
            <form action="{{route('history.index')}}" method="get">
                <select name="nom_genre">
                    <option value="All" @if($genre == 'All') selected @endif>-- Tout genre --</option>
                    @foreach($genres_possibles as $gp)
                        <option value="{{$gp}}" @if($genre == $gp) selected @endif>{{$gp}}</option>
                    @endforeach
                </select>
                <input type="submit" value="OK">
            </form>
            <div>
                @foreach($histoires as $histoire)
                    <div>{{$histoire->titre}}</div>
                    <div>{{$histoire->pitch}}</div>
                    <div>
                        <button>
                            <a href="{{route('history.show', [$histoire->id, 'action' => 'show'])}}">AFFICHER</a>
                        </button>
                        @can('update',$histoire)
                            <button>
                                <a href="{{route('history.edit', ['history'=>$histoire->id])}}">EDIT</a>
                            </button>
                        @endcan
                    </div>
                @endforeach
            </div>
        @else
            <h3>Là y a pas d'histoire</h3>
        @endif
    </div>
</x-layout>
