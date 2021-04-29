<!DOCTYPE html>
<?php
header("Content-type: text/html;charset=utf-8");
include_once 'conecta.php';

    $nome_ferramenta  = $_POST['nome_ferramenta'];
    $marca_ferramenta  = $_POST['marca_ferramenta'];
    $cod_ferramenta  = $_GET['cod_ferramenta'];
    
    
        $sql = "UPDATE item_almoxarifado
				SET nome_ferramenta='$nome_ferramenta', marca_ferramenta='$marca_ferramenta'
				WHERE cod_ferramenta ='$cod_ferramenta';";
        
        $query = mysqli_query($conexao,$sql);
        
        if($query):
           echo "<script> alert('Registro Editado com Sucesso!'); </script>";
        
        else:
            echo "<script> alert('Erro ao Registrar!'); </script>";
        endif;
        
        
?>

<script src="../js/jquery-1.8.3.min.js"></script>
    <script>
            document.location='http://localhost/PhpProjecto/editar.php';
    </script>