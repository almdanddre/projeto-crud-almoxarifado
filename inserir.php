<!DOCTYPE html>
<?php
header("Content-type: text/html;charset=utf-8");
include_once 'conecta.php';
    $cod_ferramenta = $_POST['cod_ferramenta'] ;
    $nome_ferramenta = $_POST['nome_ferramenta'] ;
    $marca_ferramenta = $_POST['marca_ferramenta'] ;

        $sql = "insert into item_almoxarifado (cod_ferramenta, nome_ferramenta, marca_ferramenta) values('$cod_ferramenta', '$nome_ferramenta', '$marca_ferramenta')";
        $query = mysqli_query($conexao, $sql);
        
        if($query):
           echo "<script> alert('Registro Salvo com Sucesso!'); </script>";
        
        else:
            echo "<script> alert('Erro ao Registrar!'); </script>";
        endif; 
?>
<script src="../js/jquery-1.8.3.min.js"></script>
    <script>
            document.location='http://localhost/PhpProjecto/index.php';
    </script>