<?php 
        require('/home/norplu/www/web2/proj_one/models/database.php');
        require('/home/norplu/www/web2/proj_one/models/articles.php');

        if(isset($_POST['action'])) { $action = $_POST['action']; }
        else if(isset($_GET['action'])) { $action = $_GET['action']; }
        else { $action = 'list_articles'; }

        if($action == 'list_articles') {
                $articles = get_articles();
                include('articles_list.php');
        } 
        else if($action == 'proj_list') { include('proj_page.php'); } 
        else if($action == 'add_article_form') { include('admin_page.php'); }
        else if($action == 'add_article') {
                $title = $_POST['title'];
                $body = $_POST['body'];

                add_article($title, $body);

        }

?>
