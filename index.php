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
    <div class="conteiner mt-5">
    <h3 class="mb-5"> Our text</h3>
    <div class="d-flex flex-wrap">
    <?php
    for($i = 0; $i < 6; $i++):
    ?>
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Any text</h4>
          </div>
          <div class="card-body">
              <img src="image/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail">
            <ul class="list-unstyled mt-3 mb-4">
              <li>First option</li>
              <li>Second option</li>
              <li>Third option</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">More text</button>
          </div>
        </div>
    <?php endfor; ?>
    </div>
</div>
</div>
<?php require "blocks/footer.php"?>
</body>
</html>