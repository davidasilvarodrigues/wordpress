<?php /* Template name: Sobre */ ?>

<?php
    include'header.php';
?>

    <?php if(have_posts()): ?>
        <?php while(have_posts()): ?>
            
            <?php the_post(); ?>

            <?php echo the_content();>
    
        <?php endwhile ?>
    <?php endif ?>


<?php
    include'footer.php';
?>