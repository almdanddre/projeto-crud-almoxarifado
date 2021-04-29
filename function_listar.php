<meta charset="utf-8" />
<?php
header("Content-type: text/html;charset=utf-8");
function listar()
{
        
        
    $servidor="localhost";
    $username="root";
    $password="";
    $banco="tbl_almoxarifado";

       $conexao = mysqli_connect($servidor, $username, $password, $banco);
       $query= mysqli_query($conexao,"SELECT * FROM item_almoxarifado ORDER BY cod_ferramenta ASC ");
        
        
       $nomes = array();      
        if(mysqli_num_rows($query)>0)
        {
            while($dados = mysqli_fetch_object($query))
            {
                $nomes[] = $dados;
            }
            return $nomes;
        }
        
        else{
            echo "Não há dados armazenados";
        }
}
?>

