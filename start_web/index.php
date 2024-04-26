<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>StartMenu</title>

            <link rel="stylesheet" type="text/css" href="web-inf/styles.css">
        </head>
        <body>
            <?php
                include "web-inf/menu.php";
                include "web-inf/data.php";
                $user = $pass = "";
            ?>

            <div class='main'>
                <h1>Saudações</h1>

                <form action="" method="get">
                    <label for="user">E-mail ou nome de usuario:<label>
                    <br>
                    <input type="text" name="user">
                    <br>
                    
                    <label for="pass">Senha:<label>
                    <br>
                    <input type="text" name="pass">
                    <br><br>
                    <input type="submit" value="Entrar" name="ok">
                </form>

                <?php
                    if($logon_user == null && $logon_pass == null){
                        ?>
                            <p>Você não possui um cadastro, <a href="logon.php">clique aqui para cadastrar.<a></p>
                        <?php
                    }
                    else{
                        ?>
                            <p>Esqueceu seu cadastro? <a href="logon.php">Clique aqui para re-cadastrar.<a></p>
                        <?php
                    }
                ?>

                <?php
                    try{
                        $login_user = $user;
                        $login_pass = $pass;


                    }catch(exception $e){

                    }
                ?>
            </div>
        </body>
    </html>