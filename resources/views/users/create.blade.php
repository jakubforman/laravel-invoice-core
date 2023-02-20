<h1>Create users</h1>

<form method="POST" action="/users">
    <!-- FIX CSRF policy -->
@csrf
<!-- name field -->
    <div>
        <label for="name">Název</label>
        <input type="text" id="name" name="name">
    </div>

    <!-- email field -->
    <div>
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
    </div>



    <input type="submit" value="Vytvořit">
</form>
