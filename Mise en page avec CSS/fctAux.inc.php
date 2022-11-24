<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

function enTete() {
    echo "<html lang=\"fr\">\n";
    echo "<head>\n";
    echo "<meta charset=\"utf-8\">\n";
    echo "<link rel=\"stylesheet\" href=\"miseEnPage.css\">\n";
    echo "<title>Formulaire & PHP</title>\n";
    echo "</head>\n";
    echo "<body>\n";
}


function piedDePage() {
    echo '</body></html>';
}
?>