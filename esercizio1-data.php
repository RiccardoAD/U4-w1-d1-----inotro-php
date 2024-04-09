<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>

        <?php

        setlocale(LC_TIME, 'it_IT.utf8');  // impostare la localizzazione in italiano
        echo date('l jS \of F Y h:i:s A')

        ?>
    </h1>
</body>

</html>