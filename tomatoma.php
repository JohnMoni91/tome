/*1) Forneça a data atual em PHP na tela, juntamente com as horas, minutos e segundos.*/
<?php
echo date("d/m/Y H:i");
?>

/*2) Forneça a data e hora atual com o fuso-horário do Brasil e um fuso-horário da Ásia.*/
<?php
date_default_timezone_set("America/Sao_Paulo");
echo date("d/m/Y H:i");
?>

/*3) Chame o dia do mês na tela.*/
<?php
date_default_timezone_set("America/Sao_Paulo");
echo date("d | M");
?>

/*4) Chame o dia da semana na tela.*/
<?php
date_default_timezone_set("America/Sao_Paulo");
echo date("D");
?>

/*5) Declare um array qualquer.*/
<?php
$alo = array("uma", "duas");
print_r($alo);
?>

/*6) Considere o seguinte array:
$palavras = array("maçã", "banana", "laranja", "uva", "manga", "abacaxi", "pêssego",
"kiwi", "morango", "melancia");
Acesse pra mim a posição 5 e a 10 na tela.*/

<?php
$palavras = array("maçã", "banana", "laranja", "uva", "manga", "abacaxi", "pêssego",
"kiwi", "morango", "melancia");

echo " " .$palavras[4];
echo " " .$palavras[9];
?>

/*7) Faça um array associativo.*/
<?php
$arra = array("Maça" => "Fruta");
echo $arra["Maça"];
?>

/*8) Faça um array multidimensional*/

<?php
$doces = array (
  array("Paçoca", "R$1,00" ),
  array("Sorvete", "R$6,00"),
);
  
echo $doces[0][0]." custa: ".$doces[0][1]."\n";
echo $doces[1][0]." custa: ".$doces[1][1]."\n";
?>

/*9) Considere o array da questão 6. Verifique se existe a fruta ameixa com uma função
nativa que retorne um valor booleano.*/

<?php
$palavras = array("maçã", "banana", "laranja", "uva", "manga", "abacaxi", "pêssego", "kiwi", "morango", "melancia");

$temAmeixa = in_array("ameixa", $palavras);

if ($temAmeixa) {
    echo "A fruta 'ameixa' está no array.";
} else {
    echo "A fruta 'ameixa' não está no array.";
}
?>

/*10) Demonstre como usar a função in_array().

É um tipo de dado lógico que pode ter apenas um de dois valores possíveis: verdadeiro ou falso*/

<?php
$palavras = array("topo", "topi", "teto");

$pro = in_array("topi", $palavras);

if ($pro) {
    echo "você achou a palavra perdida";
} else {
    echo "você não achou a palavra perdida";
}
?>

/*11) Considere o array:
$palavras = array( "casa", "carro", "gato", "cachorro", "árvore", "mesa", "computador",
"telefone", "livro", "janela", "cadeira", "bicicleta", "ponte", "cidade", "rio", "floresta",
"montanha", "praia", "sol", "lua", "estrela", "mar", "oceano", "planeta", "universo", "flor",
"jardim", "grama", "pássaro", "peixe", "tigre", "leão", "elefante", "girafa", "macaco", "banana",
"maçã", "laranja", "uva", "melancia", "kiwi", "pêssego", "abacaxi", "morango", "tomate",
"pipoca", "chocolate", "sorvete", "pizza", "hambúrguer" );

Conte quantos elementos tem e printe na tela, usando uma função nativa.*/

<?php
$palavras = array( "casa", "carro", "gato", "cachorro", "árvore", "mesa", "computador",
"telefone", "livro", "janela", "cadeira", "bicicleta", "ponte", "cidade", "rio", "floresta",
"montanha", "praia", "sol", "lua", "estrela", "mar", "oceano", "planeta", "universo", "flor",
"jardim", "grama", "pássaro", "peixe", "tigre", "leão", "elefante", "girafa", "macaco", "banana",
"maçã", "laranja", "uva", "melancia", "kiwi", "pêssego", "abacaxi", "morango", "tomate",
"pipoca", "chocolate", "sorvete", "pizza", "hambúrguer" );

$contando=count($palavras);
echo $contando;
?>

 /*12) Mostre as chaves do array associativo criado na questão 7.*/

Maçã => Fruta

 /*13) Mostre um exemplo de código usando explode e implode.*/
#Implodindo:
<?php
$texto = ["texto implodindo"]; 
$imText = implode(" ", $texto); 
echo $imText;
?>

#Explodindo:
<?php
$textPlo = "um,texto,explodindo,321, explodiu"; 
$array = explode(",", $textPlo, -2); print_r($array);
?>
