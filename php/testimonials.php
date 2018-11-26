<section id="reviews" class="testimonials">
    <div class="content">
        <h2 class="fr-h2">
            Отзывы
        </h2>
        <div class="testimonial-carousel owl-carousel">
            <?php
            $arg = array(
                'post_type' => 'testimonials-posts',
                'order'    => 'DESC'
            );
            $services = new WP_Query;
            $posts = $services->query($arg);
            foreach($posts as $post):
            ?>

            <div class="item row">
                <div class="person-info">
                    <div class="img-person">
                        <?php
                        $person_photo = get_field('photo');
                        $person_url = $person_photo['sizes']['testimonials'];
                        $person_alt = $person_photo['alt'];
                        $person_width = $person_photo['sizes']['testimonials-width'];
                        $person_height = $person_photo['sizes']['testimonials-height'];
                        echo   '<img src="' . $person_url .'" height="' . $person_height . '" width="' . $person_width .'" alt="' . $person_alt . '" />';
                        ?>
                    </div>
                    <p class="person-name"><?php the_field('name'); ?></p>
                    <?php if(get_field('city')): ?>
                        <p class="person-city"><?php the_field('city'); ?></p>
                    <?php endif; ?>
                    <?php if(have_rows('products')): ?>
                        <p class="person-products-text">
                            Продукт
                        </p>

                        <p class="person-prod">
                            <?php while(have_rows('products')): the_row() ?>
                                <?php the_sub_field('add_product'); ?> <br>
                            <?php endwhile; ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="testimonial-review">
                    <div class="testimonial-review-text">
                        <?php the_sub_field('review'); ?>
                    </div>
                    <?php if(get_sub_field): ?>
                        <p class="get-photo-review" data-src="<?php the_sub_field('prtsc'); ?>">Смотреть фото отзыва</p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="hand-to-right xl-none">

        </div>
    </div>
    <div class="fr-hidden popup-img">
        <div class="row j-c al-c">
            <p class="close-button-img">
                <svg fill="#231f20" width="40" height="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.2 11.2">
                    <path d="M11.2,1.12L10.08,0,5.6,4.48,1.12,0,0,1.12,4.48,5.6,0,10.08,1.12,11.2,5.6,6.72l4.48,4.48,1.12-1.12L6.72,5.6Zm0,0"/>
                </svg>
            </p>
            <img src="" alt="">
        </div>
    </div>
</section>