<?php

/* Template Name: Contact Us
*/
?>


<?php
// function for fetching the header.php file
?>


<?php get_header();?>
<section class="page-wrap">
<div class="container">


    <h1><?php the_title();?> </h1>

        <div class="row">

            <div class="col-lg-6">

                this is where the contact page goes.

            </div>

            <div class="col-lg-6">

            

                <?php get_template_part('includes/section', 'content');?>

            </div>


        </div>


</div>
</section>

<?php
// function for fetching the footer.php file
?>
<?php get_footer();?>   