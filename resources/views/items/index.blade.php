<h1>Items</h1>
<table>
    @foreach($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->currency}}</td>
            <td>{{$item->price}}</td>
            <td>
                <a href="{{ route("items.edit", $item->id) }}">Edit</a>
                <a href="{{ route("items.show", $item->id) }}">View</a>
                <a href="#">Delete</a>
            </td>
        </tr>
    @endforeach
</table>
