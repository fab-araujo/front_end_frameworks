<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
      $soma = 0;
    ?>

    <?php
      for($i = 0; $i <= 100; $i++){
        $soma = $soma + $i;
      }
    ?>

    <p>
      O resultado é: <?=$soma?>
    </p>
    
  </body>
</html>