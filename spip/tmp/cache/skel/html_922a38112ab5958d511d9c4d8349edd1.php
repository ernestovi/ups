<?php

/*
 * Squelette : ../prive/squelettes/top/dist.html
 * Date :      Thu, 25 Feb 2016 11:32:54 GMT
 * Compile :   Thu, 25 Feb 2016 11:43:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/top/dist.html
// Temps de compilation total: 0.407 ms
//

function html_922a38112ab5958d511d9c4d8349edd1($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '<!-- top -->';

	return analyse_resultat_skel('html_922a38112ab5958d511d9c4d8349edd1', $Cache, $page, '../prive/squelettes/top/dist.html');
}
?>