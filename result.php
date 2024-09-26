<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BadWords</title>
</head>
<body>
    <h1>
        Il tuo risultato
    </h1>

    <div>
        La parola che hai scelto è: <?php echo $_GET["yourWord"]; ?> .
        La lunghezza della parola che hai scelto è <?php echo strlen($_GET["yourWord"]); ?>
    </div>

    <div>
        Il testo che hai scritto è: <?php echo $_GET["yourTextArea"]; ?> .
        La lunghezza del testo che hai scritto è <?php echo strlen($_GET["yourTextArea"]); ?>
    </div>

    <div>
        Il testo censurato è: <?php echo str_replace("dolor", "***", $_GET["yourTextArea"]); ?> .
        La lunghezza del testo che hai scritto è <?php echo strlen(str_replace("dolor", "***", $_GET["yourTextArea"])); ?>
    </div>
</body>
</html>