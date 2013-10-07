<?php
    /*
     * Inserisco un po' di codice che mi permettera' di eseguire il DEBUG
     */
    add_filter( 'the_content', 'wpam_aggiunta_box' );
    
    function wpam_aggiunta_box( $content ){
        
        global $post;
        
        if( 'post' == $post->post_type ){ 
            //Creo un box Autore
            $author_box = "<div id='autore_articolo'>";
            
            if( function_exists( 'get_the_author_meta' ) ){
                $author_box .= "<h3>" . get_the_author_meta( 'description') . "</h3>";  
            } else {
                $author_box .= "<h3>" . get_the_author_description() . "</h3>";
            }
            
            //Chiudo il box Autore
            $author_box .= "</div>";
        }
    
        //Aggiungo il box al Contenuto
        $content .= $author_box;
    
        //Restituisco il contenuto con il box
        return $content;
    }
?>