<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Conosciamo Condizioni e Cicli</title>
        <meta name="description" content="">

        <link rel="stylesheet" href="percorso/style.css">
        
    </head>
    <body>
    
    <?php
        /**
         * OPERATORI DI CONFRONTO
         * 
         * Questi ci permettono di specificare quali tipi di condizione
         * dovra' valutare il computer che ci restituira' un valore
         * booleano (true o false)
         *
         * > (maggiore) ci permette di chiedere se il valore a sx e' maggiore di quello a dx
         * < (minore) ci permette di chiedere se il valore a sx e' minore di quello a dx
         * == (uguale) ci permette di chiedere se il valore a sx e' uguale a quello a dx
         * >= (maggiore o uguale) chiedi se il valore a sx e' maggiore o uguale di quello a dx
         * <= (minore o uguale) chiedi se il valore a sx e' minore o uguale di quello a dx
         * != (diverso) chiedi se il valore a sx e' diverso di quello a dx
         */
         
         //Alcuni esempi
         $a = 5;
         $b = 2;
         
         $a > $b //true
         $a < $b //false
         $a == $b //false
         $a >= $b //true
         $a <= $b //false
         $a != $b //true
    ?>
    
    <?php
        /**
         * CONDIZIONE IF
         *
         * La condizione if controlla l'espressione nelle parentesi tonde
         * e se valutata vera, esegue il codice nelle parentesi graffe.
         */
        $a = 3;

        if( $a == 3 ){
            echo "Ciao Mondo";
        }
    ?>

    <?php
        /**
         * CONDIZIONE ELSEIF E ELSE
         *
         * La condizione if controlla l'espressione nelle parentesi tonde
         * e se valutata vera, esegue il codice nelle parentesi graffe.
         * Aggiungendo elseif creo un nuovo controllo mentre con il semplice
         * else creo del codice che viene eseguito solo se le due 
         * condizioni precedenti sono false
         */
        $a = 5;

        if( $a == 3 ){
            echo "Ciao Mondo";
        } elseif( $a > 4 ){
            echo 'La variabile $a ha valore:' . $a;
        } else {
            echo "Il valore della variabile: $a";
        }
    ?>

    <?php
        /**
         * CONDIZIONE SWITCH
         *
         * La condizione switch è molto simile ad un blocco if-elseif-else
         * ovvero ci permette di controllare se una data condizione è
         * vera o falsa risparmiando spazio e offrendo una sintassi
         * migliore per la visualizzazione della variabile o del valore
         * analizzato.
         */
        $a = 3;

        switch($a){
            case 1:
                echo '$a uguale a 1';
                break;
            case 2:
                echo '$a uguale a 2';
                break;
            case 3:
                echo '$a uguale a 3';
                break;
            default:
                echo '$a non uguale a nessuno dei seguenti: 1, 2, 3.';
        }
    ?>

    <?php
        /*
         * L'Array che useremo nei Cicli
         */
        $args = array(
            'posts_per_page' => 10,
            'category__and' => array( 3, 5 ),
            'year' => 2013,
        );
    ?>

    <?php
        /*
         * Questo e' un esempio di come funziona il ciclo while 
         * all'interno di un array con indice numerico
         */
        $args = array( 'mele', 'pere', 'banane', 'ananas' );

        $i = 0; //Variabile di Controllo
        $ele = count( $args ); //Conto il numero di elementi
        echo "<p>Sono stato dal fruttivendolo e ho trovato: ";
        while( $i < $ele ){
            echo $args[ $i ] . ", "; //stampo sulla pagine l'elemento con indice $i
            $i++; //incremento la variabile di controllo
        }
        echo " uva e fragole.</p>"; //chiudo il paragrafo
    ?>
    
    <?php
        $args = array(
                'posts_per_page' => 10,
                'category__and' => array( 3, 5 ),
                'year' => 2013,
            );

        /*
         * Con la funzione count() conto il numero di elementi presenti
         * nell'array e per ciascuno di essi stampo il suo valore
         */
        $ele = count( $args );
        $i = 0; //Variabile di controllo

        while( $i < $ele ){
            echo "<pre>";
            print_r( $args ); //print_r() permette di mostrare la struttura di un array
            echo "</pre>";
            $i++;
        }
    ?>

    <?php
        /*
         * Il ciclo do-while e' una variante del ciclo while che 
         * abbiamo appena visto. L'unica differenza e' che il codice
         * contenuto all'interno delle parentesi graffe verra' eseguito
         * almeno una volta.
         */
        $a = 5; //qualsiasi variabile numerica
        $i = 6; //variabile di controllo

        do{
            echo 'Mi leggi anche se  $a (' . $a . ') risulta minore di $i (' . $i . ').';
        }while( $i < $a );//condizione da valutare
    ?>
    <?php
        /*
         * Con il ciclo for possiamo ciclare per un numero determinato
         * di passi. Deve essere dichiarata una variabile di controllo,
         * una condizione e l'incremento della variabile di controllo. 
         * tutto separato da un punto e virgola ( ; ).
         */
        for( $i = 0; $i < count($args); $i++ ){
            echo "<pre>";
            print_r( $args ); //come per while stampo i contenuti dell'array
            echo "</pre>";
        }
    ?>

    <?php
    /*
     * Il ciclo foreach permette di ciclare all'interno di un array, e 
     * soltanto all'interno di un array, senza la necessita' di
     * dichiarare una variabile di controllo
     */
    foreach( $args as $valore ){
        echo "<p>Il valore contenuto " . $valore . ".</p>";

    }
?>
    </body>
</html>
