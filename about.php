<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PHP web-site</title>
</head>
<body>
<div class="container py-3">
<?php require "blocks/header.php"?>

<h3>Contact form</h3>
<div class="container mt-5">
<form action="check.php" method="post">
    <input class="form-control" type="email" name="email" placeholder="Enter email"><br>
    <textarea name="message" class="form-control" placeholder="Enter text"></textarea><br>
    <button class="btn btn-success" type="submit" name="send">Send</button>
</form>
</div>


<?php require "blocks/footer.php"?>
</body>
</html>