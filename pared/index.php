<?php get_header(); ?>

<div id="content" role="main">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<style id="s" type="text/css">
<?php $key = "css";
    echo get_post_meta($post -> ID, $key, true);
 ?>
</style>

<div id="pattern" class="mod group">
<h3 class="label">Pattern</h3>

<h4><?php the_category(' '); ?> <span class="sep">&rarr;</span> <?php the_title(); ?></h4>

    <div id="pattern-wrap" class="group">
        <?php echo get_post_meta($post -> ID, 'html', true); ?>
        </style>
    </div>
</div>

<div class="group">
<div id="markup" class="mod">
<h3 class="label">HTML</h3> <a href="#" class="clip" title="select code for copying"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-copy.png" alt="copy" /></a>
<textarea class="mod-ta">
<?php echo esc_textarea(get_post_meta($post -> ID, 'html', true));?>
</textarea>
</div>

<div id="style" class="mod">
<h3 class="label">CSS</h3> <a href="#" class="clip" title="select code for copying"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-copy.png" alt="copy" /></a>
<textarea id="css-code" class="mod-ta">
<?php echo get_post_meta($post -> ID, 'css', true);
 ?>
</textarea>
</div>
</div>

<?php if($post->post_content != "") {?>
<div id="pattern-notes" class="mod">
<h3 class="label">Notes</h3>
<?php the_content(); ?>
</div>
<?php } ?>

<?php endwhile; // end of the loop. ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>