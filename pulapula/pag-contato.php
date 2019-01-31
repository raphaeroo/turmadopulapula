<?php
/* Template Name: pagina-contato */
?>
<?php get_header(); ?>
<section id="contato" class="mt-10">
    <div class="container">
        	    		<div class="princ-cat text-center">
			<h2>Fale Conosco e Faça um Orçamento</h2>
	</div>
    <div class="row text-left">
        <div class="col-md-6 col-sm-12">
            <?php echo do_shortcode('[contact-form-7 id="120" title="formulario-contato"]'); ?>
        </div>
        <div class="col-md-6 col-sm-12 contato-dir">
    <div class="princ-cat text-left">
			<h2>Turma do <span class="azul">P</span>ul<span class="laranja">a</span> <span class="verde">P</span>ul<span class="rosa">a</span></h2>
	</div> 
	<p><i class="fa fa-phone"></i> (11) 5675-6069</p>
	<p><i class="fab fa-whatsapp"></i> (11) 96712-7970</p>
	<p><i class="fa fa-envelope"></i> turmadopulapula@gmail.com</p>
	<p><i class="fas fa-map-marker-alt"></i> Rua José Mauro Mendonça, 26 -
Parque Dorotéia
São Paulo - SP</p>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7306.819854603244!2d-46.635224!3d-23.697051!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce45016dd3e5e9%3A0x50231329176391e4!2sRua+Jos%C3%A9+Mauro+Mendon%C3%A7a%2C+26+-+Parque+Doroteia%2C+S%C3%A3o+Paulo+-+SP%2C+04475-492!5e0!3m2!1spt-BR!2sbr!4v1548174472089" width="100%" height="270" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>        
    </div>
</section>
<?php get_footer(); ?>