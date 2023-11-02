<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dist/css/output.css">
    <title>NombrePagina</title>
</head>
<body class="bg-zinc-900" >
    <header class="top-0 sticky bg-zinc-950">
        <?php incluirModule("Header", null); ?>
    </header>

    <div class="grid grid-cols-2" >
        <aside>
            <img src="build/img/imagenInicio.webp">
        </aside>

        <main>
            <?php echo $contenido; ?>
        </main>
    </div>
    

    <footer>

    </footer>

    <script src="build/js/app.js"></script>
</body>
</html>