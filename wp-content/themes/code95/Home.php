<?php
/*
Template Name: Home page
 */
get_header();
?>
<main class="container">
    <section class="news-one">
        <div class="row ">
            <?php $main_posts = get_field('main_posts', get_the_ID());  ?>
            <div class="col-sm-12  col-md-8 ">
                <div class="row">
                    <?php $term1 = get_the_terms($main_posts[0]->ID, 'news_category') ?>
                    <?php $term2 = get_the_terms($main_posts[1]->ID, 'news_category') ?>
                    <?php $term3 = get_the_terms($main_posts[2]->ID, 'news_category') ?>
                    <div class="col-xs-12 col-sm-8 col-md-8 custom-padding">
                        <div class="local-news" style="background-image:url(<?php echo get_the_post_thumbnail_url($main_posts[0]->ID) ?>)">
                            <div class="news-title">
                                <div class="row news-tag-local">
                                    <h4><?php echo $term1[0]->name; ?></h4>
                                </div>
                                <h3><?php echo __($main_posts[0]->post_title);  ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 ">
                        <div class="row">
                            <div class="local-news-mini custom-margin" style="background-image:url(<?php echo get_the_post_thumbnail_url($main_posts[1]->ID) ?>)">
                                <div class="news-title">
                                    <div class="row news-tag-local">
                                        <h4><?php echo $term2[0]->name ?></h4>
                                    </div>
                                    <h5><?php echo $main_posts[1]->post_title ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="local-news-mini" style="background-image:url(<?php echo get_the_post_thumbnail_url($main_posts[2]->ID) ?>)">
                                <div class="news-title">
                                    <div class="row news-tag-world">
                                        <h4><?php echo $term3[0]->name  ?></h4>
                                    </div>
                                    <h5><?php echo $main_posts[2]->post_title ?></h5>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 ads">
                <div class="adverts-2"></div>
            </div>
        </div>
    </section>
    <div class="line"></div>
    <section class="news-two">
        <h2>EGYPT NEWS</h2>
        <div class="owl-carousel">
            <?php

            $args = [
                'post_type' => 'news',
                'status' => 'publish',
                'tax_query' => array(
                    [
                        'taxonomy' => 'news_category',
                        'field' => 'slug',
                        'terms' => 'egypt-news'
                    ]
                )
            ];
            $egypt_news = get_posts($args);
            
            foreach ($egypt_news as $item) {
            ?>

                <div class="item" style="background-image:url(<?php echo get_the_post_thumbnail_url($item->ID);  ?>)">
                    <div class="title">
                        <h5><?php echo $item->post_title ?></h5>
                    </div>
                </div>
            <?php
            }

            ?>
        </div>
    </section>

    <section class="news-three">
        <div class="row">
            <div class="col-md-8 custom-padding">
                <div class="line"></div>
                <h2>FEATURES</h2>
                <div class="row">
                    <?php $freature = get_field('feature_news', get_the_ID())  ?>
                    <div class="col-md-6 custom-padding-left">
                        <div class="news-features" style="background-image: url(<?php echo get_the_post_thumbnail_url($freature[0]->ID) ?>);"></div>
                    </div>
                    <div class="col-md-6 custom-padding-right">
                        <div class="news-features" style="background-image: url(<?php echo get_the_post_thumbnail_url($freature[1]->ID) ?>);"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="line"></div>
                <h2>TOP 5 STORIES</h2>
                <ul class="top-stories">
                    <?php
                    /** get top 5 posts order by date  */
                    wp_reset_query();
                    $args = [
                        'post_type' => 'news',
                        'status' => 'publish',
                        'orderby' => 'date',
                        'order'   => 'DESC',
                    ];
                    $news = get_posts($args);

                    foreach ($news as $item) {
                    ?>
                        <li><?php echo $item->post_title ?></li>
                    <?php
                    }
                    ?>


                </ul>

            </div>
        </div>
    </section>
</main>

<?php

get_footer()
?>