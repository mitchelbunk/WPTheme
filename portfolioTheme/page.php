    <!--this is the page template-->

 <!--function for fetching the header.php file -->

<?php get_header();?>

<section class ="page-wrap">
<div class="container">


<h1><?php the_title();?> </h1>

<!-- function for fetching the template, in this case the section-content.php-->

<?php get_template_part('includes/section', 'content');?>


</div>
</section>


 <!-- function for fetching the footer.php file-->

<?php get_footer();?>   