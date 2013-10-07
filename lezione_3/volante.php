    <?php
        /**
         * Le variabili sono dei contenitori di valori.
         * I valori possibili sono
         *    - numerici
         *    - stringe
         *    - booleani
         */
         
        //Numerici
        $num = 13;
        
        //Stringhe
        $stringa1 = 'Io sono una stringa.';
        $stringa2 = "<p>Anche io <strong>sono una stringa</strong>.</p>";
        
        //Booleano
        $vero = true;
        $falso = false;
    ?>
    
    <?php
        /**
         * Ma le variabili non mostrano il valore nel browser
         */
         
        $num = 13;
        $stringa1 = 'Io sono una stringa.';
        $stringa2 = "<p>Anche io <strong>sono una stringa</strong>.</p>";
        
        echo $num . "<br>";
        echo $stringa1;
        echo $stringa2;
        
    ?>
    
    <?php
        /**
         * Gli operatori permettono di eseguire delle operazioni 
         * con i valori o con le variabili che contengono un valore
         *
         * + (somma) ti permette di sommare i valori numerici
         * - (sottrazione) puoi sottrarre un valore numerico da un altro
         * * (moltiplicazione) moltiplico due valori
         * / (divisione) divido il valore a sx con quello a dx
         * % (modulo) 
         * . (concatenazione) possono concatenare due stringhe tra loro
         */
         
        $num_1 = 14;
        $num_2 = 2;
        
        $somma = $num_1 + $num_2;
        $sottrazione = $num_1 - $num_2;
        $moltiplicazione = $num_1 * $num_2;
        $divisione = $num_1 / $num_2;
        
        $modulo = $num_1 % $num_2;
        
        $stringa1 = 'Io sono una stringa.';
        $stringa2 = "Io sono una seconda stringa.";
        
        $concatenazione = $stringa1 . " " . $stringa2;
        
        echo $modulo . "<br>";
        echo $sottrazione . "<br>";
        echo $moltiplicazione . "<br>";
        echo $divisione . "<br>";
        echo $concatenazione . "<br>";
        
    ?>
    
    <?php
        /**
         * Il modo piu' semplice per dichiarare un array
         * e' utilizzando la seguente sintassi
         */
         
        //Creo una variabile per salvare l'array
        $a = array( "uno", "due", "tre" );
    ?>
    
    <?php
        /**
         * Anche in questo caso devo usare l'istruzione echo
         * per mostrare i valori contenuti nell'array
         * specificando anche il suo indice numerico
         */
         
        $a = array( "uno", "due", "tre" );
         
        echo $a[0] . "<br>";
        echo $a[2];
    ?>
    
    <?php
        /**
         * Adesso creiamo un array associativo, ovvero un tipo di array
         * che ci permette di specificare le chiavi da utilizzare per 
         * inserire i diversi valori
         */
         
        //Dichiaro un array associativo
        $args = array(
            'posts_per_page' => 10,
            'category__and' => array( 3, 5 ),
            'year' => 2012,
        );
    
        echo $args['posts_per_page']; //Stampa: 10
        echo $args['cat'][0]; //Stampa: 3
    ?>
    
    <?php
        /**
         * Ricordati sempre che se una funzione e' gia' dichiarata
         * (come per le funzioni native PHP e quelle WordPress)
         * puoi semplicemente richiamarla.
         *
         * In questo caso echo e' una funzione nativa di PHP
         */
         
         $nome = "Andrea";
         
         echo $nome;
         echo( $nome );
         echo( "Funziona anche cosi'." );
    ?>
    
    <?php
        /**
         * Adesso creo la dichiarazione della mia funzione.
         *
         * Questa funzione accetta un qualsiasi valore e lo stampa 
         * nel browser.
         *
         * @uses echo Per mostrare il saluto
         * @param all $stringa La stringa che verra' inserita nel browser
         */
         
         //Dichiarazione
         function saluta( $stringa ){
             //Mostro il parametro nel browser
             echo( $stringa );
         }
    ?>
    
    <?php
        /**
         * Adesso creo la dichiarazione della mia funzione.
         *
         * Questa funzione accetta un qualsiasi valore e lo stampa 
         * nel browser.
         *
         * @uses echo Per mostrare il saluto
         * @param all $stringa La stringa che verra' inserita nel browser
         */
         
         //Dichiarazione
         function saluta( $stringa ){
             //Mostro il parametro nel browser
             echo( $stringa );
         }
         
         //Esecuzione
         saluta( "Ciao da wpAndMore" );
    ?>
    