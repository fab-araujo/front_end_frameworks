<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
      $alunos = [
        "Aluno 1",
        "Aluno 2",
        "Aluno 3",
        "Aluno 4"
      ];
    ?>

    <?php
      for($i = 0; $i < 4; $i++){
        echo $alunos[$i]."<br>";
      }
    ?>
    
  </body>
</html>