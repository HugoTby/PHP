<style>
    strong{color:red;}; 
</style>
<?php
function tableau($tableau)
{
    echo "<table border='2px'>";

        for ($a = 0; $a < sizeof($tableau); $a++)
        {
            echo "<tr><td>Élément N°".$a. " : <strong>".$tableau[$a]."</strong></td></tr>";
        }

    echo "</table>";



 
}



?>




