<?php
    /*
     * Inserisco un po' di codice che mi permettera' di eseguire il DEBUG
     */
    add_filter( 'the_content', 'wpam_aggiunta_box' );
    
    function wpam_aggiunta_box( $content ){
        if( 'post' == $post->post_format ){ 
            //Creo un box Autore
            $author_box = "<div id='autore_articolo'>";
    
            //Aggiungo descrizione
            $author_box .= "<h3>" . get_the_author_description() . "</h3>";
    
            //Chiudo il box Autore
            $author_box .= "</div>";
        }
    
        //Aggiungo il box al Contenuto
        $content .= $author_box;
    
        //Restituisco il contenuto con il box
        return $content;
    }
?>

//Mantengo compatibile
<?php 
    //Controllo la presenza della funzione 
    if( function_exists( 'get_the_author_meta' ) ){
        $author_box .= "<h3>" . get_the_author_meta( 'description') . "</h3>";	
    } else {
        $author_box .= "<h3>" . get_the_author_description() . "</h3>";
    }
?>

//No Transient API
<?php 

	$args = array( 'posts_per_page' => 100 );
	$loop = new WP_Query( $args );

	if( $loop->have_posts() ) :
		while( $loop->have_posts() ) : $loop->the_post();
?>
	<h2><?php the_title(); ?></h2>
<?php
		endwhile;
	endif;
	wp_reset_postdata();
?>

//Transient API
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