<?php
include "segun.php";
include "tercer.php";



$aux=new prime();
$aux2=new segun();
/*
$aux->setvalor(10);
$aux->somar(5);
print $aux->getvalor();
*/

$aux->setvalor(10);
$aux2->setvalor(20);

$aux->somar(30);

if ($aux->getvalor()==40) {
	$aux2->mult(2);
	print $aux2->getvalor();

} else {
	print $aux->getvalor();
	print "nada";
}


?>