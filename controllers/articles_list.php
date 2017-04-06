<div id="read">
        <?php foreach($articles as $a) : ?>
                <h3>
                        <?php echo $a['title']; ?>
                </h3>         
                <p>
                        <?php echo $a['body']; ?>
                </p>
        <?php endforeach ?>
</div>

