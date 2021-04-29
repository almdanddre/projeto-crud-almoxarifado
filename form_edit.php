<?php

    include_once 'conecta.php';
    include_once 'function_listar.php';

    if(isset($_GET['cod_ferramenta']))
    {
        $cod_ferramenta = $_GET['cod_ferramenta'];


    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Banco de Dados</title>
        <meta charset="UTF-8" />
        <link type="text/css" rel="stylesheet" href="css/css.css" />
    </head>
    <body class="container2">
        
        <section style="text-align: center">
            <div class="meio">
                <a  href="../index.php">Cadastrar</a> | <a href="../listar.php">Listar</a> | <a href="../buscar.php">Pesquisar</a> | <a href="../editar.php">Editar</a>
            </div>
            <form action="update.php?cod_ferramenta=<?php echo $cod_ferramenta ?>" method="post">
                <fieldset>
                    <legend>Formulário de Cadastro</legend>
                    
                    <?php
     
                        $sql =mysqli_query($conexao,"SELECT * FROM item_almoxarifado WHERE cod_ferramenta = $cod_ferramenta");

                        while ($resultado = mysqli_fetch_assoc($sql)){
                        $cod_ferramenta = $resultado['cod_ferramenta'];    
                        $nome_ferramenta = $resultado['nome_ferramenta'];
                        $marca_ferramenta = $resultado['marca_ferramenta'];
                    ?>
                   
                    <label>Nome</label>
                    <input type="text" name="nome_ferramenta" value="<?php echo utf8_encode($nome_ferramenta) ;?>"/>
                    
                    
                    <label>Marca</label>
                    <input tabindex="1" type="text" name="marca_ferramenta"  value="<?php echo ($marca_ferramenta) ;?>"/>
                    
                    <input type="submit" name="cadastra" value="Salvar" />
                    
                   <?php
                        }
                    ?>

                    <br />
                    
                </fieldset>
            </form>
        </section>
    </body>
    
</html>
