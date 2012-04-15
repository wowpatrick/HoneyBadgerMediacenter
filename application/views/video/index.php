<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
    <h1>Hello, world!</h1>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
    <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
</div>

<!-- Example row of columns -->
<div class="row">
    
    <?php foreach ($video as $video_item): ?>
    <div class="span4">
        <h2><?php echo $video_item ?></h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn" href="<?php echo $url.$video_item ?>">View movie!</a></p>
    </div>
    <?php endforeach; ?>
    
</div>

