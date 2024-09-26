<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP BadWords</title>
</head>
<body>
    <form action="./result.php" method="GET">
        
        
        <div class="my-text-container">
            <label for="text" style="display: block; padding-bottom: 10px">
                Inserisci una parola
            </label>
            <input type="text" value="" name="yourWord" placeholder="Inserisci una parola">
        </div>
        <div class="my-textarea-container">
            <label for="yourTextArea" style="display: block; padding-bottom: 10px">
                Inserisci un testo
            </label>        
            <textarea name="yourTextArea" class="my-textarea" placeholder="Inserisci un testo" rows="4" cols="30">
                
            </textarea>
        </div>

        <button type="submit">
            Invia
        </button>

    </form>
</body>
</html>