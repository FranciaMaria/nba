<!DOCTYPE html>
<html>
<head>
	<title>{{$player->first_name}} {{$player->last_name }}</title>
</head>
<body>
	<p>
		<strong>First name:</strong> {{ $player->first_name }}
    </p>

    <p>

    	<strong>Last name:</strong> {{ $player->last_name }}

    </p>

    <p>

    	<strong>Email:</strong> {{ $player->email }}

    </p>

    <p>

    	<strong>Team:</strong> <a href="/teams/{{$player->team->id}}">{{ $player->team->name }}</a>

    </p>

</body>
</html>

