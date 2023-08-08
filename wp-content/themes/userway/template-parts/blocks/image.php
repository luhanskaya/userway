<?php
if ($args['class']) : ?>

    <picture>
        <source type="image/webp" srcset="<?php echo $args['data']['webp_url']; ?>">
        <source type="image/jpeg" srcset="<?php echo $args['data']['jpg_url']; ?>">
        <img loading="lazy" class="<?php echo $args['data']['classes']; ?>" alt="<?php echo $args['data']['alt_text']; ?>" src="<?php echo $args['data']['jpg_url']; ?>">
    </picture>

<?php endif; ?>
