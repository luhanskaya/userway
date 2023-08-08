<?php if (have_rows('cnet')) : ?>
    <?php while (have_rows('cnet')) :
        the_row(); ?>

        <section class="section-cnet text-white">
            <div class="container">

                <div class="row px-3 px-lg-0">
                    <div class="col-lg-11 px-4 py-6 mx-auto position-relative">

                        <?php if ($background = get_sub_field('background')) : ?>
                            <figure class="rounded-4 z-index-1 w-100 h-100 bg-image overflow-hidden">
                                <?php get_template_part(
                                    'template-parts/blocks/image',
                                    null,
                                    array(
                                        'class' => 'image',
                                        'data'  => array(
                                            'webp_url'  => $background['url'], // WebP image URL
                                            'jpg_url'   => wp_get_attachment_image_src($background['ID'], 'full')[0], // JPG image URL
                                            'alt_text'  => $background['alt'], // Alt text for the image
                                            'classes'   => 'object-fit',
                                        )
                                    )
                                ); ?>
                            </figure>
                        <?php endif; ?>


                        <div class="row align-items-center z-index-2 position-relative">
                            <?php if ($image = get_sub_field('image')) : ?>
                                <div class="col-md-4 d-flex align-items-center justify-content-center position-relative py-5 py-md-3">
                                    <?php get_template_part('template-parts/blocks/dots'); ?>

                                    <div class="logo position-relative z-index-3">
                                        <?php echo $image; ?>
                                    </div>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="142" height="142" viewBox="0 0 142 142" fill="none" class="logo-bg-1 position-absolute top-50 start-50 translate-middle">
                                        <path opacity="0.12" d="M70.9986 142C110.214 142 142 110.219 142 71.0058C142 31.7869 110.214 4.76656e-10 70.9986 4.76656e-10C31.7804 -0.000142133 0 31.7868 0 71.0056C0 110.218 31.7804 142 70.9986 142Z" fill="#3368F2" />
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="170" height="170" viewBox="0 0 170 170" fill="none" class="logo-bg-2 position-absolute top-50 start-50 translate-middle">
                                        <path opacity="0.12" d="M84.9983 170C131.947 170 170 131.952 170 85.0069C170 38.0548 131.947 5.70645e-10 84.9983 5.70645e-10C38.047 -0.00017016 0 38.0546 0 85.0067C0 131.952 38.047 170 84.9983 170Z" fill="#3368F2" />
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="198" height="198" viewBox="0 0 198 198" fill="none" class="logo-bg-3 position-absolute top-50 start-50 translate-middle">
                                        <path opacity="0.12" d="M98.998 198C153.679 198 198 153.685 198 99.008C198 44.3226 153.679 6.64633e-10 98.998 6.64633e-10C44.3135 -0.000198186 0 44.3224 0 99.0078C0 153.685 44.3135 198 98.998 198Z" fill="#3368F2" />
                                    </svg>

                                </div>
                            <?php endif; ?>

                            <?php if ($text = get_sub_field('text')) : ?>
                                <div class="col-md-8 fs-large pt-3 pt-md-0">
                                    <?php echo $text; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

            </div>
        </section>

    <?php
    endwhile; ?>
<?php endif; ?>
