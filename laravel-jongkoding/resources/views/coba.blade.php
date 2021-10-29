<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>awdwd</title>
</head>
<body>
	<!-- @if($name == "") tidak perlu kurawal walaupun banyak -->
		<!-- <h1>Halo, kamu siapa?</h1> -->
	<!-- @elseif($name != "") -->
		<!-- <h1>Halo, aku {{$name}}</h1> -->
	<!-- @endif -->

	foreach($siswa as $s)
		<h5 @class([
			'female' => ($s->gender =='female')
		])>{{$s->name}}</h5>
		<p>{{$s->age}}</p>

	endforeach
</body>
</html>