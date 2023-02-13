<!DOCTYPE html>
<html lang="pl">
@include('partials.head')

<body>
    @include('partials.navi')
    <div id="content">
        <h1>List of events</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Data</th>
                    <th>Number of guests</th>
                    <th>Menu</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $el)
                <tr>
                    <td>{{$el->id}}</td>
                    <td>{{$el->nazwa}}</td>
                    <td>{{$el->data}}</td>
                    <td>{{$el->ilosc_gosci}}</td>
                    <td>{{$el->menu->nazwa}}</td>
                    <td><a href = '<?=config('app.url'); ?>/events/edit/{{$el->id}}'>Edit</a></td>
                    <td><a href = '<?=config('app.url'); ?>/events/show/{{$el->id}}'>Del</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>