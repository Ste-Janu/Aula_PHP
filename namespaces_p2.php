<?php

    require "./bibliotecas/lib1/lib1.php";
    require "./bibliotecas/lib2/lib2.php";

    use A\Cliente as c1;
    use B\Cliente as c2;

    $c = new c2();
    print_r($c);
    echo $c->__get('nome')
?>