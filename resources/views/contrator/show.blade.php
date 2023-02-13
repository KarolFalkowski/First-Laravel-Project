<!DOCTYPE html>
<html lang="pl">
@include('partials.head')

<body>
    @include('partials.navi')

    <div id="content">
        <h1>Confirmation - Delete Id: {{$contrator->id}}</h1>

        <form class="form-inline" action="<?=config('app.url'); ?>/contrator/delete/{{$contrator->id}}" method="post">
    @csrf
    <p>
        <label for="id"> ID: </label>
        <input id="id" name="id" value="{{$contrator->id}}" readonly>
    </p>
    <p>
        <label for="nazwa"> Name: </label>
        <input id="nazwa" name="nazwa" value="{{$contrator->nazwa}}" size="25" readonly>
    </p>
    <p><button type="submit" class="btn btn-primary mb-2">Delete</button></p>
    </form>
    
    </div>

</body>

</html>