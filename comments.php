<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>

	<h2 class="comments-title">
		<?php
			printf( _n( 'Eine Antwort on &ldquo;%2$s&rdquo;', '%1$s Antworten zu &ldquo;%2$s&rdquo;', get_comments_number(), 'twentyfourteen' ),
				number_format_i18n( get_comments_number() ), get_the_title() );
		?>
	</h2>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfourteen' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentyfourteen' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyfourteen' ) ); ?></div>
	</nav><!-- #comment-nav-above -->
	<?php endif; // Check for comment navigation. ?>

	<ol class="comment-list">
		<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
				'callback'    => 'bootstrapwp_comment'
			) );
		?>
	</ol><!-- .comment-list -->

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfourteen' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentyfourteen' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyfourteen' ) ); ?></div>
	</nav><!-- #comment-nav-below -->
	<?php endif; // Check for comment navigation. ?>

	<?php if ( ! comments_open() ) : ?>
	<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyfourteen' ); ?></p>
	<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php 
		    $req = get_option( 'require_name_email' );
		    $aria_req = ( $req ? " aria-required='true'" : '' );

			$comments_args = array(
	        // change the title of send button 
	        'label_submit'=>'Senden',
	        // change the title of the reply section
	        'title_reply'=>'Einen Kommentar abgeben',
	        // remove "Text or HTML to be displayed after the set of comment fields"
	        'comment_notes_after' => '',
	        // redefine your own textarea (the comment body)
	        'comment_field' => ' <div class="form-group"><label for="comment">' . _x( 'Kommentar', 'bootstrapwp' ) . '</label><textarea class="form-control" rows="10" id="comment" name="comment" aria-required="true"></textarea></div>',

	        'fields' => apply_filters( 'comment_form_default_fields', array(

		    'author' =>
		      '<div class="form-group">' .
		      '<label for="author">' . __( 'Name', 'bootstrapwp' ) . '</label> ' .
		      ( $req ? '<span class="required">*</span>' : '' ) .
		      '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
		      '" size="30"' . $aria_req . ' /></div>',

		    'email' =>
		      '<div class="form-group"><label for="email">' . __( 'Email', 'bootstrapwp' ) . '</label> ' .
		      ( $req ? '<span class="required">*</span>' : '' ) .
		      '<input class="form-control" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
		      '" size="30"' . $aria_req . ' /></div>',

		    'url' =>
		      '<div class="form-group"><label for="url">' .
		      __( 'Website', 'bootstrapwp' ) . '</label>' .
		      '<input class="form-control" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
		      '" size="30" /></div>'
		    )
		  ),
		);

		comment_form($comments_args); 	?>

</div><!-- #comments -->
