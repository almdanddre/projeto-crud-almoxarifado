<!DOCTYPE html>
<?php
    include_once 'conecta.php';
    include_once 'function_listar.php';
?>
<html>
    <head>
        <title>Listar</title>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="css/css.css" />
    </head>
    <body class="container">
        <div class="meio">
            <a  href="index.php">Cadastrar</a> | <a href="listar.php">Listar</a> | <a href="buscar.php">Pesquisar</a> | <a href="editar.php">Editar</a>
        </div>
        
        <?php
            
            $dados = listar();
            if(count($dados) != NULL){
                $d = new ArrayIterator($dados);
            }
            else{
                return;
            }
        ?>
        
        <table border>
            <thead>
                <tr>
                    <td style="background: #ccc">Código</td>
                    <td style="background: #ccc">Nome</td>
                    <td style="background: #ccc">Marca</td>
                    <td style="background: #ccc">Opções</td>
                </tr>
            </thead>
            
            <?php while ($d->valid()){?>
            
            <tbody>
                <tr>
                    <td><?php echo $d->current()->cod_ferramenta ?></td>
                    <td><?php echo utf8_encode($d->current()->nome_ferramenta) ?></td>
                    <td><?php echo $d->current()->marca_ferramenta ?></td>
                    <td><a href="form_edit.php?cod_ferramenta=<?php echo $d->current()->cod_ferramenta; ?>">Editar</a></td>
                </tr>
                <?php $d ->next();} ?>
            </tbody>
           
        </table>
    </body>
</html>

