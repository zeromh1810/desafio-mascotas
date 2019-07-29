<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

	<div class="container my-3">
	<a href="<?php echo home_url(); ?>" class="btn btn-info btn-sm my-5">Volver a <i class="fas fa-home"></i></a>
	
	 <?php the_post_thumbnail('detail', array('class' => 'w-100 h-auto my-4')); ?> <!-- DE ESTA FORMA PODEMOS AGREGAR UNA CLASE O ESTILOS A LA IMAGEN DEL POST -->

    <h2 class="text-center my-3"><?php the_title() ?></h2>
	<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>

	 <?php the_content() ?> <!-- ESTA ETIQUETA LLAMA AL CONTENIDO DE LA ENTRADA -->

    <p class="text-center"><i class="fas fa-dog"></i> <a href="#" class="text-info"><?php get_category('') ?></a></p>
  </div>		
		
		

	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>
<?php get_footer() ?>


