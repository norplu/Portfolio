<?php
        function 
        get_articles()
        {
                global $db;
                $query = 'SELECT * 
                          FROM articles
                          ORDER BY article_id;';
                
                $result = $db->query($query);
                return $result;
        }

        function 
        add_article($title, $body) 
        {
                global $db;
                $query = "INSERT INTO articles(title, body)
                          VALUES('$title', '$body');";

                $db->exec($query);
        }

        function 
        delete_article($article_id) 
        {
                global $db;
                $query = "DELETE FROM articles
                          WHERE article_id = '$article_id';";

                $db->exec($query);
        }
?>
