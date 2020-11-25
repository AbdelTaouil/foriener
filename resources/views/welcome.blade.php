<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    
@include('composant.nav')

    <form action="/genre" method="post">
        @csrf
        Genre :<input type="text" name="genre">
        <button type="submit">Créer</button>
    </form>


</body>
</html>