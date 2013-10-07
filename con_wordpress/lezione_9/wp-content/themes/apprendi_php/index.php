<?php
    //Richiamo header.php
    get_header();
?>

<div id="main">
    <?php 

		$args = array( 'posts_per_page' => 100 );

		//Specifico una Scadenza per la Cache
		$cache_exp = 60*60*72; // 72 ore

		//Creo un id per riconoscere la cache
		$transient_id = "lunga_query";

		//Richiamo i dati dalla cache
		$loop = get_transient( $transient_id );

		//Se non presenti
		if( !isset( $loop ) ){
			//Allora creo il nuovo loop
			$loop = new WP_Query( $args );
			//e salvo la cache
			set_transient( $transient_id, $loop, $cache_exp );	
		}

		if( $loop->have_posts() ) :
			while( $loop->have_posts() ) : $loop->the_post();
	?>
		<h2><?php the_title(); ?></h2>
	<?php
			endwhile;
		endif;
		wp_reset_postdata();
	?>  
</div>

<?php get_sidebar(); ?>

<?php
    //Richiamo footer.php
    get_footer();
?>