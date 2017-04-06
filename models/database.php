<?php
        // DO NOT DO THIS FIX THIS FOR THE LOVE OF GOD PLEASE

        try {
                $db = new PDO('sqlite:/home/norplu/www/web2/proj_one/db/articles.db');
        } catch(PDOException $e) {
                echo $e;
                exit();
        }
?>
