<?php
/**
 * Created by PhpStorm.
 * User: Magda
 * Date: 2017-10-22
 * Time: 20:56
 */

$lista = array(array("Shopping", "Two carrots and banana"),
                array("Gym", "Zumba and TBC"),
                array("Beauty Salon", "Mani&Pedi"));

foreach($lista as $tasks){
    echo ("New task<br><br>");
    foreach($tasks as $item){
        echo ("$item<br>");
    }
}

?>