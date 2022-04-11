<?php

$valor= 4;
$valor2= 2;
$calculoResultado1=1;

$valorFlu1=1.5;
$valorFlu2=2.6666;
$calculoFlu=2;


if($calculoResultado1 >0){
    $calculoResultado1=$valor*$valor2;
    echo "o resultado é maior ".$calculoResultado1;
    
}else{
    echo "o resultado é menor ".$calculoResultado1;
}

?>
<br>
<?php
if($calculoFlu>0){
    $calculoFlu=$valorFlu1+$valorFlu2;
    echo "o resultado é maior ".$calculoFlu;
}else{
    echo"O resultado é menor ".$calculoFlu;
}
?>
<br>

<?php
 $testando = "Olá Mundo Novo";
 $testando1 = "--- $testando ---";
 echo $testando1;
?>