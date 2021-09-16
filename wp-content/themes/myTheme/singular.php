
<?php 
    get_header(); 
     the_post();  
?>
<section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?php the_title() ?></h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            <?php the_content() ?>    
            <?php the_field('автор') ?>
            <?php the_field('источник') ?>
            
            </div>
        </section>


        <?php get_footer() ?>