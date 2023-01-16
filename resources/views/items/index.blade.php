<h1>Items</h1>
<table>
    @foreach($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->currency}}</td>
            <td>{{$item->price}}</td>
        </tr>
    @endforeach
</table>
