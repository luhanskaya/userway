<?php if (have_rows('title_text')) : ?>
    <?php while (have_rows('title_text')) :
        the_row(); ?>

        <section class="py-5 py-md-10">
            <div class="container">
                <?php if ($title = get_sub_field('title')) : ?>
                    <?php get_template_part(
                        'template-parts/blocks/title',
                        null,
                        array(
                            'class' => 'title',
                            'data'  => array(
                                'text'      => $title['text'],
                                'tag'       => $title['title_tag'],
                                'style'     => $title['title_styles'],
                                'classes'   => 'text-center mb-md-4',
                            )
                        )
                    ); ?>
                <?php endif; ?>

                <?php if ($text = get_sub_field('text')) : ?>
                    <div class="row fs-5">
                        <div class="col-md-8 mx-auto">
                            <?php echo $text; ?>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </section>

    <?php
    endwhile; ?>
<?php endif; ?>
