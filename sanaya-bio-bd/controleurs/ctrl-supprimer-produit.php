<?php

	session_start() ;
	
	$code = $_GET[ 'codeProduit' ] ;
		
	try {
		
		$bd = new PDO(
			'mysql:host=localhost;dbname=sanayabio_stocks' ,
			'sanayabio' ,
			'sb2021'
			) ;
		$bd ->exec("delete from Produit WHERE code='HKDD7'");


$sql = 'select numero , nom , prenom '
 . 'from Compte '
 . 'where login = :login '
 . 'and mdp = :mdp' ;
 
$st = $bd -> prepare( $sql ) ;

$st -> execute( array( 
					':login' => $login ,
					':mdp' => $mdp 
			) 
		) ;
$resultat = $st -> fetchall() ;

unset( $bd ) ;
		
		
				
		header( 'Location: ../vues/vue-stock.php' ) ;
	}
	catch( PDOException $e ){
		
		session_unset() ;
		session_destroy() ;
		
		header( 'Location: ../index.php?echec=0' ) ;
	}
?>
