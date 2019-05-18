<?php
/**
 * Template for liveblog post.
 */

do_action( 'elb_before_liveblog_post', $post );
?>

<p class="elb-liveblog-post-time"><time datetime="<?php echo get_the_time( 'Y-m-d H:i' ); ?>"><?php printf( _x( '%s ago', '%s = human-readable time difference', ELB_TEXT_DOMAIN ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></time></p>

<h2 class="elb-liveblog-post-heading"><?php echo $post->post_title; ?></h2>

<div class="elb-liveblog-post-content"><?php the_content(); ?></div>

<?php if ( current_user_can( 'edit_post', $post ) ) { ?>
	<div class="elb-liveblog-actions">
		<?php edit_post_link(); ?>
	</div>
<?php } ?>

<?php do_action( 'elb_after_liveblog_post', $post ); ?>