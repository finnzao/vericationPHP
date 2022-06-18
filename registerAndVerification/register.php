<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./css/styleR.css">
</head>

<body>

    <div class="screen">
        <div class="box">
            <h2>Registre-se</h2>
            <form action="auth_register.php" method="post">



                <div class="field">
                    <input name="nome" type="text" placeholder="Usuário..">
                </div>

                <div class="field">
                    <input name="senha" type="text" placeholder="Senha...">
                </div>

                <div class="field_b">
                    <button class="res_but" name="cadastrar" type="submit">Confirmar</button>
                    <button class="res_but"><a href="index.php">Voltar</a></button>
                </div>
            </form>

        </div>
    </div>

</body>

</html>