<?php
	/*
	 * All'interno di questo file si trovana il codice che verra' richiesto
	 * grazie alla funzione require()
	 */


	/* 
	 * La funzione restituisco_valore( $var ) e' stata gia' vista nella
	 * lezione precedente, per questo non inseriro' alcun commento 
	 */
	
	function restituisco_valore( $var ){
	 
	    $var = intval( $var );
	 
	    if( $var > 3){
	        $var = $var * $var;
	    } elseif( $var < 2 ){
	        $var = 5;
	    } else {
	        $var = 12;
	    }
	    return $var;
	 
	}//fine restituisco_valore()