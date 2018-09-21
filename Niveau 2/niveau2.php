<?php
for ($i=0; $i <11 ; $i++)
{ 
    if (isset($_POST['check_'.$i.''])) 
    {
        $valeur = $_POST['check_'.$i.''];

        for($j=0; $j < 11; $j++)
        { 
            echo $valeur.' x '.$j.' = '.$valeur * $j.'<br>';
        }
        echo '<br>';
    }
}
?>