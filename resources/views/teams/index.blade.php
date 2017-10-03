<!DOCTYPE html>
<html>
<head>
	<title>Teams</title>
</head>
<body>
	<h1>Teams</h1>
	<ol>
		@foreach($teams as $team)
			<li><a href="/{{$team->id}}/">{{$team->name}}</a></li>
		@endforeach
	</ol>
</body>
</html>