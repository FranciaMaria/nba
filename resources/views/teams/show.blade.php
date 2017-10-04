<!DOCTYPE html>
<html>
<head>
	<title>{{$team->name}}</title>
</head>
<body>
    
	<h1>{{$team->name}}</h1>

	<p><strong>Email: </strong>{{$team->email}}</p>
	<p><strong>Adress:</strong> {{$team->adress}}</p>
	<p><strong>city:</strong> {{$team->city}}</p>


    @if(count($team->players))

        <hr/>

        <h4>Players:</h4>

        <ol>

            @foreach($team->players as $player)

                <li>

                    <p>

                        <a href="/player/{{$player->id}}">{{ $player->first_name }} {{$player->last_name }}</a>

                    </p>

                    
                </li>

            @endforeach

        </ol>

    @endif

     @if(count($team->comments))

        <hr/>

        <h4>Comments:</h4>

        <ul class="list-unstyled">

            @foreach($team->comments as $comment)

                <li>

                    <p>

                        <strong>Author:</strong> {{ $comment->user->name }}

                    </p>

                    <p>

                        <strong>Created at:</strong> {{ $comment->created_at }}

                    </p>

                    <p>

                        {{ $comment->content }}

                    </p>

                </li>

            @endforeach

        </ul>

    @endif

    <h2>Add a comment</h2>

      <form method="POST" action="/teams/{{$team->id}}/comments">

        {{ csrf_field() }}

        <div class="form-group">

            <label for="content">Comment content:</label><br>
            <textarea class="form-control" id="content" name="content"></textarea>

            @include('partials.error-message', ['fieldTitle' => 'content'])

        </div>

        <div class="form-group">

            <button type="submit" class="btn btn-primary">Add</button>

        </div>

      </form>




</body>
</html>