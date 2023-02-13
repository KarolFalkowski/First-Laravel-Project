<!DOCTYPE html>
<html lang="pl">
@include('partials.head')

<body>
    @include('partials.navi')
    <div id="content">
    <h1>Edit menu</h1>
    <form class="form-inline" action="<?=config('app.url'); ?>/menu/update/{{$menu->id}}" method="post">
    @csrf
    <p>
        <label for="id"> ID: </label>
        <input id="id" name="id" value="{{$menu->id}}" readonly>
    </p>
    <p>
        <label for="nazwa"> Nazwa: </label>
        <input id="nazwa" name="nazwa"  size="25" value="{{$menu->nazwa}}" required>
    </p>
    <p>
        <button type="submit" class="btn btn-primary mb-2">Save</button>
    </p>
    </form>
    <p>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </p>        
    </div>
</body>

</html>