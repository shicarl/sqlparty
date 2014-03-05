<?php
/**
 * SQLParty 按日期归档页面
 *
 * @package WordPress
 * @subpackage SQLParty
 * @since 2013-06-29
 */
get_header();

global $more;
$more = 0;
?>
    <div class="container">
        <div class="row-fluid">
            <div class="span9">
                <h4><i class='icon-folder-close'></i>  归档文章：<?php echo get_the_date( 'F Y' ); ?></h4>
                <?php require_once("archive_ad_front.php"); ?>
                <hr>
                <?php get_template_part( 'content', 'list' ); ?>     
                <?php require_once("archive_ad.php"); ?>
            </div>
            <div class="span3 well">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div> <!-- /container -->

<?php
get_footer();
?>

