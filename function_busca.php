<?php
function pegarPeloCodigo ($cod_ferramenta)
{
    $cod_ferramenta = $_GET['cod_ferramenta'];

        $sql = "SELECT * FROM item_almoxarifado WHERE cod_ferramenta='$cod_ferramenta'";
        $query = mysqli_query($conexao,$sql);;
        
    print_r($query);
}

