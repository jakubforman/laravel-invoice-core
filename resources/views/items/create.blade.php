<h1>Create item</h1>

<form method="POST" action="/items">
    <!-- FIX CSRF policy -->
@csrf
<!-- name field -->
    <div>
        <label for="name">Název</label>
        <input type="text" id="name" name="name">
    </div>
    <!-- description field -->
    <div>
        <label for="description">Popis</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>
    <!-- price field -->
    <div>
        <label for="price">Cena</label>
        <input type="number" id="price" name="price">
    </div>
    <!-- currency field -->
    <div>
        <label for="currency">Měna</label>
        <select name="currency" id="currency">
            <option value="CZK" selected>CZK</option>
            <option value="EUR">EUR</option>
            <option value="USD">USD</option>
        </select>
    </div>
    <!-- ean field -->
    <div>
        <label for="ean">EAN</label>
        <input type="text" id="ean" name="ean">
    </div>

    <input type="submit" value="Vytvořit">
</form>
