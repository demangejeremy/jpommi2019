<?php
        // On execute la requete de l'utilisateur
        $result = mysqli_query($connection,$querySaisie);
        $all_property = array();  

        // En cas d'erreur dans la requete, on affiche une erreur
        if (!mysqli_query($connection,$querySaisie))
        {
        echo("Votre code SQL déclenche une erreur : <b>" . mysqli_error($connection) . "</b>");
        }

        // On affiche le nom des champs
        echo '<table class="table">
                <tr>';  
        while ($property = mysqli_fetch_field($result)) {
            echo '<th>' . $property->name . '</th>'; 
            array_push($all_property, $property->name);  
        }
        echo '</tr>'; 

        // On affiche les donnees dans le tableau
        while ($row = mysqli_fetch_array($result)) {
            echo "<tfoot><tr>";
            foreach ($all_property as $item) {
                echo '<th>' . $row[$item] . '</th>'; 
            }
            echo '</tr></tfoot>';
        }
        echo "</table>";

?>