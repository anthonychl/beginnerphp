<?php
	//video 29 die y exit
	
	mysql_connect('localhost','juan','') or die ('Error al conectar la BD');
	echo 'Conectado';
	
	/*
	//otras formas
	
	mysql_connect('localhost','juan','') || die ('Error al conectar la BD');
	echo 'Conectado';
	
	//si solo queremos q muestre el mensaje del die al dar error
	//y no otro mas q nos de php x esa linea colocamos una @ delante de mysql_connect
	
	@mysql_connect('localhost','juan','') or die ('Error al conectar la BD');
	echo 'Conectado';
	
	*/
?>