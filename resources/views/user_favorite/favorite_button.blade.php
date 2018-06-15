   @if  (Auth::user()->is_favorite($micropost->id))
        {!! Form::open(['route' => ['users.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['users.favorite',$micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-info btn-xs "]) !!}
        {!! Form::close() !!}
    @endif
    

