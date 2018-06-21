<?php get_header(); ?>

<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron colorGreen">
        <div class="container">
            <h1 class="display-3">Piękna Helena</h1>
            <p><h2>Kosmetyki wegetariańskie i wegańskie. </h2><br><h3>Z miłości do Córki.<br> Inspirowane wyzwaniami.</h3></p>
            <div class="line"></div>
            <!--            <p><a class="btn btn-primary btn-lg btnLearnMore" href="http://localhost/PieknaHelena/wordpress/index.php/category/whatinside/" role="button">Chcę wiedzieć więcej... &raquo;</a>-->
            <!--                <a class="btn btn-primary btn-lg btnLearnMore peel" href="#" role="button">Robię sobie peeling! Już! &raquo;</a></p>-->
        </div>
    </div>


    <div class="container shop">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="whiteBorder">

                <?php
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        ?>
                        <h1><?php the_title();?></h1>

                        <div class="content">
                            <?php the_content(); ?>
                        </div
                        <hr>

                        <?php
                    }
                }
                ?>
                </div>
            </div>
        </div>
    </div>
</main>
    <hr>

<?php get_footer(); ?>