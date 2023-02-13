<!DOCTYPE html>
<html lang="pl">
@include('partials.head')

<body>
    @include('partials.navi')
    <div id="content">
        <h1>List of contrator</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contrator as $el)
                <tr>
                    <td>{{$el->id}}</td>
                    <td>{{$el->nazwa}}</td>
                    <td><a href = '<?=config('app.url'); ?>/contrator/edit/{{$el->id}}'>Edit</a></td>
                    <td><a href = '<?=config('app.url'); ?>/contrator/show/{{$el->id}}'>Del</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>