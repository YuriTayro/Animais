<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';

        $m = new Mamifero();
        $m->setPeso(33.5);
        $m->locomover();

        $a = new Ave();
        $a->locomover();

        $r = new Reptil();
        $r->locomover();

       

    ?>
    </pre>
    
</body>
</html>