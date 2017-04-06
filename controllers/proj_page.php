<!-- uses github api, please work, please let me be able to do this or i'm gonna
     be very very very sad -->
<?php include 'controllers/proj_get.php' ?>
<?php foreach($repos as $repo) : ?>
        <div class="card">
                <div class="card-content">
                        <span class="card-title">
                                <a href="<?php echo $repo->html_url; ?>">
                                        <?php echo $repo->name; ?>
                                </a>
                        </span>
                        <p><?php echo $repo->description; ?></p> 
                </div>
        </div>
<?php endforeach ?>

