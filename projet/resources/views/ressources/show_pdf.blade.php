<!DOCTYPE html>
<html>
<head>
	<title>Hi</title>
</head>
<body>
<h1>{{$ressource->slug }}</h1>

@foreach($user as $users)
{{ $ressource->date_creation->format('d/m/Y') }} by {{$users->name }}
@endforeach





<img src="{{asset('img/'.$ressource->nom_image.'.jpg')}}" alt=""  width="100" height="100"/>

@foreach($categorie as $categories)

{{$categories->nom}}
@endforeach
<br />
{{$ressource->poids_image}} Mo
<br />
{{$ressource->description}}

</body>
</html>
