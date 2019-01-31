<!DOCTYPE html>
<html lang="pt_BR">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php the_title(); ?> | Locação de Brinquedos Infláveis</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/vendor/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/fontawesome/css/all.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/css/aos.css" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/owl-carousel/owl.carousel.min.css" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/fancybox/fancybox.min.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/imagens/favicon.ico" />
<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-73906138-29"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-73906138-29');
</script>
</head>
<body>
	<!-- Preloader -->
<div class="preloader"></div>
	<!-- Fim Preloader -->
	<button onclick="topFunction()" id="myBtn" data-placement="left" data-toggle="tooltip" title="Topo"><i class="fas fa-caret-up"></i></button>
	<!-- NAV OVERLAY -->
	  <div id="overlay-nav">
        <div id="nav-content">
            <ul>
                <li><a href="<?php echo site_url(); ?>">Início</a></li>
                <li><a href="<?php echo site_url(); ?>/pula-pulas/">Pula-Pula</a></li>
                <li><a href="<?php echo site_url(); ?>/piscina-bolinhas/">Piscina de Bolinhas</a></li>
                <li><a href="<?php echo site_url(); ?>/tobogas/">Tobogã</a></li>
                <li><a href="<?php echo site_url(); ?>/para-competicoes/">Para Competições</a></li>
                <li><a href="<?php echo site_url(); ?>/trabalhos/">Trabalhos</a></li>
                <li><a href="<?php echo site_url(); ?>/contato/">Contato</a></li>
            </ul>
        </div>
    </div>
    <!-- FIM NAV OVERLAY -->
<section id="topo">
	<div class="fixed-top">
	<div class="topo-cima">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col col-lg-4"><a href="#" data-toggle="modal" data-target="#modal-email"><span class="texto-topo green"><i class="fa fa-envelope"></i> turmadopulapula@gmail.com</span></a></div>
				<div class="col-md-auto"><span class="texto-topo green"><i class="fa fa-phone"></i> (11) 5675-6069 |<a id="zap" href="https://api.whatsapp.com/send?1=pt_BR&phone=5511967127970" target="_blank"> <b><i class="fab fa-whatsapp"></i></b> (11) 96712-7970</a></span></div>
			</div>
		</div>
	</div>
	<div class="menu-sticky">
		<nav class="navbar navbar-expand-lg">
		<div class="container">
	  <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/imagens/logo.png" class="nav-logo" /></a>
	  <button class="navbar-toggler" type="button" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"><i class="fas fa-bars green"></i></span>
	  </button>
	  <div class="collapse navbar-collapse justify-content-end">
	    <ul class="navbar-nav" id="menu">
	       <ul class="navbar-nav mr-auto menuzito text-center">
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo site_url(); ?>">Início</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo site_url(); ?>/pula-pulas/">Pula-Pula</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo site_url(); ?>/piscina-bolinhas/">Piscina de Bolinhas</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo site_url(); ?>/tobogas/">Tobogã</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo site_url(); ?>/para-competicoes/">Para Competições</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo site_url(); ?>/trabalhos/">Trabalhos</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo site_url(); ?>/contato/">Contato</a>
			      </li>
	    </ul>
	</ul>
	  </div>
	</div>
	</nav>
	</div>

</section>
<!-- MODAL E-MAIL -->
<div class="modal fade" id="modal-email" tabindex="-1" role="dialog" aria-labelledby="Formulário para Saber Mais" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel"><span class="chamada-email"><i class="fas fa-paper-plane"></i> Mande um E-mail pra Gente</span><br><span>Vamos responder Rapidinho.</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="119" title="formulario-modal"]'); ?>
      </div>
    </div>
  </div>
</div>