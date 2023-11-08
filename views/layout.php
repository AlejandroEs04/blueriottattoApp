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
    <div class="flex flex-col md:flex-row" >
        <aside class="flex max-h-80 md:max-h-none md:h-screen md:w-1/3" >
            <img src="build/img/imagenInicio.webp" class="object-cover" >
        </aside>

        <div class="md:w-2/3">
            <header class="top-0 sticky shadow-xl">
                <?php incluirModule("Header", null); ?>
            </header>

            <main  >
                <?php echo $contenido; ?>
            </main>
        </div>
        
    </div>
    

    <footer>

    </footer>

    <script src="build/js/app.js"></script>
</body>
</html>