<?php


session_start();


include_once("connect.php");

if (!empty($_SESSION['id_usuario'])) {
    $id = $_SESSION['id_usuario'];
    $sql_detalhes = "SELECT * FROM tbl_cadastro WHERE id_cadastro=$id";
    $result = $conn->query($sql_detalhes);
    if ($result->num_rows > 0) {
        while ($usuario_detalhes = mysqli_fetch_array($result)) {
            $nome = $usuario_detalhes['nome'];
        }
    } else {
        echo "<script> window.location='../pages/pg_login.php'</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <script type="text/javascript" src="js/scroll.js"></script>
    <link href="css/style_planos.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tela Inicial</title>
</head>
<style>
    p {
        font-size: 14px;
        line-height: 22px;
    }

    header {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        display: flex;
        z-index: 1002;
    }

    h2 {
        font-size: 36px;
        line-height: 1;
        color: #ffffff;
        font-weight: bold;
        text-transform: uppercase;
        position: relative;
        padding-bottom: 20px;

    }

    span {
        color: rgba(255, 251, 0, 0.747);
    }
</style>

<body>
    <!--========== Menus ==========-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: rgb(0, 0, 0);">
            <a class="navbar-brand" href="#" style="color: white;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" onclick="scrollElement('apresentacao')" style="margin-left: 400px;">Menu</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" onclick="scrollElement('coach')">Treinadores<span
                                class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="scrollElement('planos')">Planos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
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
                <?php
                if (!empty($_SESSION['id_usuario'])) {
                    echo '                <form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-outline-danger" href="../inc/logout.php" role="button">Sair</a>
                </form>';
                    echo '               <form class="form-inline my-2 my-lg-0" >
                    <a class="btn btn-outline-warning" href="pages/pg_painel_user.php" role="button">' . $nome . '</a>
                </form>';
                } else {
                    echo '                <form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-outline-warning" href="pages/pg_login.php" role="button">Acessar</a>
                </form>';
                }
                ?>
            </div>
        </nav>
    </header>
    <!--========== Corpo da Pagina ==========-->

    <section class="corpo">
        <section class="sec_apre" id="apresentacao"></section>
        <section class="sobre">
            <div class="crop_so">
                <div class="d_img">
                    <div class="corr"></div>
                    <div class="sobre_img"></div>
                </div>
                <div class="sobre_txt">

                    <h2>
                        SOBRE <span style="color: #dc3543;">Lóss<span>Fit</span></span>
                    </h2>
                    <p>No bairro Aventureiro tem o que você precisa para o seu treino.
                        <br>
                        <br>
                        <a>- Instrutores especializados e qualificados.</a>
                        <br>
                        <a>- Aparelhos novos e modernos.</a>
                        <br>
                        <a></a>- Ambiente climatizado. </a>
                        <br>
                        <a> - Piso emborrachado. </a>
                        <br>
                        <br>
                        Aberta de segunda a segunda, confira nossos horários.
                    </p>
                </div>
            </div>
        </section>
        <section class="gym_ativ">
            <div class="gym_ativ_header">
                <p class="gym_ativ_title">
                <h5 style="font-size: 30px!important;"><b>Nossos Programas</b></h5>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, orbi egestas lacus ac suscipit ovallis.
                </p>
            </div>

            <section class="gym_ativ_mid_div">
                <div class="gym_ativ_type">
                    <img src="img/bodybuild.png" style="height: 600px; width: 450px;">
                    <div class="gym_ativ_type_txt">
                        <h5><a><b>Coaching</b></a><a><b>Strength</b></a></h5>
                        <span>Musculação</span>
                    </div>
                </div>
                <div class="gym_ativ_type">
                    <img src="img/zumba.jpg" style="height: 600px; width: 450px;">
                    <div class="gym_ativ_type_txt">
                        <h5><a><b>Coaching</b></a><a><b>Strength</b></a></h5>
                        <span>Zumba</span>
                    </div>
                </div>
                <div class="gym_ativ_type">
                    <img src="img/velho_treinando.jpg" style="height: 600px; width: 450px;">
                    <div class="gym_ativ_type_txt">
                        <h5><a><b>Coaching</b></a><a><b>Strength</b></a></h5>
                        <span>Treinamento Funcional</span>
                    </div>
                </div>
            </section>
        </section>
        <section class="planos" id="planos">
            <div class="row">
                <h1 style="margin-top: 5%;">Planos Disponíveis</h1>
                <div class="col-md-4 col-sm-6">
                    <div class="pricing_table">
                        <div class="pricing_table_header">
                            <i class="fa fa-home"></i>
                            <h2 class="title">Frango</h2>
                            <span class="price-plan">
                                <i class="fa fa-inr"></i>
                                <span class="price">R$ 109,99</span>
                                <span class="monthly_plan">Mensal</span>
                            </span>
                        </div>
                        <div class="pricing_table_plan">
                            <ul>
                                <li>Confira taxas de matrícula e manutenção na unidade de interesse</li>
                                <li>Sem multas ou taxas de cancelamento</li>
                                <li>Acesso a todas as aulas coletivas</li>
                                <li>Acesso total a estrutura da academia</li>
                                <li>Sem restrição de horários</li>
                                <li>Leve 2 amigos para treinar</li>
                            </ul>
                            <a class="btn btn-outline-danger" href="pages/pg_plano_user.php"
                                role="button">MATRICULE-SE</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="pricing_table active">
                        <div class="pricing_table_header">
                            <i class="fa fa-puzzle-piece"></i>
                            <h2 class="title">Rato de Academia</h2>
                            <span class="price-plan">
                                <i class="fa fa-inr"></i>
                                <span class="price">R$ 299,99</span>
                                <span class="monthly_plan">Trimensal</span>
                            </span>
                        </div>
                        <div class="pricing_table_plan">
                            <ul>
                                <li>Sem taxas de matrícula ou manutenção</li>
                                <li>10% de desconto na mensalidade</li>
                                <li>Acesso a todas as aulas coletivas</li>
                                <li>Acesso total a estrutura da academia</li>
                                <li>Sem restrição de horários</li>
                                <li>Leve 5 amigos para treinar</li>
                            </ul>
                            <a class="btn btn-outline-danger" href="pages/pg_plano_user.php"
                                role="button">MATRICULE-SE</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="pricing_table">
                        <div class="pricing_table_header">
                            <i class="fa fa-users"></i>
                            <h2 class="title">Bodybuilder</h2>
                            <span class="price-plan">
                                <i class="fa fa-inr"></i>
                                <span class="price">R$ 899,99</span>
                                <span class="monthly_plan">Anual</span>
                            </span>
                        </div>
                        <div class="pricing_table_plan">
                            <ul>
                                <li>Sem taxas de matrícula ou manutenção</li>
                                <li>30% de desconto na mensalidade</li>
                                <li>Acesso a todas as aulas coletivas</li>
                                <li>Acesso total a estrutura da academia</li>
                                <li>Sem restrição de horários</li>
                                <li>Leve 5 amigos para treinar</li>
                            </ul>
                            <a class="btn btn-outline-danger" href="pages/pg_plano_user.php"
                                role="button">MATRICULE-SE</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="coach">

            <div class="gym_coach">
                <div class="body_spans">
                    <h2>TEAM OF EXPERT COACHES</h2>
                    <span class="span_c1">
                        Massa vivamus lorem ornare risus diam egestas velit ultrices. Ac in tempus quam nulla.
                        In
                        viverra vitae viverra mauris eros accumsan sed vitae suspendisse. Pellentesque orci
                        ipsum
                        gravida nam fames a rhon.
                    </span>
                    <div class="span_c2">
                        <div class="back_h">
                            <p class="h_csss">+5 anos</p>
                        </div>
                        <div class="h_css">
                            <p class="h_css">de sucesso no trabalho e experiencia em treinamento</p>
                        </div>
                    </div>
                </div>

                <section class="gym_back_coach">
                    <div class="perfil_coach"><a class="perf_img1"></a></div>
                    <div class="perfil_coach"><a class="perf_img2"></a></div>
                    <div class="perfil_coach"><a class="perf_img3"></a></div>
                    <div class="perfil_coach"><a class="perf_img4"></a></div>
                </section>


            </div>

        </section>

        <section class="gym_calendario">
            <div>
                <h1 style="font-weight:800;">HORÁRIOS DE TRABALHO E AULAS</h1>
            </div>
            <section class="gym_calendario_posi ">
                <div class="table-responsive">
                    <table class="table table-fixed">
                        <thead>
                            <tr align="center" style="border-style: hidden; border-bottom: 2px solid #1a1a1a;">
                                <th scope="col" style=";background-color:black!important;">
                                    Horarios</th>
                                <th scope="col" style=";background-color:black!important;">
                                    segunda</th>
                                <th scope="col" style=";background-color:black!important;">terça
                                </th>
                                <th scope="col" style=";background-color:black!important;">quarta
                                </th>
                                <th scope="col" style=";background-color:black!important;">quinta
                                </th>
                                <th scope="col" style=";background-color:black!important;">sexta
                                </th>
                                <th scope="col" style=";background-color:black!important;">sabado
                                </th>
                                <th scope="col" style=";background-color:black!important;">
                                    domingo</th>
                            </tr>
                        </thead>
                        <tbody style="border:solid #1a1a1a 1px;">
                            <tr align="center">
                                <th scope="row" style="background-color:black;">1</th>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    Mark</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    Otto</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    @mdo</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    Mark</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    Otto</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    @mdo</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    @mdo</td>
                            </tr>
                            <tr align="center">
                                <th scope="row" style="background-color:black;" style="background-color:black;">1</th>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    Mark</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    Otto</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    @mdo</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    Mark</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    Otto</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    @mdo</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    @mdo</td>
                            </tr>
                            <tr align="center">
                                <th scope="row" style="background-color:black;">1</th>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    Mark</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    Otto</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    @mdo</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    Mark</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    Otto</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    @mdo</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    @mdo</td>
                            </tr>
                            <tr align="center">
                                <th scope="row" style="background-color:black;">1</th>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    Mark</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    Otto</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    @mdo</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    Mark</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    Otto</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    @mdo</td>
                                <td
                                    style="border:solid #1a1a1a 1px;background-color:black!important;">
                                    @mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </section>

        <section class="gym_cantato">
            <section class="gym_cont_back">
                <section class="gym_cont_posi">
                    <div class="gym_cont_row1">
                        <h5 class="h5local"><b>Localização</b></h5>
                        <a
                            href="https://www.google.com.br/maps/place/R.+Tuiuti,+1683+-+Aventureiro,+Joinville+-+SC,+89226-000/@-26.2566859,
                        -48.8231582,17z/data=!3m1!4b1!4m6!3m5!1s0x94deae3e13de697f:0xcf3986cbfef8677b!8m2!3d-26.2566907!4d-48.8205833!16s%2Fg%2F11gsmb_ln5?entry=ttu">
                            <img src=" img\mapa.png" style="max-width:400px; max-height:155px">
                        </a>
                        <span style="margin-top:30px; color: yellow;"><b style="color:white;">Endereço :</b> R. Tuiuti,
                            1683 - Aventureiro, <br>Joinville - SC,
                            89226-001</span>
                    </div>
                    <div class="gym_cont_row2">
                        <ul class="list_cont">
                            <h5 style="font-size:25px;"><b>Horarios de abretura da academia</b></h5><br><br>
                            <li class="d-flex">
                                <p style="font-size:18px;">Segundo-Sexta :<span> 5:30 AM - 12:00 PM</span></p>

                            </li>
                            <li class="d-flex">
                                <p style="font-size:18px;">Sabado :<span> 8:00 AM - 17:00 PM</span></p>

                            </li>
                            <li class="d-flex">
                                <p style="font-size:18px;">Domingo :<span> 9:00 AM - 16:00 PM</span></p>

                            </li>
                            <li class="d-flex">
                                <p style="font-size:18px;">Feriados :<span> 9:00 AM - 16:00 PM</span></p>

                            </li>
                        </ul>
                    </div>
                    <div class="gym_cont_row3">
                        <img src="img\logo.jpg" style="max-width: 120px; max-height: 100px; margin-bottom:20px;">
                        <p style="word-break:normal;max-width: 400px; max-height: 500px; font-size:18px;">As últimas
                            três ou quatro
                            repetições é o que faz o músculo crescer. Essa área de dor divide o
                            campeão de outra pessoa que não o é. Isso é o que falta à maioria das pessoas, ter coragem
                            de continuar e apenas dizer que vão passar pela dor, não importa o que aconteça.</p>
                        <span><b>Nossas redes sociais</b></span>
                        <div style="display:flex; flex-direction:row; ">
                            <a href="https://instagram.com/lossfit_?igshid=MzRlODBiNWFlZA==">
                                <div class="insta-full"></div>
                            </a>
                            <a href="https://instagram.com/lossfit_?igshid=MzRlODBiNWFlZA==">
                                <div class="face-full"></div>
                            </a>
                        </div>
                    </div>
                </section>
            </section>
        </section>

        <section class="gym_footer">
            <section class="rodape" style="background-color: #0e0e0e!important;">
                <footer>©2023 Sesi/Senai, todos os direitos reservados</footer>
            </section>
        </section>

        <!-- =================================================-->

</body>

</html>