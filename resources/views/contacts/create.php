<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Contácto</title>
</head>

<body>
    <h1>Crear Contácto</h1>
    <form action="/contacts" method="post">
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="phone">Telefono</label>
            <input type="text" name="phone" id="phone">
        </div>
        <button type="submit">Crear</button>
    </form>
</body>

</html>