<!DOCTYPE html>
<html>
    <head>        
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link href="css/my.css" rel="stylesheet" type="text/css"/>
        <link href="my/my.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        <div class="container-fluid d-flex justify-content-center align-items-center tudo">
            <div class="row text-center d-flex align-items-center">
                <form action="index.php" method="POST">
                    <div class="bg-black p-4 text-white">
                        <p class='bg-success p-3 border text-black'>Acesso Restrito</p>
                        <label  class="form-label h5">E-mail</label>
                        <input type="email" name="login" value="" class="form-control text-center" placeholder="Seu e-mail" /><br>
                        <label  class="form-label h5">Senha</label>
                        <input type="password" name="login" value="" class="form-control text-center" placeholder="Sua senha" /><br>
                        <input type="submit" name="enviar" value="Acessar" class="btn btn-warning form-control text-black">
                    </div>
                </form>
            </div>
        </div> 

    </body>
</html>
