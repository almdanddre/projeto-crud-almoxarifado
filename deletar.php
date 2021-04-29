<?php

    include_once 'conecta.php';
    include_once 'function_deletar.php';

    if(isset($_GET['cod_ferramenta']))
    {
        $cod_ferramenta = $_GET['cod_ferramenta'];

        
        echo("Existe o id $cod_ferramenta");
    }
    deletar($cod_ferramenta);
    
?>

<script>
        document.location='http://localhost/PhpProjecto/index.php';
 </script>