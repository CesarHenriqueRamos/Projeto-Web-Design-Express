<?php include('config.php'); ?>
<?php Site::updateUsuarioOnline(); ?>
<?php Site::contador();?>
<!DOCTYPE html>
<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108589404-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108589404-1');
</script>
	<title>Projeto Web Design Express</title>
	<meta charset="utf-8">
	<meta name="author" content="Cesar Henrique Ramos">
	<meta name="description" content="Descrição do site aqui...">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<meta name="keywords" content="palavra-chave,lorem,ipsum">
	<!--colocar aqui meta tags SEO-->
    <!--<link rel="stylesheet" href="css/font-awesome.min.css">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<base base="<?php echo INCLUDE_PATH; ?>" />
	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url) {
			case 'sobre':
				echo '<target target="sobre" />';
				break;

			case 'servicos':
				echo '<target target="servicos" />';
				break;
		}
    ?>
    <header>
        <div class="container">
            <div class="logo"><a href="<?php echo INCLUDE_PATH; ?>"><h2>RamosTecnolog</h2></a></div>
            <nav class="menu-desktop">
                <ul>
                    <li class="selected">
                        <a href="<?php echo INCLUDE_PATH; ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a>
                    </li>
                    <li>
                        <a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a>
                    </li>
                </ul>
            </nav>
            <nav class="menu-mobile">
                <h2><i class="fa fa-bars"></i></h2> 
                <ul>
                    <li class="selected">
                        <a href="<?php echo INCLUDE_PATH; ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a>
                    </li>
                    <li>
                        <a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a>
                    </li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div><!--container-->
    </header>

	<div class="container-principal">
	<?php

		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}else{
			//Podemos fazer o que quiser, pois a página não existe.
			if($url != 'sobre' && $url != 'servicos'){
				$pagina404 = true;
				include('pages/404.php');
			}else{
				include('pages/home.php');
			}
		}

	?>

	</div><!--container-principal-->
    <footer class="footer1">
        <div class="container">
            <div class="w33">
                    <h2>Aonde estamos?</h2>
                    <p><i class="fa fa-map-pin" aria-hidden="true"></i> R. Fulano da silva, Coqueiros, Floripa/SC</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> (48)9999-9999</p>
            </div><!--w33-->
            <div class="w33">
                    <h2>Links Úteis</h2>
				<a href="https://dankicode.com">Danki Code</a>
				<a href="http://www.w3schools.com">W3Schools</a>
            </div><!--w33-->
            <div class="w33">
                    <h2>Conecte-se conosco</h2>
				<div class="group-icons">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-instagram"></i></a>
				</div>
            </div><!--w33-->
            <div class="clear"></div>
        </div><!--container-->
    </footer>
	<footer class="footer2">
        <div class="container">
            <p>Todos os Direitos Resrvados</p>
        </div>
    </footer>	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script>
		$('nav.menu-mobile h2').click(function(){
			$('nav.menu-mobile ul').slideToggle();
		});
	</script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/google_maps.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>

	<?php
		if($url == 'contato'){
	?>
	<?php } ?>
	<!--<script src="<?php echo INCLUDE_PATH; ?>js/exemplo.js"></script>-->
	<script src="<?php echo INCLUDE_PATH; ?>js/formularios.js"></script>

</body>
</html>