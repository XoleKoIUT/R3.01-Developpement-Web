<?php
function formConnexion()
{
    echo "<table>\n";
    echo "<form action=\"gestionLogin.php\" method=\"post\">\n";
    echo "<tr><td>Nom</td><td><input name=\"nom\" required ></td></tr>\n";
    echo "<tr><td>Mot de passe</td><td><input type=\"password\" name=\"password\" required></td></tr>\n";
    echo "<tr><td><input type=\"reset\" value=\"Annuler\"></td>\n";
    echo "<td><input type=\"submit\" value=\"Valider\"></td>\n";
    echo "</tr>\n";
    echo "</form>\n";
    echo "</table>\n";
}
?>