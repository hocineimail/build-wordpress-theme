

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title><?php wp_title(); ?></title>
<!– CSS de Bootstrap –>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<!– Ajout d’une nouvelle feuille de style qui sera spécifique à notre thème –>


<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>





	
	<?php wp_head(); ?>
 
      <link  href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

</head>
<body>
	<div id="containeur">
		 <header id="bandeau">

		 	<h1><?php bloginfo( 'name' ); ?></h1>
		 	<div id="recherche">
		 		<?php get_search_form(); ?>
		 	</div>
		 </header>
		 <nav id="menu">
		 	<?php wp_nav_menu(array('theme_location'=>'meny_principal')); ?>
		 </nav>

