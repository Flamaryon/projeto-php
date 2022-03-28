<?php
	
	/*
	Primeiros comandos para aprendermos a linguagem de programação em PHP
	*/

	/////////////////////////////////////////////////////////////////////////////////////
 	$nome = "Flamaryon"; 	
 	$sobrenome = "Carvalho Araújo";
 	$nomeCompleto = "Flamaryon Carvalho Araújo";
 	$idade = 37;
 	$anoNascimento = 1985;
 	$informacao = 'teste de campo com aspas simples';
 	$altura = 1.79; //variável do tipo real ou ponto flutuante
 	$disciplinas = array("Sistemas Operacionais", "Programação Visual", "Internet e programação Web"); //variável do tipo lista
 	$nascimento = new Datetime();	//variável tipo objeto
 	$arquivo = fopen("index.php", "r"); //variável do tipo arquivo 
 	$nulo = NULL; //variável do tipo nulo
 	/////////////////////////////////////////////////////////////////////////////////////

 	echo "O seu nome é: " . "<strong>" . $nome . "</strong> </br>";
 	echo "O seu nome completo é: " . "<strong>" . $nome . " " . $sobrenome . "</strong> </br>";
 	echo "Sua idade é: " ."<strong>" . $idade . "</strong>";

 	//dando um ENTER E criando um espaço entre a informação anteior e a próxima que virá
 	echo "</br> </br>";

 	//verificar o tipo, o tamanho que ocupou e o valor da variável
 	var_dump($nome);

 	echo "</br>";

 	//verificar o tipo, o tamanho que ocupou e o valor da variável
 	var_dump($idade);

 	echo "</br>";

 	//verificar o tipo, o tamanho que ocupou e o valor da variável
 	var_dump($informacao);


 	echo "</br> </br>";	

 	echo $disciplinas[2];

 	//comando para limpar a variável da memória
 	unset($nome);

 	if (isset($nome)) {
 		echo "O seu nome é: " . $nome;
 	}

 	echo "</br>";
 	var_dump($nascimento);

	echo "</br>";
 	var_dump($arquivo);

 	echo "</br>";
 	var_dump($nulo);

?>			