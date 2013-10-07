<?php
//Richiamo header.php
    get_header();
?>

<?php
    //La chiamata al database piu' semplice da realizzare
    if( have_posts() ) :
        while( have_posts() ) : the_post();
?>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php
        endwhile; //chiudo il ciclo while
    endif; //chiudo la condizione if
    //loop terminato
?>

//Altro codice in index.php
<?php 
    //Richiamo sidebar.php
    get_sidebar();
?>
<?php
    //Richiamo footer.php
    get_footer();
?>
    
<?php
    /**
     *
     * La classe WP_Query permette di creare un gran numero
     * di cicli che ci permetteranno di mostrare una serie
     * di articoli che soddisfano i criteri impostati
     */
     
     //La variabile $args contiene i criteri di ricerca
     $args = array(
         'posts_per_page' => 5,
         'post_type' => 'post',
         'cat' => array( 3, -5, 13, 15 ),
     );
     
     $nuovo_loop = new WP_Query( $args );
     
     if( $nuovo_loop->have_posts() ):
         while( $nuovo_loop->have_posts() ) : $nuovo_loop->the_post();
             
             //Il codice che dovra' essere eseguito all'interno
             //del loop
             
         endwhile;
     endif;
?>

<?php
    /**
     * La classe $wpdb permette di creare delle query al database
     * MySQL e fornisce un gran numero di metodi che ti permettono
     * di eseguire query specifiche.
     *
     * Presentati nella lezione trovi:
     *    - $wpdb->get_var();
     *    - $wpdb->get_row(); 
     *    - $wpdb->get_col();
     *
     * Ma ne sono presenti molti altri
     */
     
    //Ecco un esempio per get_var()
    $conteggio_utenti = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->users" );
    echo "<p>Il conteggio utenti è {$conteggio_utenti}</p>"; 
?>