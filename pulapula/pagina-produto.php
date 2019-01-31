<?php
/* Template Name: produto */
?>
 <?php get_header(); ?>
<section id="pag-produto">
	<div class="container">
		<div class="princ-cat text-center">
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="row text-center">
			<div class="col-md-4 col-sm-12"><img class="img-prod" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
			</div>
			<div class="col-md-8 col-sm-12 text-left">
				<p> <?php
                        if ( have_posts() ) {
                                while ( have_posts() ) { the_post();

                                        the_content();
                                }
                        }
                    ?></p>
			</div>
			<div class="col-12">
			    <?php the_field('galeria'); ?>
			</div>
		</div>
	</div>
	<div class="container">
		<br>
	<div class="col-12 cta">
		<div class="row">
			<div class="col-8 text-center"><span class="cta-texto">Gostou do <?php the_title(); ?>? Não perca tempo e faça um orçamento agora!</span></div>
			<div class="col-4"><button data-toggle="modal" data-target="#modal-email" class="bt-orc">Fazer Orçamento</button></div>
		</div>
	</div>
</div>
</section>
 <?php get_footer(); ?>
 