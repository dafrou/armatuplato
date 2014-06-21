<?php
    if(isset($errores) && count($errores)) {
        echo "<div class='errores'><ul>";
        foreach($errores as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul></div>";
    }
?>