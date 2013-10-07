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