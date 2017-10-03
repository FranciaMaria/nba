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
</body>
</html>