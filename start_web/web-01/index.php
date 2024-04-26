<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Tabuada</title>

            <link rel="stylesheet" type="text/css" href="web-inf/style.css">
        </head>
        <body>
            <h1>Saudações</h1>
            <div class='form'>
                <form action="" method="get">
                    <label for="num">Insira um valor:<label><br>
                    <input type="number" name="num" placeholdr="digite aqui"><br>
                    <input type="submit" value="Entrar" name="ok">
                </form>
            </div>
            <?php
                try{
                    $num = null;
                    $num = filter_input(INPUT_GET, "num");
                    if($num != null){
                        echo("<p>tabuada de ". $num . ":");
                        for($i=1; $i <= 10; $i++){
                            echo("<br>" . $num . " X " . (str_pad($i, 2, '0', STR_PAD_LEFT)) . " = " . (str_pad(($num*$i), strlen($num*10), '0', STR_PAD_LEFT)));
                        }
                    }
                }catch(exception $e){

                }
            ?>
        </body>
    </html>