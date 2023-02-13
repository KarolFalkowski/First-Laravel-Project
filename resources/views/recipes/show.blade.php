<!DOCTYPE html>
<html lang="pl">
@include('partials.head')

<body>
    @include('partials.navi')

    <div id="content">
        <h1>Confirmation - Delete Id: {{$recipes->id}}</h1>

        <form class="form-inline" action="<?=config('app.url'); ?>/recipes/delete/{{$recipes->id}}" method="post">
    @csrf
    <p>
        <label for="id"> ID: </label>
        <input id="id" name="id" value="{{$recipes->id}}" readonly>
    </p>
    <p>
        <label for="nazwa"> Name: </label>
        <input id="nazwa" name="nazwa" value="{{$recipes->nazwa}}" size="25" readonly>
    </p>
    <p>
        <label for="opis"> Description: </label>
        <input type="opis" id="opis" name="opis" value="{{$recipes->opis}}" readonly>
    </p>
    <p><button type="submit" class="btn btn-primary mb-2">Delete</button></p>
    </form>
    
    </div>

</body>

</html>