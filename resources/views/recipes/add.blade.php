<!DOCTYPE html>
<html>
@include('partials.head')
<body>
 @include('partials.navi')

 <div id="content">
    <h2>Add new recipe</h2>
    <form class="form-inline" action="<?=config('app.url'); ?>/recipes/save" method="post">
    @csrf
    <p>
        <label for="nazwa"> Name: </label>
        <input id="nazwa" name="nazwa"  size="25" required>
    </p>
    <p>
        <label for="opis"> Description: </label>
        <input type="opis" id="opis" name="opis"  required>
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