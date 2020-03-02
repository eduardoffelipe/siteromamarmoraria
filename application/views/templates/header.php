<?php

$dir = "";
if($_SERVER['SERVER_NAME'] == "marmorariaroma.com.br"){
	$dir = "/";
}else if($_SERVER['SERVER_NAME'] == "localhost"){
	$dir="/local/romamarmoraria";
}
?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <title><?= $titulo; ?> </title>
    <!-- meta-tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //meta-tags -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <!-- Flexslider-CSS -->

    <!-- //Gallery Css -->

    <!-- fonts -->
    <link href="//fonts.googleapis.com/css?family=Great+Vibes&amp;subset=latin-ext" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <div class="header">
        <div class="content white">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
                        <a class="logo" href="index.html">
                            <img src="images/Logo_Marmoraria_Roma.png" alt="Logo Marmoraria Roma">
                        </a>
                    </div>
                    <!--/.navbar-header-->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <nav class="link-effect-2" id="link-effect-2">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="<?= base_url()?>home">Home</a>
                                </li>
                                <li>
                                    <a href="<?= base_url()?>sobre">A Empresa</a>
                                </li>
                                <li>
                                    <a href="<?= base_url()?>servicos">Serviços</a>
                                </li>
                                <li>
                                    <a href="<?= base_url()?>produtos">Produtos</a>
                                </li>
                                <li>
                                    <a href="<?= base_url()?>contato">Contato</a>
                                </li>
                                <li>
                                    <a href="https://wa.me/5527998908519?text=Quero%20fazer%20um%20or%C3%A7amento%20" target="blank"><button class="orcamento">Orçamento</button></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!--/.navbar-collapse-->
                    <!--/.navbar-->
                </div>
            </nav>
        </div>
    </div>
    
		
		<!-- WPP BTN -->
        <div class="fab">
            <a href="https://wa.me/5527998908519?text=Quero%20fazer%20um%20or%C3%A7amento%20" target="blank">
                <img src="images/whatsapp_logo.png" alt="WhatsappLogo" target="blank">
            </a>
		</div>
		<!-- //WPP BTN -->


        <!--  FIM HEADER  -->
