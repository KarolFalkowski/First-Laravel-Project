<!DOCTYPE html>
<html lang="pl">
@include('partials.head')

<body>
    @include('partials.navi')
    <div id="content">
        <h1>List of recipes</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recipes as $el)
                <tr>
                    <td>{{$el->id}}</td>
                    <td>{{$el->nazwa}}</td>
                    <td>{{$el->opis}}</td>
                    <td><a href = '<?=config('app.url'); ?>/recipes/edit/{{$el->id}}'>Edit</a></td>
                    <td><a href = '<?=config('app.url'); ?>/recipes/show/{{$el->id}}'>Del</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>