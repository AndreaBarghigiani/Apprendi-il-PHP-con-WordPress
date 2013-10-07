<!doctype html>
<html lang="it-IT">
<head>
    <meta charset="UTF-8">
    <title>Conosciamo Cicli e Condizioni</title>
</head>
<body>
    
    <?php
        /*
         * Con il ciclo for possiamo ciclare per un numero determinato
         * di passi. Deve essere dichiarata una variabile di controllo,
         * una condizione e l'incremento della variabile di controllo. 
         * tutto separato da un punto e virgola ( ; ).
         */
        
        $args = array(
            'posts_per_page' => 10,
            'category__and' => array( 3, 5 ),
            'year' => 2013,
        );
        
        foreach( $args as $indice => $valore ){
            echo "<p>Il valore contenuto nel indice " . $indice. " e' " . $valore . ".</p>";
        }
        
        
    ?>

    
</body>
</html>