<?php
	
	session_start() ;
	
	$code = $_GET[ 'codeProduit' ] ;
	$quantite = $_GET[ 'quantite' ] ;
	
		
	try {
		
		$bd = new PDO(
			'mysql:host=localhost;dbname=sanayabio_stocks' ,
			'sanayabio' ,
			'sb2021'
			) ;

		$bd ->exec("UPDATE Produit SET quantite=135+quantite WHERE code='GHJE5'");
		
		
		
				
		header( 'Location: ../vues/vue-stock.php' ) ;
	}
	catch( PDOException $e ){

		session_unset() ;
		session_destroy() ;
		
		header( 'Location: ../index.php?echec=0' ) ;
	}	
		
	
?>
