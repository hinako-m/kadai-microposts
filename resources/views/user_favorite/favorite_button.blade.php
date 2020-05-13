<div class="btn-toolbar">
    <div class="btn-group">
    @if (Auth::user()->add_favorite($micropost->id))
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' =>  "btn btn-success btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-info btn-block"]) !!}
        {!! Form::close() !!}
    @endif
    </div>
</div>
