<!doctype html>
<html>
    <head>
    <title>Buscar</title>
    <meta charset="UTF-8" />
    <link type="text/css" rel="stylesheet" href="css/css.css" />
    </head>
    <body class="container3">
    <a  href="index.php">Cadastrar</a> | <a href="listar.php">Listar</a> | <a href="buscar.php">Pesquisar</a> | <a href="editar.php">Editar</a>
    <form class="meio" action="buscar.php" method="POST" >
    Insira o código:
    <input type="text" name="buscar" id="busca" />
     <input type="submit" name="button"  value="Buscar" />
     <input type="hidden" name="acao" id="hiddenField" value="buscar" />
     
    </form>

    <?php
    
    include_once 'conecta.php';
        if(isset($_POST['acao']) && $_POST['acao'] == 'buscar')
        {
            $pesquisa = $_POST['buscar'];

            $sql = mysqli_query($conexao,"SELECT * FROM item_almoxarifado WHERE cod_ferramenta like'%$pesquisa%' or nome_ferramenta like'%$pesquisa%' ");
               
            while ($resultado = mysqli_fetch_assoc($sql)){
            $cod_ferramenta = $resultado['cod_ferramenta'];    
            $nome_ferramenta = $resultado['nome_ferramenta'];
            $marca_ferramenta = $resultado['marca_ferramenta'];
        ?>

    <table border style="width: 500px">
            
            <thead>
                <tr>
                    <td style="width: 50px; background: #ccc">Código</td>
                    <td style="width: 300px; background: #ccc">Nome</td>
                    <td style="width: 150px; background: #ccc">Marca</td>
                    
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td style="width: 50px"><?php echo $cod_ferramenta ;?></td>
                    <td style="width: 300px"><?php echo utf8_encode($nome_ferramenta) ;?></td>
                    <td style="width: 150px"><?php echo $marca_ferramenta ;?></td>
                </tr>
            </tbody>
        </table>
        <?php
            }
          } 
          
        ?>
    </body>
</html>

