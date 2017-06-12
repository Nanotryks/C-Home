<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 10/06/2017
 * Time: 11:12
 */
$q=$_GET["q"];

if($q=='manuel')
{

    echo "<input type='radio' name='mode' value='auto' onclick='showUser4(this.value)' ><label>Automatique</label>";
    echo "<input type='radio' name='mode' value='manuel' checked><label>Manuel</label><br><br>";
    echo "<input type='text' name='valeur'><br><br>";
    echo "<input type='submit' value='Changer la valeur'>";

}
else
{
    if($q=='auto')
    {
        echo "<input type='radio' name='mode' value='auto' checked><label>Automatique</label>";
        echo "<input type='radio' name='mode' value='manuel' onclick='showUser4(this.value)'><label>Manuel</label><br><br>";
        echo "<input type='submit' value='Changer de mode'>";
    }
    else
    {

    }
}
