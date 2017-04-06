<div id="read">
        <?php foreach($articles as $a) : ?>
                <div class="card">
                <div class="card-content">
                        <span class="card-title"><?php echo $a['title']; ?></span>
                        <p>
                                <?php echo $a['body']; ?>
                        </p>
                </div>
                </div>
        <?php endforeach ?>
</div>

