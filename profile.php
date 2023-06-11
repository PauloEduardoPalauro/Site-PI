<?php 

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"login.php\">Entrar</a></p>");
}

?>

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Metas -->
    <title>Site Entidades - Homes</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="icon" type="image/png" href="images/logo_maua.png"/>

    <!-- Design fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"
        rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="css/colors.css" rel="stylesheet">

    <!-- Version Tech CSS for this template -->
    <link href="css/version/tech.css" rel="stylesheet">

    <link href="css/profile.css" rel="stylesheet">

    <!--[if lt IE 9]> <script
    src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> <script
    src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<title>Document</title>
</head>
<body>
<div id="wrapper">
    <header class="tech-header header">
        <div class="container-fluid">
            <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                <button
                    class="navbar-toggler navbar-toggler-right"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarCollapse"
                    aria-controls="navbarCollapse"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="home.php"><img src="images/logo-branco.svg" alt="Image"></a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto" style="display: center;">
                        <p>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</p>
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li
                            class="nav-item dropdown has-submenu menu-large hidden-md-down hidden-sm-down hidden-xs-down">
                            <li class="nav-item">
                                <a class="nav-link" href="noticia.php">Noticias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="entidades.php">Entidades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-2">
                            <li class="nav-item">
                                <a class="nav-link" href="profile.php">
                                    <img src="images/user.png" alt="Image" style="height:30px;">
                                    <!--<i class="fa fa-user-circle-o" style="color: #ffffff;"></i>-->
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end market-header -->
        <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="images/profile_pic.png" alt=""/>
                            <p><?php echo $_SESSION['descrição']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <h2>
                                <?php echo $_SESSION['nome']; ?>
                            </h2>
                            <h6>
                                <?php echo $_SESSION['RA']; ?>
                            </h6>

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <p class="nav-link active"
                                        id="home-tab"
                                        data-toggle="tab"
                                        href="#home"
                                        role="tab"
                                        aria-controls="home"
                                        aria-selected="true">Entidades Visitadas</p>

                                    <a href="perfil_ent/baja_perfil.php"><strong style="font-size: 30px"> - Baja Maua</Strong></a>
                                    <br>
                                    <br>
                                    <a href="perfil_ent/DEV.php"><strong style="font-size: 30px"> - DEV Community</Strong></a>
                                    <br>
                                    <br>
                                    <a href="perfil_ent/marie_curie.php"><strong style="font-size: 30px"> - Marie Curie</Strong></a>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sair">
                        <a  style="font-size: 20px; color: blue; text-decoration:underline" href="logout.php">
                            <strong>Sair</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</form>
</div>
</body>
</html>