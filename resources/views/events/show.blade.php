<!DOCTYPE html>
<html lang="pl">
@include('partials.head')

<body>
    @include('partials.navi')

    <div id="content">
        <h1>Confirmation - Delete Id: {{$events->id}}</h1>

        <form class="form-inline" action="<?=config('app.url'); ?>/events/delete/{{$events->id}}" method="post">
    @csrf
    <p>
        <label for="id"> ID: </label>
        <input id="id" name="id" value="{{$events->id}}" readonly>
    </p>
    <p>
        <label for="nazwa"> Name: </label>
        <input id="nazwa" name="nazwa" value="{{$events->nazwa}}" size="25" readonly>
    </p>
    <p>
        <label for="data"> Data: </label>
        <input type="data" id="data" name="data" value="{{$events->data}}" readonly>
    </p>
    <p>
        <label for="ilosc_gosci"> Number of guests: </label>
        <input type="numeric" id="ilosc_gosci" name="ilosc_gosci" value="{{$events->ilosc_gosci}}" readonly>
    </p>
    <p>
        <label for="id_menu"> Menu id: </label>
        <input id="id_menu" name="id_menu" value="{{$events->id_menu}}" readonly>
    </p>
    <p><button type="submit" class="btn btn-primary mb-2">Delete</button></p>
    </form>
    
    </div>

</body>

</html>