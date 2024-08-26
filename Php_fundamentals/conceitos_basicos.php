<?php 

echo "Olá, mundo\n";
$var1 = 5 + 5;

echo "O Resultado da soma é igual a: " . $var1;

switch($var1){
	case 10:
		echo "var1 é igual a 10";
        break;
	case 20:
		echo "var1 é igual a 20";
		break;
	default:
		echo "var1 não é igual a 10 e nem a 20";
		break;
 }

 //Repetição
 $i = 2;
 while ($i <= 20) {
	echo $i;
	$i+=2;
	echo "\n";
 }

 /*Sintaxe alternativa*/
 $i = 2;
 while ($i <= 20):
	echo $i;
	$i+=2;
	echo "\n";
 endwhile;

 $i = 2;
 do {
	echo $i;
	$i+=2;
	echo "\n";
 }while ($i <= 20);

 for ($i = 1; $i <= 20; $i++) {
	echo $i;
	echo "\n";
 }

 //Foreach
 $carros = Array("Fusca", "Monza", "Passat");

 foreach($carros as $carro){
	echo $carro;
	echo "\n";
 }