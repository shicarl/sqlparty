<?php
/**
 * SQLParty 评论展示以及发表评论
 *
 * @package WordPress
 * @subpackage SQLParty
 * @since 2013-06-29
 */
?>
<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>


		<ol class="commentlist">
			<?php wp_list_comments( array( 'style' => 'ol' ) ); ?>
		</ol><!-- .commentlist -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="navigation" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( '评论内容分页导航', 'sqlparty' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '较新评论', 'sqlparty' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( '较早评论', 'sqlparty' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

		<?php
		/* If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="nocomments"><?php _e( '评论内容已关闭' , 'sqlparty' ); ?></p>
		<?php endif; ?>
    <hr>
	<?php endif; // have_comments() ?>

	<?php comment_form("comment_notes_after="); ?>
    <script>
        $(document).ready(function(){
            $("#submit").addClass("btn btn-primary");
        });
    </script>

</div><!-- #comments .comments-area -->