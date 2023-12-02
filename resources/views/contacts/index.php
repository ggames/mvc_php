<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Listado de Contactos</h1>

        <form action="/contacts">
            <div class="input-group mb-3">
                <input type="text" name="search" class="form-control" placeholder="Escriba el contacto que quiera buscar">
                <button class="btn btn-outline-secondary" type="submit" >Buscar</button>
            </div>
        </form>

         <a href="/contacts/create">Crear Contacto</a> 
        <ul>
            <?php foreach ($contacts['data'] as $contact) : ?>
                <li>
                    <a href="/contacts/<?= $contact['id'] ?>">
                        <?= $contact['name'] ?>
                    </a>

                </li>
            <?php endforeach; ?>
        </ul>


        
         <?php
           $paginate = 'contacts';
           require_once '../resources/views/assets/pagination.php';
        ?> 
        
    </div>
</body>

</html>