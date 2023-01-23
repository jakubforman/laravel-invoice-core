<h1>{{$item->name}}</h1>

<div>
    <p>{{$item->description}}</p>
</div>

<ul>
    <li>EAN: {{$item->ean}}</li>
    <li>PRICE: {{$item->price}} ({{$item->currency}})</li>
    <li>CREATED: {{$item->created_at}}</li>
    <li>UPDATED: {{$item->updated_at}}</li>
    @if($item->deleted_at != null)
        <li>DELETED: {{$item->deleted_at}}</li>
    @endif
</ul>
