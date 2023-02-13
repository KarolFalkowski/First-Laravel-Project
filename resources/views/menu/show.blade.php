<!DOCTYPE html>
<html lang="pl">
@include('partials.head')

<body>
    @include('partials.navi')

    <div id="content">
        <h1>Confirmation - Delete Id: {{$menu->id}}</h1>

        <form class="form-inline" action="<?=config('app.url'); ?>/menu/delete/{{$menu->id}}" method="post">
    @csrf
    <p>
        <label for="id"> ID: </label>
        <input id="id" name="id" value="{{$menu->id}}" readonly>
    </p>
    <p>
        <label for="nazwa"> Name: </label>
        <input id="nazwa" name="nazwa" value="{{$menu->nazwa}}" size="25" readonly>
    </p>

    <p><button type="submit" class="btn btn-primary mb-2">Delete</button></p>
    </form>
    
    </div>

</body>

</html>