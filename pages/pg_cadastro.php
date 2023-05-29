<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style_cad.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tela de Cadastro</title>
</head>

<body class="text-center">
    <div>
        <img class="background-image" src="../img/loss_lado.png">
        <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: black;">
            <a class="navbar-brand" href="#" style="color: white;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="margin-left: 400px;">Menu</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Treinadores<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Planos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sobre
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Nós</a>
                            <a class="dropdown-item" href="#">Local</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Horário</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-outline-warning" href="../pages/pg_login.html" role="button">Acessar</a>
                </form>
            </div>
        </nav>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-5">
                        <div class="login-wrap p-4 p-md-5">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-user-o"></span>
                            </div>
                            <img src="../img/logo.jpg" width="30" height="30" class="d-inline-block align-top" style="width: 100px; height: 100px;">
                            <h3 class="text-center mb-4" style="font-size: 25px; color: white;">Preencher os campos para
                                realizar o seu cadastro</h3>
                            <form action="../inc/cadastro_user.php" method="post" class="login-form">
                                <div class="form-group d-flex" style="margin-top: 10px;">
                                    <input name="name" type="text" class="form-control rounded-left" placeholder="Nome Completo" required="">
                                </div>
                                <div class="form-group" style="margin-top: 10px;">
                                    <input name="cpf" type="text" class="form-control rounded-left" placeholder="CPF" required="">
                                </div>
                                <div class="form-group d-flex" style="margin-top: 10px;">
                                    <input name="email" type="email" class="form-control rounded-left" placeholder="E-mail" required="">
                                </div>
                                <div class="form-group d-flex" style="margin-top: 10px;">
                                    <input name="senha" type="password" class="form-control rounded-left" placeholder="Senha" required="">
                                </div>
                                <div class="form-group d-flex" style="margin-top: 10px;">
                                    <input name="senha_conf" type="password" class="form-control rounded-left" placeholder=" Confirmar senha" required="">
                                </div>
                                <select name="sexo" class="form-select form-select-sm" aria-label=".form-select-sm example" style="margin-top: 10px;">
                                    <option selected value="">-Selecione-</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                    <option value="Nenhum">Nenhum</option>
                                </select>
                                <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker " inline="true" style="padding-top: 10px;">
                                    <input name="data" id="date" type="date" value="">
                                </div>
                                <div class="form-group d-flex" style="margin-top: 10px;">
                                    <input name="telefone" type="text" class="form-control rounded-left" placeholder=" Telefone" required="">
                                </div>
                                <div class="form-group d-flex" style="margin-top: 10px;">
                                    <input name="telefone_ad" type="text" class="form-control rounded-left" placeholder=" Telefone Adicional">
                                </div>
                                <div class="form-check form-switch" style="padding-top: 10px;">
                                    <input name="notification" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault" style="color: white;">Aceita receber novidades em seu e-mail?</label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-warning" style="width: 150px; margin-top: 25px;">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>

</html>