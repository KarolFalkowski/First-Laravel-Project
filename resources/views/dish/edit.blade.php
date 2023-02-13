<!DOCTYPE html>
<html lang="pl">
@include('partials.head')

<body>
    @include('partials.navi')
    <div id="content">
    <h1>Edit dish</h1>
    <form class="form-inline" action="<?=config('app.url'); ?>/dish/update/{{$dish->id}}" method="post">
    @csrf
    <p>
        <label for="id"> ID: </label>
        <input id="id" name="id" value="{{$dish->id}}" readonly>
    </p>
    <p>
    <td>Recipe</td>
	<td>
		<select id="id_przepisu" name="id_przepisu" deful>
        @foreach($recipe as $els)
				<option value="{{$els->id}}">
                {{$els->nazwa}}
				</option>
        @endforeach
		</select>
	</td>
    </p>
    <p>
    <td>Contractor</td>
	<td>
		<select id="id_wykonawcy" name="id_wykonawcy">
        @foreach($con as $els)
				<option value="{{$els->id}}">
                {{$els->nazwa}}
				</option>
        @endforeach
		</select>
	</td>
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