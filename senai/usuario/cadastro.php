<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>criarSENAIlivre</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <header>
       
        <figure> <a href="index.html"><img src="../img/logo.png" alt="logo"></a></figure>

        <div>
            <form class="form" method="POST">
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
        <main>
            <section class="formulario">
                <div class="formulario-title">
                    <h1>Registre-se</h1>
                </div>
                <div class="formulario-form">
                    <form action="form" method="POST">
                        <div>
                            <label for="nome">Nome Completo</label>
                            <input type="nome" name="Nome Completo" id="nome">
                        </div>
                        <div>
                            <label for="email">E-mail</label>
                            <input type="email" name="E-mail" id="email">
                        </div>
                        <div>
                            <label for="nome">Nome de usuário</label>
                            <input type="nome" name="Nome de usuário" id="email">
                        </div>
                        <div>

                            <div>
                                <label for="senha">Criar senha</label>
                                <input type="senha" name="Criar senha" id="email" required minlength="8">
                            </div>
                            <div>
                                <label for="senha">Confirmar senha</label>
                                <input type="senha" name="Confirmar senha" id="email" required minlength="8">
                            </div>
                            <button type="submit">Registrar-se</button>
                            <a href="login.php" class="cadastro_link">Possuo cadastro>></a>
                        </div>
                    </form>

        <?php
            include("../bd/conexao.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $login = $_POST["login"];
            $senha = $_POST["senha"];

            $sql = "INSERT INTO usuario(nome, email, login, senha) VALUES (:nome, :email, :login, :senha)";
            $stml = $conexao->prepare($sql);
            $stml -> bindValue(":nome", $nome);
            $stml -> bindValue(":email", $email);
            $stml -> bindValue(":login", $login);
            $stml -> bindValue(":senha", $senha);
            $stml-> execute();

            if($stml->rowCount() > 0){
                echo "Registrado com sucesso";
            }else{
                echo "Falha ao registrar usuário";

            }
        }
    ?>

                </div>
            </section>
        </main>

    <footer class="footer">
        
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
