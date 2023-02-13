<!DOCTYPE html>
<html lang="pl">
@include('partials.head')

<body>
    @include('partials.navi')
    <div id="content">
        <h1>List of dishs</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Recipes id</th>
                    <th>Contrator id</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dish as $el)
                <tr>
                    <td>{{$el->id}}</td>
                    <td>{{$el->recipe->nazwa}}</td>
                    <td>{{$el->contractor->nazwa}}</td>
                    <td><a href = '<?=config('app.url'); ?>/dish/edit/{{$el->id}}'>Edit</a></td>
                    <td><a href = '<?=config('app.url'); ?>/dish/show/{{$el->id}}'>Del</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>