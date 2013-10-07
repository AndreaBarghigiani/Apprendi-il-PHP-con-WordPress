<?php
//Richiamo header.php
    get_header();
?>

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


<?php 
    //Richiamo sidebar.php
    get_sidebar();
?>
<?php
    //Richiamo footer.php
    get_footer();
?>