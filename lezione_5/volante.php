<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Stampo a Video con PHP</title>
        <meta name="description" content="">

        <link rel="stylesheet" href="percorso/style.css">
        
    </head>
    <body>
    
    <?php
        /**
         * Queste sono le funzioni che hai gia' incontrato
         */
        
        echo(); //Istruzione che mostra nel browser il valore inserito
        count(); //Funzione che permette di contare gli elementi di un array
    ?>
    
    <?php

        /**
         * La funzione restituisce un parametro che utilizzeremo più tardi
         *
         * Con la parola chiave return si dice alla funzione di passare
         * il valore ottenuto perche' verra' usato piu' avanti nel codice
         *
         * @param int $var Il valore numerico da confrontare
         * @return $var Il risultato delle operazioni svolte
         */

        //Dichiarazione
        function restituisco_valore( $var ){

            $var = intval( $var );//mi assicuro che sia un numero intero

            if( $var > 3){
                $var = $var * $var;//calcolo la potenza
            } elseif( $var < 2 ){
                $var = 5;
            } else {
                //se $var == 3
                $var = 12;
            }
            return $var;

        }//fine restituisco_valore()

        //Chiamata
        $calcolo = restituisco_valore( 4 );//inserisco il valore restituito in $calcolo

        //Controllo il valore restituito 
        if( $calcolo > 4 ){
            echo 'Ho calcolato il valore di $calcolo &egrave;: ' . $calcolo;
        }//fine if( $calcolo > 4 )

        //Altro controllo sulla stessa variabile $calcolo
        if( $calcolo ){
            echo "<br>Strano, funziona anche questa!";
        }//fine if( $calcolo )


    ?>

    <?php

        /*
         * La funzione accetta il parametro $nome
         *
         * Passare un parametro a una funzione significa passare un valore
         * che potrà essere utilizzato nella sua dichiarazione
         *
         * @param string $nome Il nome che verra' mostrato nel browser
         */

        //Dichiarazione
        function stampa_nome( $nome ){

            echo $nome; //stampo il valore del parametro $nome

        }//fine stampa_nome( $nome )

        //Chiamata
        $mio = "Andrea"
        stampa_nome( $mio ); // Mostra Andrea
        stampa_nome( "Gabriele" ); // Mostra Gabriele
    ?>

    <?php

        /*
         * Crea la tua prima funzione
         *
         * In questo esempio andremo a creare una semplice funzione che
         * stampa il tuo nome nella pagina HTML
         */

        //Dichiarazione
        function stampa_nome(){

            echo "Andrea"; //da cambiare con il tuo nome

        }//fine stampa_nome()

        //Chiamata
        stampa_nome();
    ?>

        

    </body>
</html>
