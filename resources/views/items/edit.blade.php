<h1>Edit: {{$item->name}}</h1>

<form method="POST" action="/items/{{$item->id}}">
    <!-- FIX CSRF policy -->
    @csrf
    <!-- name field -->
    <div>
        <label for="name">Název</label>
        <input type="text" id="name" name="name" value="{{$item->name}}">
    </div>
    <!-- description field -->
    <div>
        <label for="description">Popis</label>
        <textarea name="description" id="description" cols="30" rows="10">{{$item->description}}</textarea>
    </div>
    <!-- price field -->
    <div>
        <label for="price">Cena</label>
        <input type="number" id="price" name="price" value="{{$item->price}}">
    </div>
    <!-- currency field -->
    <div>
        <label for="currency">Měna</label>
        <select name="currency" id="currency">
            <option value="CZK" {{ $item->currency == "CZK" ? "selected" : null }}>CZK</option>
            <option value="EUR" {{ $item->currency == "EUR" ? "selected" : null }}>EUR</option>
            <option value="USD" {{ $item->currency == "USD" ? "selected" : null }}>USD</option>
        </select>
    </div>
    <!-- ean field -->
    <div>
        <label for="ean">EAN</label>
        <input type="text" id="ean" name="ean" value="{{$item->ean}}">
    </div>

    <input type="submit" value="Uložit">
</form>
