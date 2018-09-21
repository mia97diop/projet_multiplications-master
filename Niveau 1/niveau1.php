<?php
//table de Zéro
$valeur = $_POST['table'];


for ($i=0; $i < 11; $i++)
{ 
     echo $valeur.' x '.$i.' = '.$valeur * $i.'<br>';
}
