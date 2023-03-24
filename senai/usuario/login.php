<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginSENAIlivre</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <header>
       
        <figure><a href="index.html"><img src="../img/logo.png" alt="logo"></a></figure>

        <div>
            <form action=""0>
                <button>
                    <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-labelledby="search">
                        <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9"
                            stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </button>
                <input class="input" placeholder="Buscar produtos" required="" type="text">
                <button class="reset" type="reset">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </form>
        </div>

        <nav class="NavHeader">
            <a href="#produtos">Produtos</a>
            <a href="#footer">Contato</a>
            <a href="login.php">Entrar</a>
            <a href="cadastro.php">Criar uma conta</a>
            <a href="carrinho.html"><i class="fa-solid fa-cart-shopping"></i></a>
        </nav>

        <nav>
            <i class="fa-solid fa-bars"></i></button>
        </nav>

        <hr> 
    </header>

    <main>

        <form class="login" method="POST">
            <p class="form-title">Inicie sessão na sua conta</p>
             <div class="input-container">
               <input placeholder="Enter login" type="text" name="login" id="login">
               <span>
                 <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                 </svg>
               </span>
           </div>
           <div class="input-container">
               <input placeholder="Enter password" type="password" name="senha" id="senha">
     
               <span>
                 <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                   <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                 </svg>
               </span>
             </div>
              <button class="submit" type="submit">
             Sign in
           </button>
     
           <p class="signup-link">
             No account?
             <a href="index.html">Sign up</a>
           </p>
        </form>
     
        <?php

    include("../bd/conexao.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $login = $_POST["login"];
        $senha = $_POST["senha"];

        $sql = "SELECT * FROM usuario WHERE login = :login AND senha = :senha";
        $stml = $conexao->prepare($sql);
        $stml->bindValue(":login", $login);
        $stml->bindValue(":senha", $senha);
        $stml->execute();

        if($stml->rowCount() > 0){
            echo "Pode logar" ;
        }else{
            echo "Não pode logar";

        }
    }
?>

    </main>

    <footer class="footer" id="footer">
        
        <div class="textesquerda">
            <p>Copyright © 1999-2023 Ebazar.com.br LTDA.</p>
            <p>CNPJ n.º 03.007.331/0001-41 / Av. das Nações Unidas, nº 3.003, Bonfim, Osasco/SP </p>
            <p>CEP 06233-903 - empresa do grupo Mercado Livre.</p>
        </div>

        <div class="textdireita">   
            <div class="centro">
                <p>Trabalhe conosco</p>
                <p>Contato</p>
                <p>Termos e condições</p>
            </div>
            <dvi class="direita">
                <p>Acessibilidade</p>
                <p>Como cuidamos da sua privacidade</p>
                <p>Informações sobre seguro</p>
            </dvi>
        </div>
    
    </footer>
    
    <script src="https://kit.fontawesome.com/647e2943ba.js" crossorigin="anonymous"></script>
</body>
</html>