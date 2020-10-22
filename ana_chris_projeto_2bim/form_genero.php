<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Gênero</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>  
    <?php
        include "cabecalho.php";
        if(empty($_POST))
        {
            echo'<div class="login-form col-xs-10 offset-xs-1 
            col-sm-6 offset-sm-3 col-md-4 offset-md-4">
            <header>
			    <h1 class="text-center" class="img-fluid"></h1>
			    <h2 class="text-center">Cadastre o <b>gênero</b> da música</h2>
		    </header>
            <form action="form_genero.php" method="post">
            <div class="form-group">
				<div class="input-group">
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-music-note-beamed" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/>
                    <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/>
                    <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/>
                </svg>
                    <input type="text" name="genero" placeholder="Nome do gênero...">
                </div>
            </div>
            <footer>
				<div class="float-left">
                    <button type="button" class="btn btn-outline-light">Cadastrar Gênero</button>
                </div>
            </footer>
            </form>
            </div>';
        }
        else
        {
            include "inserir_genero.php";
        }
    ?>
    <script src="bootstrap.min.js"></script>
</body>
</html>