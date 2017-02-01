<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/css/meucss.css" rel="stylesheet">
</head>

<body>
    <header>
		<div class="navbarS">
			<div class="logomarca">
				<a href="#">Binario by Davizeras</a>
			</div>

            <div class="logo">
                <h3></h3>
            </div>

            <div class="botao">
	            <input type="checkbox" id="navicon">
	            <label class="botaoMenu" for="navicon"></label>
                <div class="menu">
                    <ol class="opcoes">
                        <a href="./index.html"><li class="linha">Home</li></a>
                        <a href="./news.html"><li>News</li></a>
                        <a href="./exemplo.html"><li>Exemplo</li></a>
                    </ol>
                </div>
            </div>
		</div>
		<div class="clear"></div>
		<section id="cabecalho">
			<h1>This is Binary, a free and fully responsive
				<br>
					website template by TEMPLATED</h1>
			<div class="linha">
			<a href="#cabecalho" class="button alt scrolly big">Continue</a>
		</div>
		</section>
    </header>
		</html>
