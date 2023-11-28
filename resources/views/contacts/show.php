<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Contácto</title>
</head>
<body>
    <h1>Detalle de Contacto</h1>

    <a href="/contacts/<?= $contact['id']?>/edit">Editar</a>

    <p>Nombre: <?= $contact['name'] ?></p>
    <p>Email: <?= $contact['email'] ?></p>
    <p>Teléfono: <?= $contact['phone'] ?></p>

    <form action="/contacts/<?= $contact['id']?>/delete" method="post">
        <button type="submit">Eliminar</button>
    </form>
</body>
</html>