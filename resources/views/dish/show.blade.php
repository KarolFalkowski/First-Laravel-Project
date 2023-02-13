<!DOCTYPE html>
<html lang="pl">
@include('partials.head')

<body>
    @include('partials.navi')

    <div id="content">
        <h1>Confirmation - Delete Id: {{$dish->id}}</h1>

        <form class="form-inline" action="<?=config('app.url'); ?>/dish/delete/{{$dish->id}}" method="post">
    @csrf
    <p>
        <label for="id"> ID: </label>
        <input id="id" name="id" value="{{$dish->id}}" readonly>
    </p>
    <p>
        <label for="id_przepisu"> Recipes id: </label>
        <input id="id_przepisu" name="id_przepisu" value="{{$dish->id_przepisu}}" size="25" readonly>
    </p>
    <p>
        <label for="id_wykonawcy"> Contrator id: </label>
        <input type="id_wykonawcy" id="id_wykonawcy" name="id_wykonawcy" value="{{$dish->id_wykonawcy}}" readonly>
    </p>
    <p><button type="submit" class="btn btn-primary mb-2">Delete</button></p>
    </form>
    
    </div>

</body>

</html>