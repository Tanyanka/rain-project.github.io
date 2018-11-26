<?php
get_header();
?>

<?php
/* Start the Loop */
if(have_posts()) : while(have_posts()) : the_post();

endwhile;
endif;
?>
<?php get_template_part('inc/slider'); ?>
    <section id="about-company" class="revealator-slideup revealator-once about-company fr-parallax-block">
        <?php
        $img1 = get_field('img_about_1');
        $img2 = get_field('img_about_2');
        ?>
        <img width="<?php echo $img1['width']; ?>" height="<?php echo $img1['height']; ?>" src="<?php echo $img1['sizes']['small']; ?>" data-original="<?php echo $img1['url']; ?>" alt="<?php echo $img1['alt']; ?>" class="fr-parallax fr-lazy about-company-img-1" data-speed=".05">
        <img width="<?php echo $img2['width']; ?>" height="<?php echo $img2['height']; ?>" src="<?php echo $img2['sizes']['small']; ?>" data-original="<?php echo $img2['url']; ?>" alt="<?php echo $img2['alt']; ?>" class="fr-parallax fr-lazy about-company-img-2" data-speed=".15">
        <div class="title-block content">
            <h2 class="fr-h2">
                <?php the_field('about_block_title'); ?>
            </h2>
        </div>
        <div class="content row j-spb">
            <div class="video-block">
                <?php the_field('video_iframe'); ?>
            </div>
            <div class="about-company-content cl-6">
                <?php the_field('about_block_text'); ?>
            </div>
        </div>
    </section>
    <section class="r-sertificates revealator-slideup  revealator-delay3 revealator-once">
        <?php
        $sertificate_img = get_field('sertificate_bg_img');
        ?>
        <img width="<?php echo $sertificate_img['width']; ?>" height="<?php echo $sertificate_img['height']; ?>" src="<?php echo $sertificate_img['sizes']['small']; ?>" data-original="<?php echo $sertificate_img['url']; ?>" alt="<?php echo $sertificate_img['alt']; ?>" class="fr-parallax fr-lazy sertificate-img-1" data-speed=".05">
        <div class="title-block content">
            <h2 class="fr-h2">
                <?php the_field ('title_sertification'); ?>
            </h2>
        </div>
        <div class="t-sertificates-logo content">
            <div class=" row j-c">
                <?php
                if(have_rows('sertificate')) : while(have_rows('sertificate')) : the_row(); ?>
                    <?php

                    $image = get_sub_field('logo_sertificate');;
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)

                    ?>
                    <?php
                    if(get_sub_field('sertificate')):
                        ?>
                        <a class="sertificate-link" href="<?php the_sub_field('sertificate'); ?>" target="_blank">
                            <?php

                            echo wp_get_attachment_image( $image, $size );

                            ?>

                        </a>
                        <?php
                    else:
                        ?>
                        <div class="sertificate-link" >
                            <?php

                            echo wp_get_attachment_image( $image, $size );

                            ?>
                        </div>
                    <?php endif; endwhile; endif;
                ?>
            </div>
        </div>
    </section>
    <section id="advertismen" class="revealator-slideup revealator-once advantages">
        <div class="content">
            <div class="title-block">
                <h2 class="fr-h2">
                    <?php the_field('advertismen_title'); ?>
                </h2>
            </div>
            <div class="row j-spb">
                <div class=" cl-6 advantages-content">
                    <div class="cold-gym row al-c j-spb">
                        <div class="cold-gym-img cl-3">
                            <div><?php
                                $imageCold = get_field('img_cold');
                                $size_full = 'full'; // (thumbnail, medium, large, full or custom size)

                                if( $imageCold ) {

                                    echo wp_get_attachment_image( $imageCold, $size_full );

                                }
                                ?>
                                <p><?php the_field('advertismen_sub_title'); ?></p>
                            </div>
                        </div>
                        <div class="cold-gym-text">
                            <?php the_field('advertismen_description'); ?>
                        </div>
                    </div>
                    <div class="advantages-infografic">
                        <div class="row al-c">
                            <div class="advantage">
                                <?php the_field('advertismen_item_1'); ?>
                            </div>
                            <div class="advantage-icon">
                                <svg fill="#8cc63f" width="67" height="68" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 772.36 782.94">
                                    <g>
                                        <path d="M46,171.3c28.48,66.24,76.56,131.76,143.84,160a154.23,154.23,0,0,0,25.36,7.6c17.92-26.72,38.48-48.4,62.56-66.16a314.37,314.37,0,0,1,64.72-36.48A183,183,0,0,0,322.33,224c-28-14.64-58.32-27.52-87.84-41.36,27.76,7.52,59.6,10.32,86.16,20a200.19,200.19,0,0,1,46.08,24.48c42.48-14.48,86.88-21.44,131.2-26.72C462,140.74,385.37,92.82,327.61,71.14,267.29,48.5,199,45.7,131.85,38.74,90.73,34.5,46,19.14,13.29,1.22,5.85-2.86-2.07,3.94.49,12.18,16.57,63.62,24.73,121.86,46,171.3h0Zm0,0"/>
                                        <path d="M755.21,163.46c-75.68,41.12-162.48,46.16-247.52,55.92-41.52,4.8-82.64,10.72-121.76,22.56-8.48,2.56-17,5.44-25.28,8.64a297.87,297.87,0,0,0-71,38.4,240.81,240.81,0,0,0-53,54.16c-23.2,32.32-39.36,69.52-52.64,108.16a616.78,616.78,0,0,0-33.2,218.88c0.88,30.08,1.36,61.36,8.8,90.72,1.68,6.48,3.28,14.72,8.32,19.52,6.56,6.32,18.32-.16,15.68-9.36-19-64.88-7.2-140.72,19.12-202.72,30.24-71.28,88.64-113.68,160-139.52,19-6.88,38.32-12.88,58-18.56a3.12,3.12,0,0,1,1.2-.16c3.92,0,5.6,5.76,1.52,7.6-23.2,10.48-46.24,21-68.16,32.48-107.36,56-154.24,186.4-114,186.4a30.48,30.48,0,0,0,11.52-2.72c62.08-25.68,135.84-25.92,204.08-38.56,24-4.4,47.36-10.4,69.28-19.52,87-36.32,149.28-107.36,186.32-192.8,27.6-63.76,38.32-139,59.2-205.28,2.72-8.48-3.28-15.76-10.64-15.76a11,11,0,0,0-5.84,1.52h0Zm0,0"/>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="row al-c">
                            <div class="advantage">
                                <?php the_field('advertismen_item_2'); ?>
                            </div>
                            <div class="advantage-icon">
                                <svg fill="#ff8002" width="61" height="73" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 621.75 745.69">
                                    <g>
                                        <path d="M217.83,279.63s62.14,62.14,0,155.36c0,0,155.35,0,155.35-155.36,77.68,15.54,158.46-6.21,217.5-62.14-142.93,0-155.35-52.82-248.56-62.14C332.79,18.64,261.33,0,217.83,0V62.14c37.29,0,55.93,31.07,62.14,96.32-90.1,9.32-80.78,59-248.56,59,0,0,93.21,124.28,186.42,62.14h0Zm0,0"/>
                                        <path d="M568.93,273.42C519.22,304.49,460.18,320,401.14,313.81c-15.54,90.1-93.21,155.35-183.31,152.24-24.86,0-40.39-28-24.86-49.71,21.75-28,28-65.25,15.53-96.32-59,21.75-118.06-6.21-161.57-40.39C15.87,326.24-2.77,379.06.34,435c0,170.88,139.82,310.7,310.71,310.7S621.75,605.87,621.75,435a271.79,271.79,0,0,0-52.82-161.57h0ZM466.39,590.34c-18.64,0-31.07-12.43-31.07-31.07s12.43-31.07,31.07-31.07,31.08,12.43,31.08,31.07S485,590.34,466.39,590.34h0Zm0,0"/>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="row al-c">
                            <div class="advantage">
                                <?php the_field('advertismen_item_2'); ?>
                            </div>
                            <div class="advantage-icon">
                                <svg fill="#ec018a" width="74" height="65" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 409.6 363.96">
                                    <g>
                                        <path d="M179.58,257.27L133.82,142.88,117.44,192H24.35C49.3,230.75,92.57,267.74,147.2,314.29c15.62,13.31,32.24,27.47,49.7,42.75l7.9,6.92,7.9-6.92c17.46-15.28,34.08-29.44,49.7-42.75C317,267.74,360.3,230.74,385.25,192h-173Zm0,0"/>
                                        <path d="M301.65,0c-49.15.18-80.44,33.68-96.85,64.42C188.48,33.87,157.32,0,108.77,0H108C50.85,0.46,3.05,49.17.15,110.91A126.79,126.79,0,0,0,10.68,168h89.47l31.63-94.88L182,198.73,197.38,168H398.92a126.67,126.67,0,0,0,10.53-57.1C406.55,49.17,358.75.46,301.65,0h0Zm0,0"/>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cl-6 advantage-img" style="background-image: url(<?php the_field('img_right'); ?>)">

                </div>
            </div>
        </div>
    </section>
    <section id="product" class="products">
        <?php
        $arg = array(
            'post_type' => 'product-posts',
            'order'    => 'DESC'
        );
        $services = new WP_Query;
        $posts = $services->query($arg);
        foreach($posts as $post):
            ?>
            <?php
            $prod_color = get_field('prod_color');
            $title = get_the_title();
            ?>
            <div class="product revealator-slideup revealator-once" id="product-<?php echo get_the_ID();?>" style="color:<?php echo $prod_color; ?>">
                <?php if(get_field('img_top_left')):
                    $img_bg_prod = get_field('img_top_left');
                    ?>
                    <img src="<?php echo $img_bg_prod['sizes']['small']; ?>" width="<?php echo $img_bg_prod['width']; ?>" height="<?php echo $img_bg_prod['height']; ?>" data-original="<?php echo $img_bg_prod['url']; ?>" alt="<?php echo $img_bg_prod['alt']; ?>" class="fr-parallax fr-lazy product-img-1" data-speed=".025">
                <?php endif; ?>
                <?php if(get_field('img_top_right')):
                    $img_bg_prod = get_field('img_top_right');
                    ?>
                    <img src="<?php echo $img_bg_prod['sizes']['small']; ?>" width="<?php echo $img_bg_prod['width']; ?>" height="<?php echo $img_bg_prod['height']; ?>" data-original="<?php echo $img_bg_prod['url']; ?>" alt="<?php echo $img_bg_prod['alt']; ?>"  class="fr-parallax fr-lazy product-img-2" data-speed=".035">
                <?php endif; ?>

                <div class="title-block">
                    <h2 class="fr-title">
                        <?php echo $title; ?>
                    </h2>
                    <?php if(have_rows('variables')):
                        $i = 1;
                        ?>
                        <div class="prod-variable">
                            <ul>
                                <?php while(have_rows('variables')): the_row() ?>
                                    <li class="<?php if($i == 1): echo 'active'; endif; $i++; ?>" data-color="<?php the_sub_field('color'); ?>" style="color: <?php the_sub_field('color'); ?>;"><?php the_sub_field('variable_title'); ?></li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="product-info">
                    <div class="product-info-main content row j-spb">
                        <div class="cl-3 product-info-main-img">
                            <?php
                            $prod_main_img = get_field('main_img');
                            $prod_size = 'product';
                            $url = $prod_main_img['url'];
                            $alt = $prod_main_img['alt'];
                            $width = $prod_main_img['width'];
                            $height = $prod_main_img['height'];
                            $small_prod = $prod_main_img['sizes']['product-min'];

                            echo '<img src="' . $small_prod . '" data-original="' . $url . '" alt="' . $alt . '" height="' . $height .'" width="' . $width .'" class="fr-lazy-prod" />';
                            ?>
                        </div>
                        <?php $prod_price = get_field('costs'); ?>
                        <div class="product-info-main-all">
                            <div class="row j-spb product-costs product-info-main-costs">
                                <div class="costs">
                                    <h3 class="fr-h3">
                                        <span>Rain</span> <?php echo $title; ?>
                                        <?php if(have_rows('variables')): ?>
                                            <span class="active-variable"></span>
                                        <?php endif; ?>
                                    </h3>
                                    <p><?php echo $prod_price['in_pack']; ?></p>
                                    <div class="costs-number">
                                        <span class="main-costs-number"><?php echo $prod_price['costs']; ?> грн</span>
                                        <?php if($prod_price['old_costs']): ?>
                                            <span class="main-costs-number-before"><?php echo $prod_price['old_costs']; ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div data-cost="<?php echo $prod_price['costs']; ?>" data-src="<?php echo $prod_main_img['sizes']['product-min']; ?>" data-name="<?php echo $title; ?>" data-count="<?php echo $prod_price['in_pack']; ?>" class="button-add-to-cart button-buy button">
                                        Купить
                                    </div>
                                </div>
                                <?php $opt_price =  get_field('costs_opt'); ?>
                                <div class="costs">
                                    <h3 class="fr-h3">
                                        <span>Rain</span> <?php echo $title; ?>
                                        <?php if(have_rows('variables')): ?>
                                            <span class="active-variable"></span>
                                        <?php endif; ?>

                                    </h3>
                                    <p><?php echo $opt_price['in_pack']; ?></p>
                                    <div class="costs-number">
                                        <span class="main-costs-number"><?php echo $opt_price['costs']; ?> грн</span>
                                        <?php if($opt_price['old_costs']): ?>
                                            <span class="main-costs-number-before"><?php echo $opt_price['old_costs']; ?> грн</span>
                                        <?php endif; ?>
                                    </div>
                                    <div data-cost="<?php echo $opt_price['costs']; ?>" data-src="<?php echo $prod_main_img['sizes']['product-min']; ?>" data-name="Soul" data-count="<?php echo $opt_price['in_pack']; ?>" class="button-add-to-cart button-buy button">
                                        Купить
                                    </div>
                                </div>

                            </div>
                            <div class="row j-spb product-costs product-info-main-why">
                                <div class="about-product">
                                    <p class="about-product-title">
                                        Состав Rain <span> <?php echo $title; ?></span>
                                    </p>
                                    <div class="about-product-describe">
                                        <?php the_field('sostav'); ?>
                                    </div>
                                </div>
                                <div class="about-product">
                                    <p class="about-product-title">
                                        Почему Rain <span><?php echo $title; ?></span>
                                    </p>
                                    <div class="about-product-describe"><?php the_field('why_rain'); ?>
                                    </div>
                                    <div class="free-delivery">
                                        <span class="black">Бесплатная</span> <span class="bold">Доставка</span>
                                        по Украине от 1 000 грн
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-info-second">
                        <?php if(get_field('img_bottom_left')):
                            $img_bg_prod = get_field('img_bottom_left');
                            ?>
                            <img src="<?php echo $img_bg_prod['sizes']['small']; ?>" width="<?php echo $img_bg_prod['width']; ?>" height="<?php echo $img_bg_prod['height']; ?>" data-original="<?php echo $img_bg_prod['url']; ?>" alt="<?php echo $img_bg_prod['alt']; ?>" class="fr-parallax fr-lazy product-img-3" data-speed=".09">
                        <?php endif; ?>
                        <?php if(get_field('img_bottom_right')):
                            $img_bg_prod = get_field('img_bottom_right');
                            ?>
                            <img src="<?php echo $img_bg_prod['sizes']['small']; ?>" width="<?php echo $img_bg_prod['width']; ?>" height="<?php echo $img_bg_prod['height']; ?>" data-original="<?php echo $img_bg_prod['url']; ?>" alt="<?php echo $img_bg_prod['alt']; ?>" class="fr-parallax fr-lazy product-img-4" data-speed=".02">
                        <?php endif; ?>
                        <div class="content">
                            <div class="product-tabs">
                                <ul>
                                    <?php if(get_field('main_desribe') || get_field('main_img')): ?>
                                        <li><a href="#" class="product-tab active" data-tab="product-tab-1" rel="nofollow">
                                                главное о <?php echo $title; ?>
                                            </a></li>
                                    <?php endif; ?>
                                    <?php if(get_field('ill_desribe') || get_field('ill_img')): ?>
                                        <li><a href="#" class="product-tab" data-tab="product-tab-2" rel="nofollow">
                                                при каких заболеваниях
                                                принимать
                                            </a></li>
                                    <?php endif; ?>
                                    <?php if(get_field('effect_desribe') || get_field('effect_img')): ?>
                                        <li><a href="#" class="product-tab " data-tab="product-tab-3" rel="nofollow">
                                                эффект,
                                                который получите
                                            </a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div class="product-tabs-info">
                                <?php if(get_field('main_desribe') || get_field('main_img')): ?>
                                    <div data-tab="product-tab-1" class="product-tab active">
                                        <div class="row">
                                            <div class="xl-none prod-title-gamburg">главное о <?php echo $title; ?></div>
                                            <?php if(have_rows('main_desribe')):   ?>
                                                <div class="product-tab-info-text">
                                                    <?php while(have_rows('main_desribe')): the_row(); ?>
                                                        <p class="title"><?php the_sub_field('title'); ?></p>
                                                        <div class="tab-info-text">
                                                            <?php the_sub_field('description'); ?>
                                                        </div>
                                                    <?php  endwhile; ?>
                                                </div>
                                            <?php endif; ?>

                                            <?php
                                            $effect_img = get_field('main_img');
                                            if(!empty($effect_img)): ?>
                                                <div class="product-tab-info-img">

                                                    <img src="<?php echo $effect_img['sizes']['product-content-img']; ?>" height="<?php echo $effect_img['sizes']['product-content-img-height']; ?>" width="<?php echo $effect_img['sizes']['product-content-img-width']; ?>"/>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if(get_field('ill_desribe') || get_field('ill_img')): ?>
                                    <div class="product-tab" data-tab="product-tab-2">
                                        <div class="row">
                                            <div class="xl-none prod-title-gamburg">при каких заболеваниях принимать</div>
                                            <?php if(have_rows('ill_desribe')):   ?>
                                                <div class="product-tab-info-text">
                                                    <?php while(have_rows('ill_desribe')): the_row(); ?>
                                                        <p class="title"><?php the_sub_field('title'); ?></p>
                                                        <div class="tab-info-text">
                                                            <?php the_sub_field('description'); ?>
                                                        </div>
                                                    <?php  endwhile; ?>
                                                </div>
                                            <?php endif; ?>

                                            <?php
                                            $effect_img = get_field('ill_img');
                                            if(!empty($effect_img)): ?>
                                                <div class="product-tab-info-img">

                                                    <img src="<?php echo $effect_img['sizes']['product-content-img']; ?>" height="<?php echo $effect_img['sizes']['product-content-img-height']; ?>" width="<?php echo $effect_img['sizes']['product-content-img-width']; ?>"/>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if(get_field('effect_desribe') || get_field('effect_img')): ?>
                                    <div class="product-tab" data-tab="product-tab-3">
                                        <div class="row">
                                            <div class="xl-none prod-title-gamburg">эффект, который получите</div>
                                            <?php if(have_rows('effect_desribe')):   ?>
                                                <div class="product-tab-info-text">
                                                    <?php while(have_rows('effect_desribe')): the_row(); ?>
                                                        <p class="title"><?php the_sub_field('title'); ?></p>
                                                        <div class="tab-info-text">
                                                            <?php the_sub_field('description'); ?>
                                                        </div>
                                                    <?php  endwhile; ?>
                                                </div>
                                            <?php endif; ?>

                                            <?php
                                            $effect_img = get_field('effect_img');
                                            if(!empty($effect_img)): ?>
                                                <div class="product-tab-info-img">

                                                    <img src="<?php echo $effect_img['sizes']['product-content-img']; ?>" height="<?php echo $effect_img['sizes']['product-content-img-height']; ?>" width="<?php echo $effect_img['sizes']['product-content-img-width']; ?>"/>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php wp_reset_query(); ?>
    </section>
    <section  class="revealator-slideup revealator-once get-raine-advertising" >
        <div class="get-raine-advertising-wrap content">
            <div class="text-advertising">
                <p class="slogan">
                    Попробуй <span class="pink">Rain</span> уже <span class="white">СЕГОДНЯ</span>
                </p>
                <p class="group">
                    Профилактический набор
                </p>
                <p class="prod">
                    Rain <span class="pink">Core</span>+<span class="green">Soul</span> 5+5
                </p>
            </div>
            <div class="info-advertising row j-spa al-c">
                <div class="img-advertising">
                    <?php
                    $prod_sale = get_field('product_photo');

                    ?>

                    <img src="<?php echo $prod_sale['url']; ?>" alt="<?php echo $prod_sale['alt']; ?>" height="<?php echo $prod_sale['height']; ?>" width="<?php echo $prod_sale['width']; ?>"/>
                </div>
                <div class="costs">
                    <h3 class="fr-h3">
                        <?php
                        $product1 = get_field('product_1');
                        $prodText1 = $product1['product'];
                        $prodColor1 = $product1['color'];
                        $product2 = get_field('product_2');
                        $prodText2 = $product2['product'];
                        $prodColor2 = $product2['color'];
                        ?>
                        Rain <span class="pink" style="color: <?php echo $prodColor1; ?>"><?php echo $prodText1; ?></span>+<span class="green"  style="color: <?php echo $prodColor2; ?>"><?php echo $prodText2; ?></span>
                    </h3>
                    <p><?php the_field('count_packets'); ?></p>
                    <div class="costs-number">
                        <span class="main-costs-number"><?php the_field('new_price'); ?> грн</span>
                        <?php if(get_field('old_price')): ?>
                            <span class="main-costs-number-before"><?php the_field('old_price'); ?> грн</span>
                        <?php endif; ?>
                    </div>
                    <div data-cost="<?php the_field('new_price'); ?>" data-src="<?php echo $prod_sale['sizes']['product-min'] ?>" data-name="<?php echo $prodText1; ?> and <?php echo $prodText2; ?>" data-count="<?php the_field('count_packets'); ?>" class="button-add-to-cart button-buy button">
                        Купить
                    </div>
                </div>
                <div class="how-mutch">
                    5+5
                </div>
            </div>
        </div>
    </section>
<?php get_template_part('inc/testimonials'); ?>
<?php get_template_part('inc/faq'); ?>
    <section class="call-back">
        <div class="content row al-c j-spb">
            <div class="question">
                <p class="question-text">
                    Остались <span class="pink">вопросы</span>?
                </p>
                <p class="question-answer">
                    Получи бесплатную консультацию
                </p>
                <div class="call-back-button button open-consultation">
                    Получить консультацию
                </div>
            </div>
            <div class="question-logo">
                <svg fill="#ffffff" width="437" height="144" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 65.21">
                    <g>
                        <path d="M177.65-.1l-32.71,0V65h7.42Q160,65,160,57.39V15h17.55c5.1,0,7.63,2.58,7.63,7.73V65.12h7.53q7.52,0,7.52-7.52V23q0-23.08-22.57-23.08" transform="translate(-0.23 0.1)"/>
                        <path d="M50.39-.07v7.4q0,7.63-7.52,7.62H22.94q-7.66,0-7.67,7.73V57.49q0,7.63-7.53,7.62H0.23V23Q0.23-.1,22.79-0.1Z" transform="translate(-0.23 0.1)"/>
                        <rect x="119.59" width="15.05" height="65.11"/>
                        <path d="M76.93,65Q54.36,65,54.37,41.94V23Q54.37-.1,76.93-0.1l32.5,0V65H102q-7.64,0-7.63-7.62V15H77.09q-7.68,0-7.67,7.73V42.24q0,7.72,7.67,7.72H90.41v7.42q0,7.62-7.62,7.63H76.93Z" transform="translate(-0.23 0.1)"/>
                    </g>
                </svg>
            </div>
        </div>
    </section>
<?php
get_footer();
?>