<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                <a  href="index.php">Cadastrar</a> | <a href="listar.php">Listar</a> | 
                <a href="buscar.php">Pesquisar</a> | <a href="editar.php">Editar</a>
            </div>
            <form action="inserir.php" method="post">
                <fieldset>
                    <legend>Formulário de Cadastro de Ferramentas</legend>
                    
                    <label>Código:</label>
                    <input type="Number" name="cod_ferramenta"/>
                    
                    <label>Nome:</label>
                    <input type="text" name="nome_ferramenta"/>
                    
                    <label>Marca:</label>
                    <input type="text" name="marca_ferramenta"/>
                    
                    
                    <input type="submit" name="cadastra" value="Cadastra" />
                    
                    <br />
                
                    
                </fieldset>
            </form>
        </section>
    </body>
</html>  
