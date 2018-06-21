
<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-12">
            <div class="whiteBorder">

    <?php

    $query = new WP_Query(array(
                'category_name'=>'whatInside',
                'posts_per_page' => 5,
                'orderby' => 'title'
            ));
            ?>

           <?php
            if($query->have_posts()){
                while($query->have_posts()){
                    $query->the_post();
                    ?>
                    <h1><?php the_title();?></h1>

                    <div class="content">
                        <?php the_content(); ?>
                    </div
                    <hr>

                    <?php
                }

                wp_reset_postdata();
            }

            ?>

            </div>
        </div>

    </div>
</div>

<hr>

<?php get_footer(); ?>