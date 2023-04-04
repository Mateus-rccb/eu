<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.html">
</head>
<body>
    <a"></a>
    <?php
    echo "<h2> Exercício 2 </h2>";

    $aluno = array (
        array("Maria","ADS",7.0),
        array("João","CD",5.0),
        array("José","CD",8.0),
        array("Pedro","ADS",2.0),
        array("Paulo","ADS",6.0),
    );



    echo $aluno[0][0].": Curso: ".$aluno[0][1].", Média: ".$aluno[0][2].".<br>";
    echo $aluno[1][0].": Curso: ".$aluno[1][1].", Média: ".$aluno[1][2].".<br>";
    echo $aluno[2][0].": Curso: ".$aluno[2][1].", Média: ".$aluno[2][2].".<br>";
    echo $aluno[3][0].": Curso: ".$aluno[3][1].", Média: ".$aluno[3][2].".<br>";
    echo $aluno[4][0].": Curso: ".$aluno[4][1].", Média: ".$aluno[4][2].".<br>";

   
    
    ?>


</body>
</html>