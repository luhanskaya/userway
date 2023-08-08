<?php if (have_rows('hero')) : ?>
    <?php while (have_rows('hero')) :
        the_row(); ?>

        <section class="text-center py-8 py-lg-12">
            <div class="container">
                <?php if ($title = get_sub_field('title')) : ?>
                    <?php get_template_part(
                        'template-parts/blocks/title',
                        null,
                        array(
                            'class' => 'title',
                            'data'  => array(
                                'text'  => $title['text'],
                                'tag'   => $title['title_tag'],
                                'style' => $title['title_styles'],
                            )
                        )
                    ); ?>
                <?php endif; ?>

                <?php if ($text_lead = get_sub_field('text_lead')) : ?>
                    <div class="mb-6"><?php echo $text_lead; ?></div>
                <?php endif; ?>

                <?php if ($text = get_sub_field('text')) : ?>
                    <div class="row fs-5">
                        <div class="col-md-9 mx-auto">
                            <?php echo $text; ?>
                        </div>
                    </div>
                <?php endif; ?>


                <?php if (have_rows('video_group')) : ?>
                    <?php while (have_rows('video_group')) :
                        the_row(); ?>

                        <div class="d-flex align-items-center justify-content-center mt-4 mt-md-5">
                            <?php
                            $video_id = get_sub_field('video_id');
                            $button_text = get_sub_field('button_text');

                            if ($video_id) : ?>
                                <a class="btn-video js-youtube-link" href="#" type="button" data-bs-toggle="modal" data-bs-target="#videoModal" data-src="//www.youtube.com/embed/<?php echo $video_id; ?>">
                                    <?php get_template_part('template-parts/blocks/btn-play'); ?>
                                </a>
                            <?php endif; ?>

                            <?php
                            if ($video_id && $button_text) :
                            ?>
                                <a class="fw-bold js-youtube-link ms-3" href="#" type="button" data-bs-toggle="modal" data-bs-target="#videoModal" data-src="//www.youtube.com/embed/<?php echo $video_id; ?>">
                                    <?php echo esc_html($button_text); ?>
                                </a>
                            <?php endif; ?>


                            <?php
                            if ($video_id) :
                            ?>
                                <!-- Modal -->
                                <div class="modal fade js-youtube-modal" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-body equal equal-50">
                                                <iframe class="bg-image object-fit" id="video" width="560" height="315" src="" frameborder="0" allowfullscreen allow="autoplay"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endif; ?>
                        </div>


                    <?php
                    endwhile; ?>
                <?php endif; ?>


                <?php if (have_rows('button_group')) : ?>
                    <?php while (have_rows('button_group')) :
                        the_row();
                        $link = get_sub_field('link');
                        $button = get_sub_field('button');
                        if ($link || $button) : ?>
                            <div class="mt-3">
                                <?php
                                if ($link) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                    <a class="link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                <?php endif; ?>

                                <?php
                                if ($button) :
                                    $button_url = $button['url'];
                                    $button_title = $button['title'];
                                    $button_target = $button['target'] ? $button['target'] : '_self';
                                ?>
                                    <div class="d-block mt-1">
                                        <a class="btn btn-primary" href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>


                    <?php
                    endwhile; ?>
                <?php endif; ?>

            </div>
        </section>

    <?php
    endwhile; ?>
<?php endif; ?>
