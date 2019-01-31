<section id="rodape">
	<div class="container">
		<div class="col-12 text-center">
			<span>© <script type="text/JavaScript">document.write(new Date().getFullYear());</script> Turma do Pula Pula | Todos os Direitos Reservados</span><br>
			<span>Desenvolvido com <i class="fa fa-heart"></i> por - <a target="_blank" href="https://www.agenciasense.com.br">Agência Sense</a></span>
		</div>
	</div>
</section>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/vendor/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/vendor/js/popper.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/vendor/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/vendor/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/vendor/js/aos.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/vendor/fancybox/fancybox.min.js"></script>
<script>
  AOS.init();
</script>
<script>
$(function(){
  setTimeout(function(){
    $('.preloader').fadeOut('slow', function() {
      $(this).remove();
    });
   }, 1500);
});
</script>
<script>
	$('[data-fancybox="gallery"]').fancybox({
		defaultType: "image",
		animationEffect: "zoom-in-out",
});
</script>
<script>
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<script>
	var owl = $('.owl-carousel');
	owl.owlCarousel({
	    items:4,
	    loop:true,
	    margin:10,
	    nav:false,
	    autoplay:true,
	    autoplayTimeout:1500,
	    autoplayHoverPause:true,
	    responsive:{
	        0:{
	            items:2
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:4
	        }
	    }
	});
	$('.play').on('click',function(){
	    owl.trigger('play.owl.autoplay',[4000])
	})
	$('.stop').on('click',function(){
	    owl.trigger('stop.owl.autoplay')
	})
  	</script>
 <script>
        $(document).ready(menu);
    function menu() {
      $('.navbar-toggler, #overlay-nav').on('click', function() {
        $('.navbar-toggler').toggleClass('active');
        $('#top, #middle, #bottom').toggleClass('active');
        $('#overlay-nav').toggleClass('active');
      });
    }
    </script>
</body>
</html>