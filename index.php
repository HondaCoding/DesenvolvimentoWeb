<style>
.hello{
    color : blue;
}
</style>

<?php
    echo "<p class=hello>Hello world</p>";
    echo " <br>Sexta - Feira";


    //VARIAVEL
    $site = "https://senac.blackboard.com/";
    $ano = 2023;
    $valorCurso = 500.52;

    echo "Site: $site";
    echo "<br>Ano: " . $ano;//CONCATENAÇÃO
    echo "<br>Valor do curso R$: " . $valorCurso;
?>
<?php
    $valor = 54.56;
    $quantidade = 45;
    $total = $valor * $quantidade
 ?>   
<p>
    <b>Valor</b> = <?=$valor;?>
    <br><b>Quantidade = </b> <?=$quantidade;?>
    <br><b>Total = R$ </b> <?=$total;?>
</p>

<form action="calcularTotal.php">
 <p>Nome do Produto
    <input type = "text" name = "nomeProduto"> 
</P>   
<p>Valor
    <input type = "text" name = "valor"> 
</P> 
<p>Quantidade
    <input type = "text" name = "quantidade"> 
</p>     
<input type = "submit" value = "CALCULAR"> 
</form>


