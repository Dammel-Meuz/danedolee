<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
</head>
<body>
    @if(session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif
    <h1>{{ $ouvrier->firstName }}</h1>
    <a href="{{ route('ouvrier.logout', $ouvrier->id) }}">ajouter pprofile</a>

    <h2></h2>

</body>
</html>


