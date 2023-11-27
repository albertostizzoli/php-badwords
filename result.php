<?php
$phrase = $_GET['phrase'];
$word = $_GET['word'];

$new_word = str_replace($word, '***', $phrase);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Badwords</title>
</head>
<body>
    <h1 class="text-center">PHP Badwords</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="text-start">Paragrafo vecchio</h4>
                <p>Testo:</p> <?php echo $phrase ?>
                <p>Lunghezza:</p> <?php echo strlen($phrase) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h4 class="text-start">Paragrafo nuovo</h4>
                <p>Testo:</p> <?php echo $new_word ?>
                <p>Lunghezza:</p> <?php echo strlen($new_word) ?>
            </div>
        </div>
    </div>
</body>
</html>