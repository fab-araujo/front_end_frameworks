<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
      $name = "Fabrício";
      $idade = 17;
    ?>

    <?php
      if($idade < 18) {
        echo '<h3>Você não pode entrar aqui!</h3>';
      } else {
        ?>
        <h3>
          Bem-vindo <?php echo $name ?><br>
          Idade: <?php echo $idade ?>
        </h3>
        <?php
      }
    ?>
    
  </body>
</html>