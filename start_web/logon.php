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

            ?>

            <div class='main'>
                <h1>Saudações<?php echo $logon_user?></h1>

                <form action="" method="get">
                    <label for="mail">Digite seu E-mail:<label>
                    <br>
                    <input type="text" name="mail">
                    <br>

                    <label for="user">Digite seu novo nome de usuario:<label>
                    <br>
                    <input type="text" name="user">
                    <br>
                    
                    <label for="pass1">Digite uma Senha:<label>
                    <br>
                    <input type="text" name="pass1">
                    <br>

                    <label for="pass2">Digite novamente:<label>
                    <br>
                    <input type="text" name="pass2">

                    <br><br>
                    <input type="submit" value="Entrar" name="ok">
                </form>

                <?php
                    try{
                        if(isset($_GET['ok'])){
                            $mail = filter_input(INPUT_GET, "mail");
                            $user = filter_input(INPUT_GET, "user");
                            $pass1 = filter_input(INPUT_GET, "pass1");
                            $pass2 = filter_input(INPUT_GET, "pass2");

                            if($mail != null && $mail !=""){

                                if($user != null && $user !=""){

                                    if($pass1 != null && $pass1 !=""){

                                        if($pass1 == $pass2){
                                            $logon_mail = filter_input(INPUT_GET, "mail");
                                            $logon_user = filter_input(INPUT_GET, "user");
                                            $logon_pass = filter_input(INPUT_GET, "pass1");
                                            
                                            header("Location: /start_web/");

                                        }else{
                                            echo "<p>Erro, as senhas não são iguais</p>";
                                        }
                                    }else{
                                        echo "<p>Erro, digite uma senha valida.</p>";
                                    }
                                }else{
                                    echo "<p>Erro, digite um nome de usuario valido</p>";
                                }
                            }else{
                                echo "<p>Erro, digite um e-mail valido</p>";
                            }
                        }
                    }catch(exception $e){

                    }
                ?>
            </div>
        </body>
    </html>