<!DOCTYPE html>
<html>
@include('partials.head')
<body>
 @include('partials.navi')

 <div id="content">
    <h2>Add new menu</h2>
    <form class="form-inline" action="<?=config('app.url'); ?>/menu/save" method="post">
    @csrf
    <p>
        <label for="nazwa"> Name: </label>
        <input id="nazwa" name="nazwa"  size="25" required>
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