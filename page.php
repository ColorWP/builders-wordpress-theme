<?php get_header(); ?>

                <div id="body">
                    
                    <?php get_sidebar(); ?>
    
    			<div id="main-content">
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            
                            
                                <a href="<?php the_permalink() ?>"><p class="post-title"><?php the_title() ?></p></a>
				<div class="post-content">
                                        
                                    <?php if(has_post_thumbnail()):
                                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(150, 150));
                                    $thumb = $thumb[0];
                                    ?>
                                    <img src="<?php echo $thumb ?>" class="post-image">
                                    <?php endif; ?>
                                    
                                    <?php the_content() ?>
                                    
                                    <a href="<?php the_permalink() ?>"><div class="post-comments">Comments</div></a>
                                    <div class="post-meta"><?php the_date() ?><span><!--Sticker like outside effect--></span></div>
				</div><!--/post-content-->
                                
                            <?php endwhile; ?>
                            <?php endif; ?>
                                
                            <?php comments_template() ?>
				
			</div>
		</div><!--/body-->
		
		<div class="clear"></div>
                
                <?php include('footerwidgets.php') ?>
                
                <?php get_footer(); ?>
                
                <!--
                CHANGES END HERE


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<div class="postmetadata">
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> | 
				<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
			</div>

		</div>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>



<?php get_footer(); ?>-->