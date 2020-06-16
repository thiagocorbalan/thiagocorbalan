<?php

	// INICIANDO TODAS AS SESSÕES
	
	// SERVIDOR DO PROJETO
	if($_SERVER['HTTP_HOST'] == '192.168.0.13' || $_SERVER['HTTP_HOST'] == 'localhost'){
		
		$pasta = 'thiagocorbalan/';
		$url_base = 'http://'.$_SERVER['HTTP_HOST'].'/'.$pasta;
				
	} else {
		$pasta = '';
		$url_base = 'http://www.thiagocorbalan.com.br/'.$pasta;
	}
	

	// SESSION PARA LINKS
	$arquivo = explode("/", $_SERVER['PHP_SELF']);
	$arquivo = end($arquivo);
	$arquivo_s_extensao = substr($arquivo, 0, -4);
	
		
	//==========================================================================//==========================================================================
	
	define("HR","<hr>");

	
	// if($_GET['exec'] == "config"){

	// 	print "Server [HTTP_HOST] = <strong>".$_SERVER['HTTP_HOST']."</strong>";
	// 	print HR;
	// 	print "Server [REQUEST_URI] = <strong>".$_SERVER['REQUEST_URI']."</strong>";
	// 	print HR;
	// 	print "Server [DOCUMENT_ROOT] = <strong>".$_SERVER['DOCUMENT_ROOT']."</strong>";		
	// 	print HR;
	// 	print "Pasta = <strong>$pasta</strong>";
	// 	print HR;
	// 	print "URL Base = <strong>$url_base</strong>";
	// 	print HR;
	// 	print "Nome do Arquivo Atual = <strong>$arquivo</strong>";
	// 	print HR;
	// 	print "Nome do Arquivo Atual SEM extensão = <strong>$arquivo_s_extensao</strong>";

	// }
?>