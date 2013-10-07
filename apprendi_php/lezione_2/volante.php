    <?php
        /* Ciao io sono un Commento ;) */
        echo "Ciao Mondo";
    ?>
    
    <?php
        /* Ciao io sono un Commento ;) */
        echo 'La Mia Prima Stringa';
        echo "La Seconda con Doppi Apici";
    ?>
    
    <?php
        echo 'La Mela e' rossa'; //Errore
    ?>
    
    
    <?php
        echo "<a href="http://google.com">Google</a>; //Errore
    ?>
    
    
    <?php
        echo "La Mela e' rossa";
        echo '<a href="http://Google.com">Google</a>';
        echo "<p class=\"rosso\">Questo e' un testo rosso.</p>";
    ?>
    
    <?php
        if( have_posts() ){
            
            //Creo delle Variabili
            $queste       = "";
            $saranno      = "";
            $equidistanti = "";
            
            //Creo un Array
            $array = array(
                'valore_uno' => "",
                'valore_due' => "",
                'valore_tre' => "",
            );
        }
    ?>