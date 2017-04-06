<form action="index.php" method="post" id="add_article_form">
        <div class="input-field">
                <input placeholder="Title" id="title" name="title" type="text">
                <label for="title">Title</label>
        </div>
        <div class="input-field">
               <textarea id="body" name="body" class="materialize-textarea"></textarea>
                <label for="body">Body</label>
        </div>
        <!--<button class="btn waves-effect waves-light pink" type="submit" name="action" value="add_article">
                Submit  
        </button> -->
        <input type="submit" method="get" name="action" value="add_article">
</form>
