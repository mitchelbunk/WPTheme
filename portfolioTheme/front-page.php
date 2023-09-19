
<?php
// function for fetching the header.php file
?>

    <?php get_header('secondary');?>

<section class="page-wrap">
    <div class="container">


        <h1><?php the_title();?> </h1>

    <?php get_template_part('includes/section', 'content');?>


    </div>
</section>

<?php
// function for fetching the footer.php file
?>
<?php get_footer();?>