<?php
if ( $args['class'] ): ?>

    <?php if (!empty($args['data']['text'])): ?>
        <<?php echo $args['data']['tag']; ?> class="<?php echo ($args['data']['style'] == $args['data']['tag']) ? '' : $args['data']['style']; ?><?php echo !empty($args['data']['classes']) ? '' . $args['data']['classes'] : ''; ?>">
            <?php echo $args['data']['text']; ?>
        </<?php echo $args['data']['tag']; ?>>
    <?php endif; ?>

<?php endif; ?>
