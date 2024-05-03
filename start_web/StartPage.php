<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Main Menu</title>

            <link rel="stylesheet" type="text/css" href="web-inf/styles.css">
            <style>
                .fileira{
                    display: flex;
                    margin-bottom: 10px;
                }
                .primeira{
                    height: 10px;
                    height: auto;
                    width: 30%;                   
                    margin-right: 10px;
                    border-style: double;
                }
                .segunda{
                    margin-left: auto;
                    margin-right: auto;
                    width: 30%;
                    border-style: double;
                }
                .terceira{
                    width: 30%;
                    margin-left: 10px;
                    border-style: double;
                }
            </style>
        </head>
        <body>
            <?php
                require "web-inf/menu.php";
            ?>
            <div class='main'>
                <h1 style="margin-bottom: 0px;">Bem Vindo(a)</h1>
                <h2 style="margin-top: 0px;">Selecione o arquivo que deseja acessar</h2>
                   

                <div class="fileira">
                    <!--
                        <p class="primeira">
                        &nbsp
                        </p>

                        <p class="segunda">
                        &nbsp  
                        </p>

                        <p class="terceira">
                        &nbsp    
                        </p>
                    -->
                    <p class="primeira">
                        &nbsp <a href="/start_web/web-01/"> Tabuada.php</a> 
                        Um site simples para calculo de tabuada.<br>
                        <br>
                    </p>

                </div>

            </div>
        </body>
    </html>