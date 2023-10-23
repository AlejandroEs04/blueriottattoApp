<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dist/css/output.css">
    <title>NombrePagina</title>
</head>
<body>
    <header>
        <?php incluirModule("Header", null); ?>
    </header>

    <main>
        <?php echo $contenido; ?>
    </main>

    <footer>

    </footer>

    <script src="build/js/app.js"></script>
</body>
</html>