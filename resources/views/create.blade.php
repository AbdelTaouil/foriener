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

    <form action="/employer/store" method="post">

        @csrf
        <section class="container">
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">nom</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="staticEmail" style="width: 250px" name="name">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Age</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword" style="width: 250px" name="age">
              </div>
            </div>
            <div class="form-group row">
                <label for="abdel" class="col-sm-2 col-form-label">genre</label>
                <select class="form-control"  style="width: 250px" name="genre_id">
                    @foreach ($genre as $item)
                    <option value="{{$item->id}}">{{$item->type}}</option>
                    @endforeach
                </select>
              </div>
            
              <button type="submit"> créer</button>
            </section>

    </form>
    

</body>
</html>