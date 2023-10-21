<?php



$nomeDoAluno = $_GET["nomeDoAluno"];
$nota1 = $_GET["nota1"];
$nota2 = $_GET["nota2"];
$nota3= $_GET["nota3"];
$nota4= $_GET["nota4"];


$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

?>
<table border="1">
        <th>Nome do Aluno</th>
        <th>Nota 1</th>
        <th>Nota 2</th>
        <th>Nota 3</th>
        <th>Nota 4</th>
        <th>Média</th>
    <tr>
        <td><?=$nomeDoAluno;?></td>
        <td><?=$nota1;?></td>
        <td><?=$nota2;?></td>
        <td><?=$nota3;?></td>
        <td><?=$nota4;?></td>
        <td><?=$media;?></td>
    </tr>    


    
</table>