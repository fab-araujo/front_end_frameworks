<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
      $alunos = [
        "Aluno 1" => 10,
        "Aluno 2" => 7,
        "Aluno 3" => 5,
        "Aluno 4" => 6
      ]
    ?>

    <?php
      foreach($alunos as $chave=>$valor){
        echo "<p>".$chave.": ".$valor."</p>";
      }
    ?>
    
  </body>
</html>