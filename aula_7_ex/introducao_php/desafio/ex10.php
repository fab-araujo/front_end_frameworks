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
      foreach($alunos as $nomeAluno=>$nota){
        if($nota < 4){
          echo "<p>".$nomeAluno.": reprovado</p>";
        }else if($nota >= 4 && $nota < 7){
          echo "<p>".$nomeAluno.": prova final</p>";
        }else{
          echo "<p>".$nomeAluno.": aprovado</p>";
        }
        
      }
    ?>
    
  </body>
</html>