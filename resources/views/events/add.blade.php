<!DOCTYPE html>
<html>
@include('partials.head')
<body>
 @include('partials.navi')

 <div id="content">
    <h2>Add event</h2>
    <form class="form-inline" action="<?=config('app.url'); ?>/events/save" method="post">
    @csrf
    <p>
        <label for="nazwa"> Name: </label>
        <input id="nazwa" name="nazwa"  size="25" required>
    </p>
    <p>
        <label for="data"> Data: </label>
        <input type="date" id="data" name="data"  required>
    </p>
    <p>
        <label for="ilosc_gosci"> Number of guests: </label>
        <input type="numeric" id="ilosc_gosci" name="ilosc_gosci"  required>
    </p>
    <p>
    <td>Menu</td>
	<td>
		<select id="id_menu" name="id_menu">
        @foreach($menus as $els)
				<option  value = '{{$els->id}}'>
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