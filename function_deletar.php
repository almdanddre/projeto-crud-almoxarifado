<?php

function deletar($cod_ferramenta)
{
   // $sql = "DELETE FROM tbl_nomes WHERE id_nome = '$id'";
   // $query = mysqli_query($sql);
    
    
    $servidor="localhost";
    $username="root";
    $password="";
    $banco="tbl_almoxarifado";

     $conexao = mysqli_connect($servidor, $username, $password, $banco);
    
    $sql = "DELETE FROM item_almoxarifado WHERE cod_ferramenta = '$cod_ferramenta'";
    $query = mysqli_query($conexao, $sql);
    
    if($query)
    {
        echo "<script> alert('Registro Deletado com Sucesso!'); </script>";  
        ?>

        <script src="../js/jquery-1.8.3.min.js"></script>
        <script>
                document.location='listar.php';
        </script>

        <?php 
    }
    else{
        echo "<script> alert('Erro ao Deletar!'); </script>";
        }
}
?>