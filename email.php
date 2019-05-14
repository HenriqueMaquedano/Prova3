<?php
	$nome= filter_input(INPUT_POST, "nome");
	$email=filter_input(INPUT_POST, "email");
	$descricao=filter_input(INPUT_POST, "descricao");
	$fone=filter_input(INPUT_POST, "fone");
	echo "nome: " . $nome;
	echo "<br>E-mail: " . $email;
	echo "<br>Descrição: " . $descricao;
	echo "<br>Fone: " . $fone;
	
?>	

