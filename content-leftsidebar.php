<?php
/**
 * This file displays page with left sidebar.
 *
 */
?>

<?php
   /**
    * travelify_before_primary
    */
   do_action( 'travelify_before_primary' );
?>

<div id="primary">
   <?php
      /**
       * travelify_before_loop_content
		 *
		 * HOOKED_FUNCTION_NAME PRIORITY
		 *
		 * travelify_loop_before 10
       */
      do_action( 'travelify_before_loop_content' );

      /**
       * travelify_loop_content
		 *
		 * HOOKED_FUNCTION_NAME PRIORITY
		 *
		 * travelify_theloop 10
       */
      do_action( 'travelify_loop_content' );

      /**
       * travelify_after_loop_content
		 *
		 * HOOKED_FUNCTION_NAME PRIORITY
		 *
		 * travelify_next_previous 5
		 * travelify_loop_after 10
       */
      do_action( 'travelify_after_loop_content' );
   ?>
</div><!-- #primary -->

<?php
   /**
    * travelify_after_primary
    */
   do_action( 'travelify_after_primary' );
?>

<div id="secondary" class="no-margin-left">
	<?php get_sidebar( 'left' ); ?>
</div><!-- #secondary -->