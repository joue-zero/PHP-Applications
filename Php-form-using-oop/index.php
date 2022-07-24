<?php
    require_once __DIR__ . "/vendor/autoload.php";



    $form = new src\Form("/login.php", "get");
    $form->addElement(new src\InputText('firstname', 'First name'));
    $form->addElement(new src\InputText('email', 'Email'));
    $form->addElement(new src\InputPass('password', 'Password'));
    $form->addElement(new src\Button("Submit"));
    ?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Form Widget</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body>
    <div class="container pt-3">
        <h1 class="text-danger mb-3 text-center">
            Watch Out!
        </h1>
        <p class="text-success">This Is A Form Created With PHP Applying OOP-Concept </p>
    <?php echo $form->render() ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
    </html>