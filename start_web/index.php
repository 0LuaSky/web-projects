<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>login</title>

            <link rel="stylesheet" type="text/css" href="web-inf/styles.css">
        </head>
        <body>
            <div class='main'>
                <h1>Saudações</h1>

                <form action="" method="post" name="form">
                    <label for="user">Nome de usuario:<label>
                    <br>
                    <input id="myInput" type="text" name="user" placeholder="digite aqui.">
                    <br><br>

                    <input id="myBtn" type="button" nome="submit" value="entrar" onclick="concatena()">
                </form>

                <script>
                    var input = document.getElementById("myInput");
                    input.addEventListener("keypress", function(event) {
                        if (event.key === "Enter") {
                            event.preventDefault();
                            document.getElementById("myBtn").click();
                        }
                    });

                    function concatena(){
                        nome = document.form.user.value;
                        window.alert("Bem Vindo(a) " + nome);
                        window.location.href = "http://localhost/start_web/StartPage.php";
                    }
                </script>
            </div>
        </body>
    </html>