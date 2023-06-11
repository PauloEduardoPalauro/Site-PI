<?php
session_start();
include('conexao.php');

if(isset($_POST['RA']) && isset($_POST['RG'])) {

    if(strlen($_POST['RA']) == 0) {
        echo "Preencha seu RA";
    } else if(strlen($_POST['RG']) == 0) {
        echo "Preencha sua RG";
    } else {

        $RA = $mysqli->real_escape_string($_POST['RA']);
        $RG = $mysqli->real_escape_string($_POST['RG']);

        $sql_code = "SELECT * FROM usuarios WHERE RA = '$RA' AND RG = '$RG'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['RA'] = $usuario['RA'];
            $_SESSION['descrição'] = $usuario['descrição'];

            header("Location: profile.php");
            exit();

        } else {
            echo "Falha ao logar! RA ou RG incorretos";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
      <!-- Mobile Metas -->
      <meta
          name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
      <!-- Site Metas -->
      <title>Site Entidades - Login</title>
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
      <link href="style.css" rel="stylesheet">
  
      <!-- Responsive styles for this template -->
      <link href="css/responsive.css" rel="stylesheet">
  
      <!-- Colors for this template -->
      <link href="css/colors.css" rel="stylesheet">
  
      <!-- Version Tech CSS for this template -->
      <link href="css/version/tech.css" rel="stylesheet">

      <link href="css/login.css" rel="stylesheet">
  
      <!--[if lt IE 9]> <script
      src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> <script
      src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
  
    <title>Site Entidades - Login</title>
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
                            <p>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</p>
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
            <div class="wrapper">
        <form class="form-signin" style="" action="" method="POST">       
            <h2 class="form-signin-heading">Please login</h2>
            <p>
            <label style="font-family: 'Roboto', serif;"><strong>RA</strong></label>
            <input type="text" name="RA">
            </p>   

            <p>
            <label style="font-family: 'Roboto', serif;"><strong>RG</strong></label>
            <input type="password" name="RG">
            </p>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
        </form>
    </div>
</body>
</html>