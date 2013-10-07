<?php 
    $eta = $_POST['eta']; 
    if( $eta){ echo $eta; } 
?>
<form action="" method="post" id="sample-form">
    <input type="number" name="eta" value="">Eta<br>
    <input type="email" name="email" value="">Email<br>
    <textarea name="bio">Inserisci la tua Bio</textarea>
    <input type="submit" value="Invia">
</form>



<?php 
    /**
     * Controllo che il valore inviato dall'utente corrisponda
     * ad un intero con il metodo validate
     */
     
    //Variabile di controllo
    $pulito = array();
    
    //Eseguo il codice soltanto se $_POST contiene dei valori
    if( $_POST ){     
        $pulito['eta'] = absint( $_POST['eta'] );
    }
    
    if( $pulito['eta'] ){ echo $pulito['eta']; } 
?>


//Controllo un campo select
<?php 
    /**
     * Controllo che il valore inviato dall'utente corrisponda
     * ad un intero con il metodo validate
     */
    
    //Variabile di controllo
    $pulito = array();
    
    //Eseguo il codice soltanto se $_POST contiene dei valori    
    if( $_POST ){ 
        
        //Controllo che il campo eta sia numerico
        $pulito['eta'] = absint( $_POST['eta'] );
        
        //Imposto dei valori di default per i colori
        switch( $_POST['colore'] ){
            case "rosso":
            case "verde":
                $pulito['colore'] = $_POST['colore'];
                break;
            case "giallo":
            default:
                $pulito['colore'] = "giallo";
                break;
        }
    }
    //Controllo la mail inviata dall'utente
    
    
    if( $pulito['eta'] ){ echo $pulito['eta'] . "<br>"; } 
    if( $pulito['colore'] ){ echo $pulito['colore']; }
?>
<form action="" method="post" id="sample-form">
    <input type="number" name="eta" value="">Eta<br>
    <select name="colore" id="colore">
        <option value="rosso">Rosso</option>
        <option value="verde">Verde</option>
        <option value="giallo">Giallo</option>
    </select>
    <input type="email" name="email" value="">Email<br>
    <textarea name="bio">Inserisci la tua Bio</textarea>
    <input type="submit" value="Invia">
</form>


//Controllo una mail
<?php 
    /**
     * Controllo che il valore inviato dall'utente corrisponda
     * ad un intero con il metodo validate
     */
    
    //Variabile di controllo
    $pulito = array();
    
    //Eseguo il codice soltanto se $_POST contiene dei valori    
    if( $_POST ){ 
        
        //Controllo che il campo eta sia numerico
        $pulito['eta'] = absint( $_POST['eta'] );
        
        //Controllo la mail inviata dall'utente    
        $pulito['email'] = is_email( $_POST['email'] ); //Validate
        $pulito['email'] = sanitize_email( $_POST['email'] ); //Sanitize
        
        /**
         * Mail da provare
         *
         * Validate:
         *    finta@email
         *    (errore)@(email).com
         *    corretta@email.com
         *
         * Sanitize
         *    finta@email
         *    errore@email..com
         *    (errore)@(email).com
         */
    }
    
    
    
    if( $pulito['eta'] ){ echo $pulito['eta'] . "<br>"; } 
    if( $pulito['email'] ){ var_dump( $pulito['email'] ); }
?>
<form action="" method="post" id="sample-form">
    <input type="number" name="eta" value="">Eta<br>
    <input type="email" name="email" value="">Email<br>
    <textarea name="bio">Inserisci la tua Bio</textarea>
    <input type="submit" value="Invia">
</form>


//Controllo la bio
<?php 
    /**
     * Controllo che il valore inviato dall'utente corrisponda
     * ad un intero con il metodo validate
     */
    
    //Variabile di controllo
    $pulito = array();
    
    //Eseguo il codice soltanto se $_POST contiene dei valori    
    if( $_POST ){ 
        
        //Controllo che il campo eta sia numerico
        $pulito['eta'] = absint( $_POST['eta'] );
        
        //Controllo la bio inserita dall'utente
        $e_permessi = array(
            'strong' => array(),
            'a' => array(
                'href' => array(),     
                'title' => array(),
            ),
        );
        
        //Inserisco il valore pulito
        $pulito['bio'] = wp_kses( $_POST['bio'], $e_permessi );
    }
    
    if( $pulito['eta'] ){ echo $pulito['eta'] . "<br>"; } 
    if( $pulito['bio'] ){ echo $pulito['bio']; }
?>
<form action="" method="post" id="sample-form">
    <input type="number" name="eta" value="">Eta<br>
    <input type="email" name="email" value="">Email<br>
    <textarea name="bio">Inserisci la tua Bio</textarea>
    <input type="submit" value="Invia">
</form>