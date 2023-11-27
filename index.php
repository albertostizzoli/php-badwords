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
        <form action="./result.php" method="GET">
            <div class="input-group">
                <span class="input-group-text">Paragrafo</span>
                <textarea class="form-control" name="phrase"></textarea>
            </div>
            <div class="input-group">
                <span class="input-group-text">Parola nascosta</span>
                <input type="text" class="form-control" name="word">
            </div>
            <div>
                <button name="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
</body>
</html>