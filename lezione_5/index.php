<!doctype html>
<html lang="it-IT">
<head>
    <meta charset="UTF-8">
    <title>Funzioni: come Automatizzare Operazioni Complesse</title>
</head>
<body>
    
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
        //echo $calcolo;
        /*Controllo il valore restituito 
        if( $calcolo > 4 ){
            echo 'Ho calcolato il valore di $calcolo &egrave;: ' . $calcolo;
        }//fine if( $calcolo > 4 ) */

        //Altro controllo sulla stessa variabile $calcolo
        if( $calcolo ){
            echo "<br>Strano, funziona anche questa!";
        }//fine if( $calcolo ) 


    ?>

    
</body>
</html>